<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

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

    
    public function listAjax(Request $request)
    {

        if (\Request::ajax())
        {
            return DataTables::of(Site::orderBy('id','DESC')->get())->make(true);
        }
        else
        {
            abort(403);
        }
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
            'name' => 'required | unique:site,name',
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
        $site = Site::find($id);

        return view('site.show', compact('site'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Site::find($id);

        $site_list = Site::all()->pluck('name','name')->toArray();

        $state = array('Maharashtra' => 'Maharashtra', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Gujarat' => 'Gujarat', 'Arunachal Pradesh' => 'Arunachal Pradesh');

        $city = array('Mumbai' => 'Mumbai', 'Bangalore' => 'Bangalore', 'Chennai' => 'Chennai', 'Lucknow' => 'Lucknow', 'Indore' => 'Indore');

        return view('site.edit', compact('state', 'city', 'item', 'site_list'));
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
        $this->validate($request, [
            'name'    => 'required | unique:site,name,'.$id,
            'address' => 'required',
            'state'   => 'required',
            'city'    => 'required',
        ]);
        
        // Update all data
        Site::find($id)->update($request->all());

        return redirect('site')->with('flash_message','Site Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Site::find($id)->delete();

        return redirect()->route('site.index')->with('flash_message','Site Deleted Successfully.');

    }
}
