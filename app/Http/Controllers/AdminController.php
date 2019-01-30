<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('UserPanelPage.dashbord');
    }

    public function offers()
    {
        return view('UserPanelPage.offers');
    }

    public function offer($id)
    {
        return view('UserPanelPage.offer');
    }

    public function formLead(){
        return view('UserPanelPage.formLead');
    }

    public function profile(){
        return view('UserPanelPage.userProfile');
    }
}
