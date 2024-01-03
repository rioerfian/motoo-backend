<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewResource;
use App\Models\Application;
use App\Models\Review;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $review = Review::all();

        //return collection of posts as a resource
        return new ReviewResource(true, 'List Data review', $review);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $review = new Review();
        $review->fill($request->post());
        $review->save();
        //return response
        return new ReviewResource(true, 'Data Berhasil Ditambahkan!', $review);
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {

        return new ReviewResource(true, 'Data Post Ditemukan!', $review);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->fill($request->post())->update();
        return new ReviewResource(true, 'Data Berhasil Diubah!', $review);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //delete review
        $review->delete();

        //return response
        return new ReviewResource(true, 'Data Berhasil Dihapus!', null);
    }
}
