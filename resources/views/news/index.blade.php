<x-layout>
    <section class="w-1/2 text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="-my-8 divide-y-2 divide-gray-100">
                @foreach($news as $item)
                    <div class="mb-6 flex flex-wrap md:flex-nowrap  justify-between gap-x-6 py-5 ">

                        <div class="md:flex-grow">
                            <h2 class="text-2xl font-medium text-gray-600 title-font mb-2">{{$item->summary}}</h2>
                            <h2 class="font-semibold title-font text-gray-700">{{$item->short_description}}</h2>
                            <a href="{{route('article',['id'=>$item->id])}}" class="text-indigo-500 inline-flex items-center mt-4">{{__('nav.readMore')}}
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>


