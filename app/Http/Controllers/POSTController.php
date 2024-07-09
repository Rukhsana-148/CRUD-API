<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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
       return $this->successfulResponse($post);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
       
        $post=POST::create($request->validated());
        return response()->json([
            'message'=>'Data is stored successfully!',
            '$posts'=>$post,

        ],200);
    }
public function showAll(){
     $posts = POST::get();

     return response()->json([
        'message'=>'all post is showed!',
        '$posts'=>$posts,

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
            'message'=>'Post is showed!',
            '$posts'=>$post,

        ],200); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, POST $post)
    {
        //
    
       
        $post->update($request->validated());

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
            'message'=>'Post is deleted!',
            '$posts'=>$post->delete(),

        ],200);

    }
}
