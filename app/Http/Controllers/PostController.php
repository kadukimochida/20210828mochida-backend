<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $items = Post::all();
        $comment = Post::with('comments')->get();
        return response()->json([
            'data' => $items,
            'comments' => $comment
        ],200);
    }

    
    public function store(Request $request)
    {
        $item = Post::create($request->all());
        return response()->json([
            'data' => $item
        ],201);
    }

    
    public function show(Post $post)
    {
        $item = Post::find($post)->load('comments');
        if($item) {
            return response()->json([
                'data' => $item,
            ],200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ],404);
        }
    }

    
    public function update(Request $request, Post $post)
    {
        $update = [
            'good' => $request->good,
        ];
        $item = Post::where('id',$post->id)->update($update);
        if ($item) {
            return response()->json([
                'message'=>'Update successfully',
            ],200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ],404);
        }
    }

    
    public function destroy(Post $post)
    {
        $item = Post::where('id', $post->id)->delete();
        if($item){
            return response()->json([
                'message' => 'Deleted'
            ],200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ],404);
        }
    }

    
}
