<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Uploader;
use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class VideoController extends Controller
{

    public function showForm()
    {
        return view('record_video');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'video' => 'required|mimetypes:video/x-matroska,video/webm|max:10240',
        ]);

        $video = $request->file('video');
        // dd($video);

        // Inspect the content and details of the uploaded file
        info('Uploaded video details:', [
            'Original Name' => $video->getClientOriginalName(),
            'MIME Type' => $video->getMimeType(),
            'Size' => $video->getSize(),
            // Add any other relevant information you want to log
        ]);
        $filename = 'recorded-video.webm';


        // Store the video file
        // $video->storeAs('uploads', $filename, 'public');

        $cloudinary = new Cloudinary();
        $cloudinaryResponse = $cloudinary->uploadApi()->upload($video->getRealPath(), [
            'resource_type' => 'video',
        ]);
        // Obtain the Cloudinary URL
        $cloudinaryUrl = $cloudinaryResponse['secure_url'];

        Cache::put('cloudinary_video_url', $cloudinaryUrl,  now()->addMinutes(10));

        return response()->json(['success' => true, 'videoUrl' => $cloudinaryUrl]);
    }
}
