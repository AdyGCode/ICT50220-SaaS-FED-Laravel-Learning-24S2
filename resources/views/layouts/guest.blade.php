<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
            <div class=" min-h-screen bg-gray-100">
                @include('layouts.navigation')

                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <x-flash-message :messages="session('success')"
                                 class="bg-green-100 text-green-800 border-green-500"/>

                <x-flash-message :messages="session('danger')"
                                 class="bg-red-100 text-red-800 border-red-500"/>

                <x-flash-message :messages="session('info')"
                                 class="bg-sky-100 text-sky-800 border-sky-500"/>

                <x-flash-message :messages="session('warning')"
                                 class="bg-amber-100 text-amber-800 border-amber-500"/>


                <!-- Page Content -->
                <main class="container mx-auto my-8 bg-white sm:rounded-lg shadow overflow-hidden p-8">
                    {{ $slot }}
                </main>
            </div>
    </body>
</html>
