@extends("layout")

@section("title", "Edit Post $post->id")

@section("content")
<h2 class="w-fit mx-auto text-[35px] font-bold text-green-500 capitalize mt-[50px]">Edit The Post {{ $post->id }}</h2>
<div class="flex justify-center items-center my-[50px]">
    <form class="w-full flex flex-col gap-[20px] bg-[#222] p-[30px] rounded-3xl md:w-[50%]" action="{{ route("posts.update", $post->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="title">Title</label>
            <input class="bg-[#eee] p-[15px]" type="text" name="title" id="title" value="{{ $post->title }}" placeholder="Enter The Post Title">
            @error("title")
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-[15px]">
            <label class="text-blue-500 text-[20px] font-bold" for="desc">Descraption</label>
            <textarea class="bg-[#eee] p-[15px] min-h-[250px]" name="desc" id="desc" placeholder="Enter The Post Descraption">{{ $post->desc }}</textarea>
            @error("desc")
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <input class="bg-green-500 py-[15px] text-white cursor-pointer duration-300 hover:bg-green-600" type="submit" value="Edit">
    </form>
</div>
@endsection