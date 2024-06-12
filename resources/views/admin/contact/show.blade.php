<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Contact Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Contact Message</h1>
                    <hr />
                    <p><strong>Name:</strong> {{ $contact->name }}</p>
                    <p><strong>Email:</strong> {{ $contact->email }}</p>
                    <p><strong>Message:</strong> {{ $contact->message }}</p>
                    <hr />
                    <form action="{{ route('admin.contacts.respond', $contact->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Response</label>
                            <textarea name="response" class="form-control" placeholder="Write your response here...">{{ $contact->response }}</textarea>
                            @error('response')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Send Response</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
