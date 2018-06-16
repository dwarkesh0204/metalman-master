<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EmployeeController extends Controller
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
        $designation = array('Head' => 'Head', 'Supervisor' => 'Supervisor', 'Operator' => 'Operator');

        $location = array('Mumbai' => 'Mumbai', 'Bangalore' => 'Bangalore', 'Chennai' => 'Chennai', 'Lucknow' => 'Lucknow', 'Indore' => 'Indore');
        
        return view('employee.index', compact('designation', 'location'));
    }

    
    public function listAjax(Request $request)
    {

        if (\Request::ajax())
        {
            return DataTables::of(Employee::orderBy('id','DESC')->get())->make(true);
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
        $designation = array('Head' => 'Head', 'Supervisor' => 'Supervisor', 'Operator' => 'Operator');

        $location = array('Mumbai' => 'Mumbai', 'Bangalore' => 'Bangalore', 'Chennai' => 'Chennai', 'Lucknow' => 'Lucknow', 'Indore' => 'Indore');

        return view('employee.create', compact('designation', 'location'));
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
            'employee_name' => 'required',
            'phone_number'=>'required',
            'email'=>'required',
            'designation'=>'required',
            'location'=>'required',
        ]);

        $employee = new Employee();
        $employee->employee_name = $request->employee_name;
        $employee->phone_number  = $request->phone_number;
        $employee->email         = $request->email;
        $employee->designation   = $request->designation;
        $employee->location      = $request->location;
        $employee->created_at    = Carbon::now();
        $employee->updated_at    = Carbon::now();
        $employee->save();

         return redirect()->route('employee.index')->with('flash_message','Employee created successfully');

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
