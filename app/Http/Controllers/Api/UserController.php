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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
         //create user
         $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role'      => $request->role,
            'job'      => $request->job,
            'team'      => $request->team,
            'phone'      => $request->phone,
            'password'  => bcrypt($request->password)
        ]);

        //return response
        return new UserResource(true, 'Data Aplikasi Berhasil Ditambahkan!', $user);
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
            'email'    => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        $user->fill($request->post());
        $user->password = bcrypt($request->password);
        $user->update();

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