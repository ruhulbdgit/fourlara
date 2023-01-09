<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function add(Request $request , FlasherInterface $flasher){
        $request->validate([
            'title' =>'required',
            'content' =>'required',
        ]);
        $flasher->addSuccess(' u set Title& Content successfully');
        $post= new Post();
        $post->title = $request->title;

        $post ->content = $request->content;
        $post->save();

        return redirect()->route('dashboard');
    }
        public function edit($id)
        {
            $post = Post::find($id);

            return view('edit-post', [
                'post' => $post,
            ]);
        }
        public function update($id,Request $request , FlasherInterface $flasher){
            $post= Post::findOrFail($id);
                $request->validate([
                    'title' =>'required',
                    'content' =>'required',
                ]);
            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();
            $flasher->addSuccess(' Post Updated successfully');

            return redirect()->route('dashboard');
            }
            public function delete($id){
                $post= Post::find($id);
                $post->delete();
                return redirect()->route('dashboard');
            }



}
