@extends("auth.layout")

@section("title", "Register")

@section("content")
    <div class="container h-screen flex justify-center items-center">
        <form class="bg-[#eee] shadow-lg p-[30px] flex flex-col gap-[35px] w-full rounded-3xl md:w-[600px]" action="{{ route("register") }}" method="POST">
            @csrf
            <div class="flex flex-col gap-[15px]">
                <label class="text-[20px] font-bold text-blue-500" for="username">Username</label>
                <input class="bg-gray-300 border-none outline-none p-[15px] rounded-3xl" type="text" name="username" id="username" value="{{ old("username") }}" placeholder="Enter The Username">
                @error("username")
                 <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-[15px]">
                <label class="text-[20px] font-bold text-blue-500" for="email">Email</label>
                <input class="bg-gray-300 border-none outline-none p-[15px] rounded-3xl" type="email" name="email" id="email" value="{{ old("email") }}"placeholder="Enter The Email">
                @error("email")
                 <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-[15px]">
                <label class="text-[20px] font-bold text-blue-500" for="password">Password</label>
                <input class="bg-gray-300 border-none outline-none p-[15px] rounded-3xl" type="password" name="password" id="password" value="{{ old("password") }}" placeholder="Enter The Password">
                @error("password")
                 <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            @error("exists")
                 <p class="text-red-600">{{ $message }}</p>
            @enderror
            <a class="text-blue-700 underline" href="{{ route("login") }}">Login</a>
            <input class="bg-blue-500 text-white text-[20px] p-[15px] rounded-3xl cursor-pointer duration-300 hover:bg-blue-600" type="submit" value="Register">
            <input class="bg-gray-500 text-white text-[20px] p-[15px] rounded-3xl cursor-pointer duration-300 hover:bg-green-600" type="reset" value="Reset">
        </form>
    </div>
@endsection