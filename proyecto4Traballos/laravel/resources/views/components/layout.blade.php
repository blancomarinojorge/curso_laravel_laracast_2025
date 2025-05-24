<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex flex-row justify-between py-5 align-middle">
        <div>
            <a href="">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
            </a>
        </div>
        <div>
            <ul class="flex space-x-5 font-bold">
                <li><a href="" >Jobs</a></li>
                <li><a href="" >Outro</a></li>
                <li><a href="" >Eii</a></li>
                <li><a href="" >Jobs</a></li>
            </ul>
        </div>
        <div>
            @auth
                <form method="POST" action="{{ route('login.destroy') }}">
                    @csrf
                    @method('DELETE')
                    <button class="hover:opacity-70 hover:cursor-pointer" type="submit">Logout</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </nav>
    <main class="mt-10 max-w-[936px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
