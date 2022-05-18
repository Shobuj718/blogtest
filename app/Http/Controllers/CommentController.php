<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        Comment::create($input);
        return back();
    }
}
