<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50  min-h-screen py-12 antialiased">
    <div class="md:max-w-xl w-full mx-auto px-5">

        <div class="bg-white  rounded-3xl shadow-lg overflow-hidden border-[1px] border-gray-200 ">
            <div class="bg-blue-500  px-6 py-4 text-center">
                <h4 class="text-white text-3xl font-extrabold">Cloud Computing 2025 </h4>

                <h4 class="text-white text-lg mt-1 font-bold">Form Registration</h4>
            </div>

            <div class="p-6">
                {{-- Session Success Message --}}
                @if (session('success'))
                    <div class="mb-6 p-4 bg-green-50  border border-green-200  rounded-md">
                        <p class="text-green-700  text-sm font-medium">{{ session('success') }}</p>
                    </div>
                @endif

                {{-- Validation Errors --}}
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50  border border-red-200  rounded-md">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li class="text-red-700  text-sm font-medium">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('emails.send') }}">
                    @csrf

                    <div class="space-y-6">
                        {{-- Receiver Email Field --}}
                        <x-input name="student_email" type="email" label="Student Email" required />

                        {{-- Name Field (Bug Fixed) --}}
                        <x-input name="full_name" type="text" label="Full Name" required />

                        {{-- Subject Field --}}
                        <x-input name="password" type="password" label="Password (minimal 6 lenght character)"
                            required />
                        <x-input name="password_confirm" type="password" label="Confirmation Password" required />
                        {{-- Message Field --}}
                        <x-input name="birth_date" type="date" label="Birth Date" required />

                    </div>


                    <div class="flex justify-end mt-8 pt-6 border-t border-gray-200">
                        <button type="submit"
                            class="px-6 py-2 bg-blue-500  text-white 0 font-semibold rounded-md hover:bg-blue-600 e transition-all duration-150 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white  focus:ring-gray-500">
                            Send Email
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>
