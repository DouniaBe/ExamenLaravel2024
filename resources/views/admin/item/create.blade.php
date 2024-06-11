<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Create Item</h1>
                    <hr />
                    @if(session()->has('error'))
                        <div>
                            {{ session('error') }}
                        </div>
                    @endif
                    <p><a href ="{{ route('admin/items') }}" class="btn btn-primary">Back</a></p>

                    <form action="{{ route('admin/items/save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Cover Image</label>
                                <input type="text" name="cover_image" class="form-control" placeholder="Cover Image URL">
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Content</label>
                                <textarea name="content" class="form-control" placeholder="Content"></textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Publishing Date</label>
                                <input type="date" name="publishing_date" class="form-control">
                                @error('publishing_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
