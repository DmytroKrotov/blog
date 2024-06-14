
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('nav.dashboard') }}
            <a href="{{ route('news.add.get') }}"  class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('nav.addNews')}}</a>
            <a href="#" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('nav.deleteNews')}}</a>
            <a href="#" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{__('nav.updateNews')}}</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form class="flex flex-col " method="post" action="/add">
                    @csrf
                    <div class="mb-5">
                        <label class="ml-4 text-gray-400 font-semibold mb-2" for="title">{{__('nav.title')}}</label>
                        <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="text" id="title" name="title" required>
                    </div>
                    <div class="mb-5">
                        <label class="ml-4 text-gray-400 font-semibold mb-2" for="description">{{__('nav.description')}}</label>
                        <input class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" type="text" id="description" name="description" required>
                    </div>
                    <div class="mb-5">
                        <label class="ml-4 text-gray-400 font-semibold mb-2" for="article">{{__('nav.article')}}</label>
                        <textarea class="bg-transparent border rounded-lg shadow border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 py-2 px-4 block w-full appearance-none leading-normal" id="article" name="article" rows="5" required></textarea>
                    </div>
                    <button class="bg-gradient-to-r from-purple-400 to-indigo-500 text-white font-semibold py-2 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out mb-5" type="submit">{{__('nav.create')}}</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
