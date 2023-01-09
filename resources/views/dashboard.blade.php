<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 <div class="flex">
                    <div class="flex-1">
                        <h2>Add new post</h2>
                   <form action="{{route('add-post')}}" method="post">
                       @csrf
                       <p><input type="text" name="title" value="{{old('title')}}" placeholder="add title"> </p>
                       <p>
                           <textarea name="content" cols="30" rows="10" value=" ">{{old('content')}}</textarea>
                       </p>
                       <button type="submit">Add Post</button>



                   </form>
                    </div>
                     <div class="flex-1">
                         <h2>Post</h2>
                         <ul>
                             @foreach($posts as $post)
                             <li class="flex items-center" ><a href="">{{$post->title}}</a>
                             <span><a href="{{route('edit-post',$post->id)}}" class="text-red ml-3 text-xs bg-green-500 rounded px-4">Edit</a></span>
                                  <form method="post" action="{{route('delete-post',$post->id)}}">
                                     @csrf
                                     <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0l-3-3m3 3l3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                         </svg></button>



                                 </form>
                             </li>
                             @endforeach


                         </ul>
                     </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
