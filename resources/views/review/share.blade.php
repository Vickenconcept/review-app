<x-guest-layout>
    {{-- {{ $reviews }} --}}


    <div>
        <div class="py-5 border-b px-3 md:px-10 flex space-x-5 items-center">
            <div>
                <h3 class=" font-bold">Share reviews</h3>
            </div>
            <span class="text-xs">select to share</span>
        </div>

        <div class="flex justify-between  bg-gray-50">
            <h1 class="font-semibold md:w-[80%] mx-auto px-3 py-5">Select the review you want to share.</h1>

        </div>
    </div>

    <div class="h-full  bg-gray-50 space-y-10 pt-10">
        <section class=" grid grid-cols-1 md:grid-cols-3 gap-8 md:w-[80%] mx-auto px-3">

            @forelse ($reviews as $review)
                <a href="{{ route('review.shareOne', ['uuid' => $review->uuid]) }}">
                    <div class="flex flex-col items-center p-4 shadow-md hover:shadow-lg rounded-lg bg-white">
                        <p class="max-w-full  whitespace-normal break-all text-md font-medium text-center">
                            "{{ $review->review_platform_ans }}"
                        </p>

                        <div class="my-8 text-left">
                            @for ($i = 1; $i <= $review->star_question_ans; $i++)
                                <i class="bx bxs-star text-yellow-400 text-xl"></i>
                            @endfor
                        </div>
                        <footer class="flex items-center gap-3 ">
                            <img class="flex-shrink-0 w-12 h-12 border rounded-full border-black/10"
                                src="{{ $review->contact_info_ans['image'] ? $review->contact_info_ans['image'] : asset('images/image-thumb.png') }}"
                                alt="Sebastiaan Kloos" loading="lazy">
                            <div class="inline-block font-bold tracking-tight text-sm">
                                <p>{{ $review->contact_info_ans['location'] }}</p>
                                <p class="font-medium text-black/60">{{ $review->contact_info_ans['organisation'] }}
                                </p>
                            </div>
                        </footer>
                    </div>
                </a>
            @empty
                <div class="text-center font-bold text-cyan-400 bg-cyan-100 p-3">empty data</div>
            @endforelse

        </section>
        <div class="md:w-[80%] mx-auto pb-10 px-3  ">{{ $reviews->links() }}</div>
    </div>


</x-guest-layout>
