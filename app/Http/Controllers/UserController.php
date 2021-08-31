<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
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

    
    public function show(User $user)
    {
        $item = User::find($user);
        if($item) {
            return response()->json([
                'data' => $item
            ],200);
        } else {
            return response()->json()([
                'message' => 'Not find'
            ],404);
        }
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
