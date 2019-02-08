<?php

namespace App\Http\Controllers;

use App\Models\OfferImage;
use Illuminate\Http\Request;
use File;

class OfferImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OfferImage  $offerImage
     * @return \Illuminate\Http\Response
     */
    public function show(OfferImage $offerImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfferImage  $offerImage
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferImage $offerImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfferImage  $offerImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferImage $offerImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfferImage  $offerImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferImage $offerImage)
    {
        //
    }

    public function deleteImgAjax(Request $request)
    {
        $path = $request->src;

        $img = OfferImage::where('path', $path)->first();
        
        File::delete(public_path() . $img->path);

        $img->delete();

        return response()->json(['status' => 'done']);
        
    }
}
