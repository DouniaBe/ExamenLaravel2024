<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Faq') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="mb-0">List of Faqs</h1>
                    <a href="{{ route('admin/faqs/create') }}" class="btn btn-primary">Create Faq</a>
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
                                    <th>Question</th>
                                    <th>Category</th>
                                    <th>Answer</th>
                                    <th>Action</th>
                                </tr>
                          </thead>
                            <tbody>
                              @forelse ($faqs as $faq)
                                    <tr>
                                        <td class="align-middle">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $faq->question }}</td>
                                        <td class="align-middle">{{ $faq->category }}</td>
                                        <td class="align-middle">{{ $faq->answer }}</td>
                                        <td class="align-middle">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href= "{{ route('admin/faqs/edit',['id'=>$faq->id] ) }}" type="button" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('admin/faqs/delete',['id'=>$faq->id] ) }}" type="button" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td class="text-center" colspan="5" >No Faq found</td>
                                    </tr>
                                    @endforelse
                            </tbody>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>