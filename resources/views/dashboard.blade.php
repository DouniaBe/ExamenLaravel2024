<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-semibold text-gray-900">Welkom bij StudyAnswers Dashboard</h3>
                    </div>
                    <p class="text-lg text-gray-700">Je bent succesvol ingelogd op StudyAnswers.</p>
                    <div class="mt-8">
                        <h4 class="text-xl font-semibold text-gray-900 mb-3">Cursussen:</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                                <h5 class="text-lg font-semibold text-gray-900 mb-2">.NET</h5>
                                <p class="text-gray-700">Coming Soon</p>
                            </div>
                            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                                <h5 class="text-lg font-semibold text-gray-900 mb-2">Laravel</h5>
                                <p class="text-gray-700">Coming Soon</p>
                            </div>
                            <!-- Voeg hier andere statische cursussen toe met de status "Coming Soon" -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
