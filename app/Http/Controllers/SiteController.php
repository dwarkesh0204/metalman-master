<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\State;
use App\Models\City;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;

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
        $state = State::select('id', 'name')->get()->toArray();
        
        return view('site.index', compact('state'));
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
        $state = State::all()->pluck('name','id')->toArray();

        return view('site.create', compact('state'));
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

        $state = State::where('id', $request->state)->first();
        $city = City::where('id', $request->city)->first();

        $site = new Site();
        $site->name       = $request->name;
        $site->address    = $request->address;
        $site->state      = $state->name;
        $site->city       = $city->name;
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

        $state = State::select('id', 'name')->get()->toArray();

        return view('site.edit', compact('state', 'item', 'site_list'));
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
        
        $state = State::where('id', $request->state)->first();

        $city = City::where('id', $request->city)->first();

        $data = array(
            'name'    => $request->name,
            'address' => $request->address,
            'state'   => $state->name,
            'city'    => $city->name,
        );
        // Update all data
        Site::find($id)->update($data);

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

    /**
     * Get city list base on state.
     */
        public function getCityList(Request $request)
    {
        $cities = City::where("state_id", $request->state_id)->pluck("name","id");
        
        return response()->json($cities);
    }

}