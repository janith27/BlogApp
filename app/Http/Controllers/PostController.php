<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
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

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('public/images', $filename);
        //     $post->image = $filename;
        // }

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('images/'.$post->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('images'),$filename);
            $post['image'] = $filename;
        }

        $post->save();

        return redirect('/myblogs')->with('success', 'Post has been created!');
    }


    // update

    public function UpdatePage($keyid){
        
        $indexPost = Post::find($keyid);
        return view('postUpdate',compact('indexPost'));
    }


}
