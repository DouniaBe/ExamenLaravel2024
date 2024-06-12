<section class="mt-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Contact Messages') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('View and respond to contact messages.') }}
        </p>
    </header>

    <!-- Tonen van ontvangen contactberichten -->
    <div class="mt-4">
        @foreach ($contacts as $index => $contact)
            <div class="bg-white rounded-lg p-4 shadow @if (!$loop->last) mb-4 @endif"> <!-- Hier voegen we een bottom margin toe aan elke div, behalve de laatste -->
                <div class="flex justify-between">
                    <div>
                        <p class="font-semibold">{{ $contact->name }}</p>
                        <p class="text-gray-600">{{ $contact->email }}</p>
                    </div>
                    <div>
                        <span class="text-gray-600">{{ $contact->created_at->diffForHumans() }}</span>
                    </div>
                </div>
                <p class="mt-2">{{ $contact->message }}</p>
                @if ($contact->response)
                    <div class="mt-4 border-t pt-4">
                        <p class="font-semibold">Response:</p>
                        <p>{{ $contact->response }}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Mogelijkheid om te reageren op contactberichten -->
    <!-- ... -->
</section>
