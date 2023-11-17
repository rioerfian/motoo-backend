<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        //get posts
        $user = User::all();

        //return collection of posts as a resource
        return new UserResource(true, 'List Data User', $user);
    }

    
    public function show(User $user)
    {
        //return single post as a resource
        return new UserResource(true, 'Data User Ditemukan!', $user);
    }

    public function update(Request $request, User $user)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|unique:users',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        
        $user->fill($request->post())->update();
        
        //return response
        return new UserResource(true, 'Data User Berhasil Diubah!', $user);
    }

    public function destroy(User $user)
    {
        
        //delete post
        $user->delete();

        //return response
        return new UserResource(true, 'Data User Berhasil Dihapus!', null);
    }
}
