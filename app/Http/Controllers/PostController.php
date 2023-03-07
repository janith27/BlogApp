<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    // public function CreatePost(Request $request){
    //     $validatedData = $request->validate([
    //         'title' => 'required|unique:posts|max:255',
    //         'description' => 'required',
    //         'image' => 'mimes:png,jpg,jpeg',
    //     ],
    //     [
    //         'title.required' => 'Please Input Title',
    //         'title.max' => 'Title Less Than 255 Characters',
    //         'description.required' => 'Please Input Description',
    //         // 'image.mimes' => 'Please Input png, jpg or jpeg format',
    //     ]);
    // }

    public function CreatePost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $post = new Post;
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/images', $filename);
            $post->image = $filename;
        }

        $post->save();

        return redirect('/myblogs')->with('success', 'Post has been created!');
    }
}
