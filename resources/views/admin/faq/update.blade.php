<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Faq') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <h1 class="mb-0">Edit Faq</h1>
                     <hr />
                <form action="{{ route('admin/faqs/update' , $faqs->id) }} " method="POST">
                 @csrf
                 @method('PUT')
                 <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Question</label>
                        <input type="text" name ="question" class="form-control" placeholder="question" value="{{$faqs->question }}">
                        @error('question')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                    <hr />

                    <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">category</label>
                        <input type="text" name ="category" class="form-control" placeholder="category"value="{{ $faqs->category }}">
                    </div>
                    </div>
                    <hr />

                    <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">answer</label>
                        <input type="text" name ="answer" class="form-control" placeholder="answer"value="{{ $faqs->answer }}">
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
