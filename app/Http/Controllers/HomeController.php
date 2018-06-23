<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Site;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteData = Site::select('id', 'name')->get()->toArray();
        //$currentVisitorData = \LoginActivity::getLatestLoginLogs(10);

        /*$currentVisitorData = \DB::table('user_login_activities')
                    ->select('users.name as user_name', 'user_login_activities.event as event', 'user_login_activities.created_at as created_at')
                    ->leftjoin('users', 'user_login_activities.user_id', '=', 'users.id')
                    ->where('user_login_activities.event', 'login')
                    ->orderBy('user_login_activities.created_at', 'ACS')
                    ->take(10)
                    ->get()
                    ->toArray();*/

        return view('home', compact('siteData'));
    }
}
