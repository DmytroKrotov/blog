<x-layout>
    <div>
        <div class="bg-gray-800  flex justify-center items-center">
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-24 mx-auto">
                    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                        <h2 class="text-blue-100 font-extrabold title-font tracking-wider text-2xl">{{$article->summary}}</h2>

                        <span class="inline-block h-1 w-10 rounded bg-blue-600 mt-8 mb-6"></span>
                        <p class="leading-relaxed text-blue-100 text-lg">{{$article->full_text}}</p>
                        <span class="inline-block h-1 w-10 rounded bg-blue-600 mt-8 mb-6"></span>
                        <div>
                            <a href="{{route('comments.add.get',['newsId'=>$article->id])}}" class=" text-blue-600 inline-flex items-center">{{__('nav.addComment')}}
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

        </div>

        <div class="mt-8">
            @if(count($comments)==0)
                <p class="leading-relaxed text-lg">{{__('nav.noComments')}}</p>
            @else
                <div class="flex flex-wrap -m-4">
                    @foreach($comments as $comment)
                        <x-comments :comment="$comment"></x-comments>
                    @endforeach

                </div>
            @endif
        </div>



    </div>




</x-layout>
