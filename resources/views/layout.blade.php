<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/app.css")
    @vite("resources/js/app.js")
    <title>@yield("title", "Blog")</title>
</head>
<body class="bg-[#eee]">
    <header class="bg-[#eee] h-[70px] shadow-lg">
        <div class="container h-full flex justify-between items-center">
            <h1 class="logo text-blue-500 font-bold text-[25px]">Blog</h1>
            <div class="flex items-center gap-[10px]">
                <a class="text-blue-500 text-[20px] font-bold" href="{{ route("posts.index") }}">All Posts</a>
                @if (session()->has("user_id"))
                    @php
                        $user = \App\Models\User::find(session("user_id"));
                    @endphp
                    <p class="text-[18px] text-green-500 font-bold">Hello <span>{{ $user->name }}</span></p>
                    <form action="{{ route("logout") }}" method="POST">
                        @csrf
                        <input class="bg-red-500 text-white py-[7px] px-[20px] cursor-pointer duration-300 hover:bg-red-600" type="submit" value="Logout">
                    </form>
                    @else
                    <a class="bg-blue-500 text-white p-[10px] text-[18px] font-bold duration-300 hover:bg-blue-600" href="{{ route("login") }}">Login</a>
                    <a class="bg-green-500 text-white p-[10px] text-[18px] font-bold duration-300 hover:bg-green-600" href="{{ route("register") }}">Register</a>
                    <p class="text-[18px] text-gray-500 font-bold">Hello Gust</p>
                @endif
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            @yield("content")
        </div>
    </main>
</body>
</html>