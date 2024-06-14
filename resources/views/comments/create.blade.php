<x-layout>


    <div class="py-12 w-1/2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form class="flex flex-col " method="post" action="{{route('comments.add.post')}}">
                    @csrf

                    <div class="mb-5">
                        <label class="ml-4 text-gray-400 font-semibold mb-2" for="comment">Comment</label>
                        <textarea class="text-white bg-transparent border rounded-lg shadow border-gray-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" id="comment" type="text" name="comment" rows="5" required></textarea>
                        <input type="hidden"  name="newsId" value="{{$newsId}}" />
                    </div>
                    <button class="bg-blue-900 m-auto w-1/12 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-5" type="submit">Add</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
