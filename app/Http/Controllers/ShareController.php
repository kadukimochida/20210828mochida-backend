<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;


class ShareController extends Controller
{
    
    public function index(Request $request,User $user)
    {
        $items = User::where('email',$request->email)->get();
        return response()->json([
            'data' => $items
        ],200);

        $posts = Post::all();
        return response()->json()([
            'data' => $posts
        ],200);
    }

    
    public function store(Request $request)
    {
        $item = User::create($request->all());
        {
            return response()->json([
                'data' => $item
            ],201);
        }

        $post = Post::store($request->all());
        {
            return response()->json([
                'data' => $post
            ],201);
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
