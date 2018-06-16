<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;

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

    /**
     * Employee Export In Excel.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getExport(){
        Excel::create('Export data', function($excel) {
            $excel->sheet('Sheet 1', function($sheet) {
                $employees = Employee::select("employee_name", "phone_number", "email", 'designation', 'location', 'created_at')->get();
                    foreach($employees as $employee) {
                     $data[] = array(
                        $employee->employee_name,
                        $employee->phone_number,
                        $employee->email,
                        $employee->designation,
                        $employee->location,
                        $employee->created_at,
                    );
                }
                $sheet->fromArray($data, null, 'A1', false, false);
                $headings = array('Employee Name', 'Phone Number', 'Email ID', 'Designation', 'Location', 'Created At');
                $sheet->prependRow(1, $headings);
            });
        })->export('xls');
    }

    /*
    Import Employee
    */
    public function importEmployeeSave(Request $request)
    {
        if($request->hasFile('employee_import_file'))
        {
            $extension = $request->file('employee_import_file')->getClientOriginalExtension();
            if ($extension == "xls" || $extension == "xlsx") {
                $path = $request->file('employee_import_file')->getRealPath();
                $data = Excel::load($path, function($reader) {})->get();
                if(!empty($data) && $data->count())
                {
                    foreach($data->toArray() as $key=>$value)
                    {
                        if(!empty($value))
                        {
                            Employee::create($value);
                        }
                    }
                }
            }
            else {
                return redirect()->route('employee.index')->with('flash_message','Please Insert Excel File.');
            }
        }
        
        return redirect()->route('employee.index')->with('flash_message','Employee imported successfully.');  
    }
}
