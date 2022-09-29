<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        if($categories){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $categories
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
        $category = Category::with('posts.user')->find($id);
        
        if($category){
            return response()->json([
                'response' => true,
                'results' => [
                    'data' => $category
                ]]);
        }
        else return response('', 404);
    }

}
