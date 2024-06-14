<div class="p-4 md:w-1/3 ">
    <div class="flex rounded-lg h-full bg-gray-600 p-8 flex-col">
        <div class="flex items-center mb-3">
            <h2 class="border-l-blue-200 text-blue-100 text-lg title-font font-medium">{{App\Models\User::find($comment->userId)->name}}</h2>
        </div>
        <div class="flex-grow">
            <p class="leading-relaxed text-blue-200 text-base">{{$comment->text}}</p>
            <a class="mt-3 text-blue-600 inline-flex items-center">Edit
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
