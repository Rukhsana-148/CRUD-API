<?php

namespace App\Http\Controllers;

use App\Models\POST;
use Illuminate\Http\Request;

class POSTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post= POST::get();
        return response()->json([
            'message'=>'Lists of POST',
            '$posts'=>$post,

        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = new POST;
        $post->title = $request->title;
        $post->content=$request->content;
        $post->save();
        return response()->json([
            'message'=>'Data is stored successfully!',
            '$posts'=>$post,

        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $post = POST::find($id);

        return response()->json([
            'message'=>'Data is show successfully!',
            '$posts'=>$post,

        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, POST $post)
    {
        //
    
        $post->title = $request->title??$post->title;
        $post->content=$request->content??$post->content;
        $post->save();
        return response()->json([
            'message'=>'Post updated!',
            '$posts'=>$post,

        ],200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(POST $post)
    {
        //

 return response()->json([
            'message'=>'Post Deleted!',
            '$posts'=>$post->delete(),

        ],200);
    }
}
