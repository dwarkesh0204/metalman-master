<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Carbon\Carbon;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state = array('Maharashtra' => 'Maharashtra', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Gujarat' => 'Gujarat', 'Arunachal Pradesh' => 'Arunachal Pradesh');

        $city = array('Mumbai' => 'Mumbai', 'Bangalore' => 'Bangalore', 'Chennai' => 'Chennai', 'Lucknow' => 'Lucknow', 'Indore' => 'Indore');
        
        return view('site.index', compact('state', 'city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = array('Maharashtra' => 'Maharashtra', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Gujarat' => 'Gujarat', 'Arunachal Pradesh' => 'Arunachal Pradesh');

        $city = array('Mumbai' => 'Mumbai', 'Bangalore' => 'Bangalore', 'Chennai' => 'Chennai', 'Lucknow' => 'Lucknow', 'Indore' => 'Indore');

        return view('site.create', compact('state', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address'=>'required',
            'state'=>'required',
            'city'=>'required',
        ]);

        $site = new Site();
        $site->name       = $request->name;
        $site->address    = $request->address;
        $site->state      = $request->state;
        $site->city       = $request->city;
        $site->created_at = Carbon::now();
        $site->updated_at = Carbon::now();
        $site->save();

         return redirect()->route('site.index')->with('flash_message','Site created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
