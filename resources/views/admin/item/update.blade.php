<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Item</h1>
                    <hr />
                    <form action="{{ route('admin/items/update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $item->title }}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Cover Image</label>
                                <input type="text" name="cover_image" class="form-control" placeholder="Cover Image URL" value="{{ $item->cover_image }}">
                                @error('cover_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" placeholder="Content">{{ $item->content }}</textarea>
                                @error('content')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Publishing Date</label>
                                <input type="date" name="publishing_date" class="form-control" value="{{ $item->publishing_date ? \Carbon\Carbon::parse($item->publishing_date)->format('Y-m-d') : '' }}">
                                @error('publishing_date')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
