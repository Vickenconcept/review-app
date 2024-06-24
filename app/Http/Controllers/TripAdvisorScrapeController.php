<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\DomCrawler\Crawler;


class TripAdvisorScrapeController extends Controller
{
    public function scrapeReviews(Request $request)
    {

      
    $searchValue = $request->input('search_value', 'shoe');

    $scriptPath = base_path('scripts/scrape.cjs'); // Adjust the path to your script if you renamed it to .cjs
    $command = "node $scriptPath " . escapeshellarg($searchValue);
    $output = shell_exec($command . ' 2>&1'); // Capture errors as well
    
    // Parse the JSON output
    $urls = json_decode($output, true);

    dd('Debug Output:', $output, 'Parsed URLs:', $urls);

    return response()->json($urls);
    
        $apifyApiToken = env('APIFY_API_TOKEN');

        $searchType = $request->input('search_type', 'keyword'); // e.g., 'url', 'keyword'
        $searchValue = $request->input('search_value', 'shoe');
        // $searchValue = $request->input('search_value', 'https://www.tripadvisor.com/Hotel_Review-g60763-d208453-Reviews-Hilton_New_York_Times_Square-New_York_City_New_York.html'); 
        if (empty($searchType) || empty($searchValue)) {
            return response()->json(['error' => 'Missing search type or search value'], 400);
        }

        $startUrls = [];

        if ($searchType === 'url') {
            if (!filter_var($searchValue, FILTER_VALIDATE_URL)) {
                return response()->json(['error' => 'Invalid URL'], 400);
            }
            $startUrls[] = ['url' => $searchValue];
        } elseif ($searchType === 'keyword') {
            $searchUrl = "https://www.tripadvisor.com/Search?q=" . urlencode($searchValue);
            $startUrls[] = ['url' => $searchUrl];
        } else {
            return response()->json(['error' => 'Unsupported search type'], 400);
        }

        $inputData = [
            'startUrls' => $startUrls,
            'maxItemsPerQuery' => 50,
            'scrapeReviewerInfo' => true,
            'lastReviewDate' => '',
            'reviewRatings' => [
                'ALL_REVIEW_RATINGS'
            ],
            'reviewsLanguages' => [
                'ALL_REVIEW_LANGUAGES'
            ],
            'customMapFunction' => '(object) => { return { ...object } }'
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://api.apify.com/v2/acts/Hvp4YfFGyLM635Q2F/runs?token=$apifyApiToken", $inputData);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to start the Apify actor'], 500);
        }

        $runId = $response->json()['data']['id'];

        $status = 'RUNNING';
        while ($status === 'RUNNING' || $status === 'READY') {
            sleep(5);

            $statusResponse = Http::withHeaders([
                'Authorization' => "Bearer $apifyApiToken",
            ])->get("https://api.apify.com/v2/actor-runs/$runId");

            if ($statusResponse->failed()) {
                return response()->json(['error' => 'Failed to fetch the actor run status'], 500);
            }

            $status = $statusResponse->json()['data']['status'];
        }

        if ($status !== 'SUCCEEDED') {
            $logsResponse = Http::withHeaders([
                'Authorization' => "Bearer $apifyApiToken",
            ])->get("https://api.apify.com/v2/actor-runs/$runId/logs");

            if ($logsResponse->failed()) {
                return response()->json(['error' => 'Failed to fetch the run logs'], 500);
            }

            return response()->json([
                'error' => 'Actor run did not succeed',
                'logs' => $logsResponse->json()
            ], 500);
        }

        $resultsResponse = Http::withHeaders([
            'Authorization' => "Bearer $apifyApiToken",
        ])->get("https://api.apify.com/v2/actor-runs/$runId/dataset/items");
        dd($resultsResponse->json());

        if ($resultsResponse->failed()) {
            return response()->json(['error' => 'Failed to fetch the results'], 500);
        }

        return response()->json($resultsResponse->json());
    }
}
