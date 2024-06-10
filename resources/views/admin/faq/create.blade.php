<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('create Faq') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
               <h1 class="mb-0">Create Faq</h1>
               <hr />
               @if(session()->has('error'))
                    <div>
                        {{ session('error') }}
                    </div>
                    @endif
               <p><a href ="{{ route('admin/faqs') }}" class="btn btn-primary">Back</a></p>

                <form action="{{ route('admin/faqs/save') }}" method="POST" enctype=" multipart/form-data">
                 @csrf
                 <div class="mb-3">
                    <div class="col">
                        <input type="text" name ="question" class="form-control" placeholder="question">
                        @error ('question')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                    <hr />

                 

                    <div class="mb-3">
                       <div class="col">
                           <input type="text" name ="category" class="form-control" placeholder="category">
                           @error ('category')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <hr />
                        <div class="mb-3">
                       <div class="col">
                           <input type="text" name ="answer" class="form-control" placeholder="answer">
                           @error ('answer')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                        </div>
                        <hr />
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>


            </div>
        </div>
    </div>
    </div>
</x-app-layout>