@extends("layout")

@section("content")
<div class="mt-[100px] flex flex-col items-center gap-[30px]">
    <a class="bg-green-500 px-[35px] py-[10px] text-white duration-300 hover:bg-green-600" href="{{ route("posts.create") }}">Create</a>
    <div class="overflow-x-auto w-full">
        <table class="w-full h-fit bg-[#222]">
            <thead>
                <th class="bg-red-500 p-[10px] text-white border-[1px] border-red-500">Id</th>
                <th class="bg-blue-500 p-[10px] text-white border-[1px] border-blue-500">Title</th>
                <th class="bg-green-500 p-[10px] text-white border-[1px] border-green-500">Descraption</th>
                <th class="bg-blue-500 p-[10px] text-white border-[1px] border-blue-500">Created By</th>
                <th class="bg-red-500 p-[10px] text-white border-[1px] border-red-500">Actions</th>
            </thead>
            <tbody>
                @if (count($blogs) == 0)
                    <tr>
                        <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]" colspan="5">Not Found</td>
                    </tr>
                    @else
                    @foreach ($blogs as $blog)
                        <tr>
                                <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]">{{ $blog->id }}</td>
                                <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]">{{ $blog->title }}</td>
                                <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]"><div class="max-h-[250px] overflow-y-auto">{{ $blog->desc }}</div></td>
                                <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]">{{ $blog->user->name }}</td>
                                <td class="p-[10px] text-center text-white text-[18px] border-[1px] border-[#eee]">
                                    <div class="flex items-center justify-center">
                                        @auth
                                        @if ($blog->user->id == auth()->id())
                                        <form id="delete-post" action="{{ route("posts.destroy", $blog->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <input class="bg-red-500 cursor-pointer px-[20px] py-[10px] duration-300 hover:bg-red-600" type="submit" value="Delete">
                                        </form>
                                        <a class="bg-blue-500 px-[20px] py-[10px] duration-300 hover:bg-blue-600" href="{{ route("posts.edit", $blog->id) }}">Edit</a>
                                        @endif
                                        @endauth
                                        <a class="bg-green-500 px-[20px] py-[10px] duration-300 hover:bg-green-600" href="{{ route("posts.show", $blog->id) }}">Show</a>
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
    @if(session('success'))
        <script>
        window.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'success!',
                text: @json(session('success')),
                showConfirmButton: false,
                timer: 3000
            })
        });
    </script>
    @endif
<script>
    const form = document.getElementById("delete-post");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        
        Swal.fire({
            title: "Are you sure?",
            showDenyButton: true,
            confirmButtonText: "Delete",
            denyButtonText: `Don't Delete`
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    })
</script>
@endsection