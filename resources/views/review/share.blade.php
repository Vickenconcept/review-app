<x-app-layout>

    
    <div class="h-full  space-y-10 ">
        <div class="w-[90%] mx-auto">
            <h3 class=" font-medium text-2xl capitalize">Social Media Share</h3>
                <p class=" mt-1 text-gray-400">Select the review you want to share.</p>
        </div>
        <section class=" grid grid-cols-1 md:grid-cols-2 gap-5  mx-auto px-3">

            @forelse ($reviews as $review)
                <div
                    class="  flex flex-col items-center py-4 px-8 shadow-md hover:shadow-lg rounded-lg bg-white bg-opacity-95 w-[90%] mx-auto">
                   <div class="flex justify-end w-full">
                    <a href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}" class="">
                        <button
                            class=" rounded-lg px-3 py-0.5 border border-cyan-900 bg-cyan-900 text-cyan-50 text-xs flex items-center hover:shadow-md">
                            Select</button>
                    </a>
                   </div>
                    <footer class="flex justify-start gap-3  mt-5 mb-5">
                        <img id="imageToCapture" class="flex-shrink-0 w-16 h-16 border rounded-full border-black/10"
                            src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                            alt="Sebastiaan Kloos" loading="lazy">

                        <div class="inline-block font-bold tracking-tight text-sm break-all">
                            <p>{{ $review->contact_info_ans['location'] }}</p>
                            <p class="font-medium text-black/60">
                                {{ $review->contact_info_ans['organisation'] }}
                            </p>
                            <div class="mb-5 text-left">
                                @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                    <i class="bx bxs-star text-yellow-400 text-md"></i>
                                @endfor
                            </div>
                        </div>
                    </footer>

                    <p
                        class="max-w-full  whitespace-normal break-all text-md font-medium italic text-center mb-8 first-letter:uppercase text-gray-700">
                        "{{ $review->review_platform_ans }}"
                    </p>


                </div>
            @empty
                <div class="text-center font-bold text-cyan-400 bg-cyan-100 p-3 md:col-span-3 ">empty data</div>
            @endforelse

        </section>
        <div class="md:w-[80%] mx-auto pb-10 px-3  ">{{ $reviews->links() }}</div>
    </div>


</x-app-layout>
