<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;


class ShereController extends Controller
{
    
    public function index()
    {
        $items = User::all();
        return response()->json([
            'data' => $items
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
