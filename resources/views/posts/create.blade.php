@extends("layout")

@section("title", "Create New Post")

@section("content")
<h2 class="w-fit mx-auto text-[35px] font-bold text-green-500 capitalize mt-[50px]">Create A New Post</h2>
<div class="flex justify-center items-center my-[50px]">
    <form class="w-full flex flex-col gap-[20px] bg-[#222] p-[30px] rounded-3xl md:w-[50%]" action="{{ route("posts.store") }}" method="POST">
        @csrf
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="username">Select User</label>
            <select class="bg-[#eee] p-[15px]" name="username" id="username">
                @foreach ($users as $user)
                    <option @selected(old("username")) value="{{ $user->name }}">{{ $user->name }}</option>
                @endforeach
            </select>
            @error("username")
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="password">User Password</label>
            <input class="bg-[#eee] p-[15px]" type="password" name="password" id="password" value="{{ old("password") }}" placeholder="Enter The User Password">
            @error("password")
                 <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="title">Post Title</label>
            <input class="bg-[#eee] p-[15px]" type="text" name="title" id="title" value="{{ old("title") }}" placeholder="Enter The Post Title">
            @error("title")
                 <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="desc">Post Descraption</label>
            <textarea class="bg-[#eee] p-[15px] min-h-[250px]" name="desc" id="desc" placeholder="Enter The Post Descraption">{{ old("desc") }}</textarea>
            @error("desc")
                 <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <input class="bg-green-500 py-[15px] text-white cursor-pointer duration-300 hover:bg-green-600" type="submit" value="Create">
    </form>
</div>
@endsection