<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    protected $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('AdminPanelPage.user')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanelPage.userCreateForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->all();

        $user['password'] =  Hash::make($user['password']);
        $user = User::create($user);
        
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view()->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('AdminPanelPage.userUpdateForm')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        if ($user) {
            $user->delete();
            return redirect()->route('user.index');
        }
        
        return redirect()->route('user.index');
    }


    public function profile($id)
    {
        $user = User::find($id);

        return view('UserPanelPage.userProfile')->with('user', $user);
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        
        return redirect()->route('profile', ['id' => $id]);
    }

    public function myleads()
    {
        $laeds = Auth::user()->leads()->get();

        return view('UserPanelPage.userLead')->with('leads', $laeds);
    }

    public function myOffer()
    {
        $offers = Auth::user()->offers()->get();
        
        return view('UserPanelPage.userOffers')->with('offers', $offers);
    }
}
