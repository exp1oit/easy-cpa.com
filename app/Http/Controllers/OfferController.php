<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Offer;
use App\Models\Reward;
use App\Models\OfferImage;
use Illuminate\Http\Request;
use File;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::all();
        
        return view('UserPanelPage.offers')->with('offers', $offers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserPanelPage.offerCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer = Offer::create($request->all());
        
        Reward::create([
            'offer_id' => $offer->id,
            'amount' => $request->amount
        ]);

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $file) {
                $name_file = uniqid() . '.' . File::extension($file->getClientOriginalName());
                $path = '/img/offers/';

                $file->move(public_path() . $path, $name_file);  

                $path .= "$name_file";

                OfferImage::create([
                    'path' => $path,
                    'offer_id' => $offer->id
                ]);
            }
        }
        

        return redirect()->route('offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('UserPanelPage.offer')->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('UserPanelPage.offerUpdateForm')->with('offer', $offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $file) {
                $name_file = uniqid() . '.' . File::extension($file->getClientOriginalName());
                $path = '/img/offers/';

                $file->move(public_path() . $path, $name_file);  

                $path .= "$name_file";

                OfferImage::create([
                    'path' => $path,
                    'offer_id' => $offer->id
                ]);
            }
        }

        return redirect()->route('offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $images = $offer->images()->get();
        
        foreach ($images as $img) {
            File::delete(public_path() . $img->path);
        }

        foreach ($offer->leads()->get() as $lead) {
            foreach($lead->images()->get() as $img) {
                File::delete(public_path() . $img->path);
            }
        }

        $offer->delete();

        return redirect()->route('offers');
    }

    // public function offerUser()
    // {
    //     $offers = Offer::all()->where('user_id', Auth::user()->id);

    //     return view('UserPanelPage.userOffers')->with('offers', $offers);
    // }
}
