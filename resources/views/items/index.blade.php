<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Latest news') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-lg font-bold mb-4">Latest news</h1>
                    <ul>
                        @foreach($items as $item)
                            <li>
                                <strong>Title: </strong>{{ $item->title }} <br>
                                <strong>Cover Image: </strong><img src="{{ $item->cover_image }}" alt="Cover Image" width="100"> <br>
                                <strong>Content: </strong>{{ $item->content }} <br>
                                <strong>Publishing Date: </strong>{{ $item->publishing_date ? \Carbon\Carbon::parse($item->publishing_date)->format('d-m-Y') : 'N/A' }}
                            </li>
                            <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
