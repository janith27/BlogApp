<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function CreateComment(Request $request,$postId){
        $validatedData = $request->validate([
            'comment' => 'required|max:255',
            
        ]);

        $comment = new Comment();
        $comment->body = $validatedData['comment'];
        $comment->user_name = auth()->user()->name;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $postId ;

        $comment->save();

        return redirect(route('detailPage',$postId))->with('success', 'Comment has been created!');
    }
}
