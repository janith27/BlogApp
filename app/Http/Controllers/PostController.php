<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    // start create poste method
    public function CreatePost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'brief_discription' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $post = new Post;
        $post->title = $validatedData['title'];
        $post->brief_discription = $validatedData['brief_discription'];
        $post->body = $validatedData['body'];
        $post->user_id = auth()->user()->id;


        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/'.$post->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'),$filename);
            $post['image'] = $filename;
        }

        $post->save();

        return redirect(route('myblogs',auth()->user()->id))->with('success', 'Post has been created!');
    }
    // end Method


    // start update page view method

    public function UpdatePage($keyid){
        
        $indexPost = Post::find($keyid);
        return view('postUpdate',compact('indexPost'));
    }
    // end method

    // start update post method
    public function UpdateData(Request $request,$id){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'brief_discription' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $post = Post::find($id);
        $post->title = $validatedData['title'];
        $post->brief_discription = $validatedData['brief_discription'];
        $post->body = $validatedData['body'];
        $post->user_id = auth()->user()->id;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/'.$post->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'),$filename);
            $post['image'] = $filename;
        }

        $post->save();
        
        return redirect(route('myblogs',auth()->user()->id))->with('success', 'Post has been Updated!');
    }
    // end method

    // start delete post method
    public function DeletePost($id){
        $image =Post::find($id);
        $old_image=$image->image;
        unlink(public_path('images/'.$old_image));
        Post::find($id)->delete();
        return redirect(route('myblogs',auth()->user()->id))->with('success', 'Post has been Deleted!');
    }
    // end method
}
