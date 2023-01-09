
<x-app-layout>
<h2>Edit Post</h2>
    <h3>{{$post->title}}</h3>
    <div class="container mx-auto">
        <div class="bg-white px-4 mb-6">
            <form method="post" action="{{route('update-post',$post->id)}}">
                @csrf
                <p> <input type="text" name="title" value="{{$post->title}}" >
                </p>
                <p><textarea cols="30" rows="10" name="content" >{{$post->content}}</textarea></p>
                <button type="submit">Update</button>

            </form>
        </div>
    </div>


</x-app-layout>
