<?php

namespace App\Http\Controllers;
use App\Http\Resources\getPosts as getPostsResource;
use Illuminate\Http\Request;
use App\Post;

class Posts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  getPostsResource::collection(Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->username=$request->username;
        $post->post=$request->post;
        $post->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updatePost=Post::find($id);

        if(!$updatePost) {
            return response()->json(['errors' => [ 
                'status'=> '404', 
                'source'=>[
                    'pointer'=>'put/patch'],
                 'detail'=>'Record not found'
                ]], 404);
        } else{
            
        $input = $request->all();
        $updatePost->username=$input['username'];
        $updatePost->post=$input['post'];
        $updatePost->save();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyPost=Post::find($id); 
        $destroyPost->delete();

    }
}
