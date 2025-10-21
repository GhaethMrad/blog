@extends("layout")

@section("title", "Post $post->id")

@section("content")
    <h3 class="mt-[50px] text-green-500 text-[25px] w-fit mx-auto md:text-5xl lg:text-[70px]">Post {{ $post->id }} Details</h3>
<div class="flex justify-center items-center my-[50px]">
    <div class="card flex flex-col gap-[30px] bg-[#eee] p-[25px] max-w-[400px]">
        <h4 class="text-blue-500 text-[18px] font-bold w-fit mx-auto lg:text-[30px]">Created By: {{ $post->username }}</h4>
        <div>
            <strong class="text-green-500">Title</strong>
            <p class="bg-[#222] p-[15px] text-white">{{ $post->title }}</p>
        </div>
        <div>
            <strong class="text-red-500">Descreption</strong>
            <p class="bg-[#222] p-[15px] text-white max-h-[250px] overflow-y-auto">{{ $post->desc }}</p>
        </div>
        <div>
            <strong class="text-blue-500">Created At</strong>
            <p class="bg-[#222] p-[15px] text-white">{{ $post->created_at }}</p>
        </div>
        <div>
            <strong class="text-gray-500">Updated At</strong>
            <p class="bg-[#222] p-[15px] text-white">{{ $post->updated_at }}</p>
        </div>
    </div>
</div>
@endsection