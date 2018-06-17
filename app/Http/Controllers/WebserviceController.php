<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Webservice;

class WebserviceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->WebServiceModel = new WebService();
    }

    /**
     * Use to get Request Object
     */
    public function index(Request $request){

        $Data     = json_decode(stripslashes(htmlspecialchars_decode(urldecode($request->reqObject))));
        $Task     = $Data->task;
        $TaskData = $Data->taskData;

        if($Task != ""){
            switch ($Task) {
                case 'login':
                    return $this->WebServiceModel->login($TaskData);
                    break;
                case 'logout':
                    return $this->WebServiceModel->logout($TaskData);
                    break;
				case 'getSiteList':
                    return $this->WebServiceModel->getSiteList($TaskData);
                    break;
                case 'getSiteDetail':
                    return $this->WebServiceModel->getSiteDetail($TaskData);
                    break;
                case 'postSiteData':
                    return $this->WebServiceModel->postSiteData($TaskData);
                    break;
                case 'getEmployeeList':
                    return $this->WebServiceModel->getEmployeeList($TaskData);
                    break;
                case 'getEmployeeDetail':
                    return $this->WebServiceModel->getEmployeeDetail($TaskData);
                    break;
                case 'postEmployeeData':
                    return $this->WebServiceModel->postEmployeeData($TaskData);
                    break;
            }
        }else{
            echo "No task Found";
        }
    }
}
