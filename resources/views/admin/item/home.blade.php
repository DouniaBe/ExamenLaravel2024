<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex align-items-center justify-content-between">
                        <h1 class="mb-0">List of Items</h1>
                        <a href="{{ route('admin/items/create') }}" class="btn btn-primary">Create Item</a>
                    </div>
                    <hr/>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Cover Image</th>
                                <th>Content</th>
                                <th>Publishing Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->title }}</td>
                                    <td class="align-middle"><img src="{{ $item->cover_image }}" alt="Cover Image" width="100"></td>
                                    <td class="align-middle">{{ Str::limit($item->content, 50) }}</td>
                                    <td class="align-middle">{{ $item->publishing_date ? \Carbon\Carbon::parse($item->publishing_date)->format('d-m-Y') : 'N/A' }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin/items/edit', ['id' => $item->id]) }}" type="button" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('admin/items/delete', ['id' => $item->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">No Item found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
