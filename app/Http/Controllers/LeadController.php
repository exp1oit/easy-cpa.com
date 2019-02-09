<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Offer;
use App\Models\LeadImage;
use Illuminate\Http\Request;
use File;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();

        return view('AdminPanelPage.leads')->with('leads', $leads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($offer_id)
    {
        $offer = Offer::find($offer_id);

        return view('UserPanelPage.leadCreateForm')->with('offer', $offer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lead = Lead::create($request->all());

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $file) {
                $name_file = uniqid() . '.' . File::extension($file->getClientOriginalName());
                $path = '/img/leads/';

                $file->move(public_path() . $path, $name_file);  

                $path .= "$name_file";

                LeadImage::create([
                    'path'    => $path,
                    'lead_id' => $lead->id,
                    'user_id' => $lead->user_id
                ]);
            }
        }

        return redirect()->route('offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        return view('UserPanelPage.lead')->with('lead', $lead);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        return view('UserPanelPage.leadUpdateForm')->with('lead', $lead);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        $lead->update($request->all());

        if ($request->hasfile('filename')) {
            foreach ($request->file('filename') as $file) {
                $name_file = uniqid() . '.' . File::extension($file->getClientOriginalName());
                $path = '/img/leads/';

                $file->move(public_path() . $path, $name_file);  

                $path .= "$name_file";

                LeadImage::create([
                    'path'    => $path,
                    'lead_id' => $lead->id,
                    'user_id' => $lead->user_id
                ]);
            }
        }

        return redirect()->route('user-leads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $images = $lead->images()->get();
        
        foreach ($images as $img) {
            File::delete(public_path() . $img->path);
        }

        $lead->delete();

        return redirect()->route('lead.index');
    }
}
