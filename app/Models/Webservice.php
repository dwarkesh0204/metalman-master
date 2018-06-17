<?php

namespace  App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\User;
use Auth;

class Webservice extends Model
{
    public $JsonArray = array();
    protected $activationService;
    public $is_file = false;

    /**
     * Use To Login User.
     *
     * Request Object :
     * {"task":"login","taskData":{"email":"dwarkesh0204@gmail.com","password":"123456"}}
     */
    public function login($TaskData)
    {
		if(Auth::attempt(array('email'=>$TaskData->email,'password'=>$TaskData->password)))
        {
            $user_detail = User::where('email',$TaskData->email)->first();

            if (isset($user_detail))
            {
                $loggedInUser = Auth::loginUsingId($user_detail->id);
                $loggedInUser = Auth::user();

                //User Data
                $user_data = array(
					'id'    => $loggedInUser->id,
					'name'  => $loggedInUser->name,
					'email' => $loggedInUser->email,
                );

                $this->JsonArray['user_id']      = $loggedInUser->id;
                $this->JsonArray['user_data']    = $user_data;
                $this->JsonArray['status_code']  = 200;
                header("content-type: application/json");
                echo json_encode($this->JsonArray);exit;
            }
            else
            {
                $this->JsonArray['user_id']      = '';
                $this->JsonArray['user_data']    = array();
                $this->JsonArray['status_code']  = 204;
                header("content-type: application/json");
                echo json_encode($this->JsonArray);exit;
            }
        }
        else
        {
            $this->JsonArray['user_id']      = '';
            $this->JsonArray['user_data']    = array();
            $this->JsonArray['status_code']  = 204;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }
    }

    /**
     * Use To Logout User.
     *
     * Request Object :
     * {"task":"logout","taskData":{}}
     */
    public function logout($TaskData) {
        Auth::logout();

        $this->JsonArray['message']      = 'You have successfully logout.';
        $this->JsonArray['status_code']  = 200;
        header("content-type: application/json");
        echo json_encode($this->JsonArray);exit;
    }

    /**
     * Use Get Site List.
     *
     * Request Object :
     * {"task":"getSiteList","taskData":{}}
     *
     */
    public function getSiteList($TaskData)
    {
        $siteData = Site::get()->toArray();

        if ($siteData > 0) {
            $this->JsonArray['data']             = $siteData;
            $this->JsonArray['message']          = "Site Data List View Successfully";
            $this->JsonArray['status_code']      = 200;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }else{
            $this->JsonArray['data']        = '';
            $this->JsonArray['message']     = "Site Data List View Successfully";
            $this->JsonArray['status_code'] = 204;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }
    }

    /**
     * Use Get Site List.
     *
     * Request Object :
     * {"task":"getSiteList","taskData":{"site_id":"1"}}
     *
     */
    public function getSiteDetail($TaskData)
    {
        $siteDetail = Site::where('id', $TaskData->id)->get()->toArray();

        if ($siteData > 0) {
            $this->JsonArray['data']             = $siteDetail;
            $this->JsonArray['message']          = "Site Data List View Successfully";
            $this->JsonArray['status_code']      = 200;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }else{
            $this->JsonArray['data']        = '';
            $this->JsonArray['message']     = "Site Data List View Successfully";
            $this->JsonArray['status_code'] = 204;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }
    }
    /**
     * Use To Post Site Data.
     *
     * Request Object :
     * {"task":"postSiteData","taskData":{"name":"","address":"","state":"","city":""}}
     *
     */
    public function postSiteData($TaskData)
    {
        $insert_data = array(
            'name'	  => $TaskData->name,
            'address' => $TaskData->address,
            'state'   => $TaskData->state,
            'city'    => $TaskData->city,
            );

        Site::create($insert_data);
        
        $this->JsonArray['data']        = "";
        $this->JsonArray['message']     = "Site Data Inserted Successfully";
        $this->JsonArray['status_code'] = 200;
        header("content-type: application/json");
        echo json_encode($this->JsonArray);exit;
    }

    /**
     * Use Get Employee List.
     *
     * Request Object :
     * {"task":"getEmployeeList","taskData":{}}
     *
     */
    public function getEmployeeList($TaskData)
    {
        $employeeData = Employee::get()->toArray();

        if ($employeeData > 0) {
            $this->JsonArray['data']             = $employeeData;
            $this->JsonArray['message']          = "Employee Data List View Successfully";
            $this->JsonArray['status_code']      = 200;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }else{
            $this->JsonArray['data']        = '';
            $this->JsonArray['message']     = "Employee Data List View Successfully";
            $this->JsonArray['status_code'] = 204;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }
    }

    /**
     * Use Get Employee List.
     *
     * Request Object :
     * {"task":"getEmployeeDetail","taskData":{"employee_id":"1"}}
     *
     */
    public function getEmployeeDetail($TaskData)
    {
        $employeeDetail = Employee::where('id', $TaskData->employee_id)->get()->toArray();

        if ($employeeDetail > 0) {
            $this->JsonArray['data']             = $employeeDetail;
            $this->JsonArray['message']          = "Employee Data List View Successfully";
            $this->JsonArray['status_code']      = 200;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }else{
            $this->JsonArray['data']        = '';
            $this->JsonArray['message']     = "Employee Data List View Successfully";
            $this->JsonArray['status_code'] = 204;
            header("content-type: application/json");
            echo json_encode($this->JsonArray);exit;
        }
    }
    /**
     * Use To Post Employee Data.
     *
     * Request Object :
     * {"task":"postEmployeeData","taskData":{"employee_name":"","phone_number":"","email":"","designation":"","location":""}}
     *
     */
    public function postEmployeeData($TaskData)
    {
        $insert_data = array(
            'employee_name' => $TaskData->employee_name,
            'phone_number'  => $TaskData->phone_number,
            'email'         => $TaskData->email,
            'designation'   => $TaskData->designation,
            'location'      => $TaskData->location,
            );

        Employee::create($insert_data);
        
        $this->JsonArray['data']        = "";
        $this->JsonArray['message']     = "Employee Data Inserted Successfully";
        $this->JsonArray['status_code'] = 200;
        header("content-type: application/json");
        echo json_encode($this->JsonArray);exit;
    }
}
