<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class AdminCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }

    public function deleteWithReplies()
    {
    if(count($this->replies) > 0) {
    // Delete children recursive
    foreach ($this->replies as $reply) {
    $reply->deleteWithReplies();
    }
    }
    $this->delete();
    }
}
