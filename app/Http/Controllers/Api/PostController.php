<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = Post::all();
        
        if($posts){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $posts
                ]]);
        }
        else return response('', 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        
        if($post){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $post
                ]]);
        }
        else return response('', 404);
    }

}
