<?php

namespace App\Http\Controllers\Api;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ApplicationResource;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get posts
        $applications = Application::all();

        //return collection of posts as a resource
        return new ApplicationResource(true, 'List Data application', $applications);
    }

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'name'     => 'required',
        //     'url'   => 'required',
        // ]);  

        $validator = Validator::make($request->all(), [
            'name'     => 'unique:applications',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // //create post
        // $image = $request->file('image');
        // Storage::disk('public')->put('path/to/store', $image);
        // $image->storeAs('/public/posts', $image->hashName());


        $application = new Application();
        $application->fill($request->post());
        // $application->image = $image->hashName();
        $application->save();

        //return response
        return new ApplicationResource(true, 'Data Berhasil Ditambahkan!', $application);
    }

    public function show(Application $application)
    
    {
        return new ApplicationResource(true, 'Data Post Ditemukan!', $application);
    }

    public function update(Request $request, Application $application)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'name'     => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // //check if image is not empty
        if ($request->hasFile('image')) {

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/posts/', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$application->image);

            $application->fill($request->post());
            $application->image = $image->hashName();
            $application->update();
        } 
        
        else {
            $application->fill($request->post())->update();
        }



        //return response
        return new ApplicationResource(true, 'Data Post Berhasil Diubah!', $application);
    }

    public function destroy(Application $application)
    {
        //delete image
        Storage::delete('public/posts/' . $application->image);

        //delete post
        $application->delete();

        //return response
        return new ApplicationResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
