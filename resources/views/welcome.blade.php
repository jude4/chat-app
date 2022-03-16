<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chat App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />


</head>
<body class="antialiased">
    <div class="relative bg-msg flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="bg-white dark:bg-gray-200 shadow-2xl p-12 h-68">
            <div class="">
                <p class="text-6xl font-bold">Welcome to Chat App</p>
                @if (Route::has('login'))

                @auth
                <p class="mt-10 text-center text-3xl font-semibold">You're currently logged in!</p>
                <p class="text-center text-xl mt-2">Go to your <a href="/chat" class="text-red-500 underline">Chat room</a></p>
                @else
                <p class="text-center mt-10">
                    <a href="{{ route('login') }}" class="text-2xl mr-4 border border-danger rounded p-2 text-danger">Login</a>
                    <a href="{{ route('register') }}" class="text-2xl border border-purple-900 rounded p-2 text-purple-600">Register</a>
                </p>
                @endauth
                @endif
            </div>
        </div>

    </div>
</body>
</html>
