<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function index(Request $request){
        $certificates = Certificate::paginate(5);
        $filterKeyword = $request->get('number_certificates');
        if($filterKeyword){
            $certificates = Certificate::where("number_certificates", "LIKE",
           "%$filterKeyword%")->paginate(5);
        }
        return view("index", compact("certificates"));
    }
}
