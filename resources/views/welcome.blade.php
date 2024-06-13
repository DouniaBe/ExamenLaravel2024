<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij StudyAnswers</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero-bg {
            background: linear-gradient(to right, rgba(29, 78, 216, 0.9), rgba(126, 34, 206, 0.9)), url('https://source.unsplash.com/1600x900/?technology,discussion');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-300">
    <div class="min-h-screen flex flex-col">
        <!-- Header Sectie -->
        <header class="hero-bg shadow-lg text-white dark:bg-gray-900">
            <div class="container mx-auto py-6 px-4 flex justify-between items-center">
                <h1 class="text-4xl font-bold">StudyAnswers</h1>
                @if (Route::has('login'))
                    <nav class="flex space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md px-4 py-2 bg-white text-blue-700 font-semibold hover:bg-gray-200 transition dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-4 py-2 bg-white text-blue-700 font-semibold hover:bg-gray-200 transition dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md px-4 py-2 bg-white text-blue-700 font-semibold hover:bg-gray-200 transition dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600">
                                    Registreren
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Welkom bij StudyAnswers</h2>
                <p class="text-lg mb-6">Stel vragen en vind antwoorden over verschillende onderwerpen. Onze community staat klaar om te helpen!</p>
            </div>
        </header>

        <!-- Hoofdinhoud -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <!-- Kenmerken Sectie -->
            <section class="mb-12 text-center">
                <h3 class="text-2xl font-semibold mb-4">Waarom StudyAnswers gebruiken?</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-blue-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-blue-700">Deskundige Antwoorden</h4>
                        <p class="text-gray-600 dark:text-gray-400">Ontvang antwoorden van experts binnen onze community.</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-purple-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-purple-700">Breed Scala aan Onderwerpen</h4>
                        <p class="text-gray-600 dark:text-gray-400">Van technologie tot gezondheid, stel vragen over elk onderwerp.</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-green-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-green-700">Gebruiksvriendelijk</h4>
                        <p class="text-gray-600 dark:text-gray-400">Onze eenvoudig te gebruiken interface maakt het stellen en beantwoorden van vragen eenvoudig.</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-yellow-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-yellow-700">Actieve Community</h4>
                        <p class="text-gray-600 dark:text-gray-400">Sluit je aan bij een actieve gemeenschap die graag kennis deelt.</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-red-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-red-700">Betrouwbare Informatie</h4>
                        <p class="text-gray-600 dark:text-gray-400">Krijg betrouwbare informatie en advies van ervaren professionals.</p>
                    </div>
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-indigo-50 dark:hover:bg-gray-700 transition">
                        <h4 class="text-lg font-semibold mb-2 text-indigo-700">Gratis te Gebruiken</h4>
                        <p class="text-gray-600 dark:text-gray-400">Geniet van onze diensten zonder kosten of verborgen betalingen.</p>
                    </div>
                </div>
                <a href="{{ route('login') }}" class="rounded-md px-4 py-2 bg-blue-500 text-white font-semibold hover:bg-blue-600 transition mt-8 inline-block">
                    Start nu
                </a>
            </section>
        </main>

        <!-- Footer Sectie -->
        <footer class="bg-gray-200 dark:bg-gray-800 py-6">
            <div class="container mx-auto text-center text-gray-600 dark:text-gray-400 flex justify-center space-x-4">
                <a href="faqs" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">FAQ</a>
                <a href="items" class="bg-purple-500 hover:bg-purple-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">Latest news</a>
                <a href="contact" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">contact us </a>
            </div>
            <div class="mt-4 text-center">
                © 2024 StudyAnswers. Alle rechten voorbehouden.
            </div>
        </footer>
    </div>
</body>
</html>
