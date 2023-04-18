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
    
    public function index(){
        return view('index');
    }
    public function validate(Request $request){
        $numberCertificate = $request->input('number_certificate');
        $certificates = Certificate::where('number_certificate', $numberCertificate)->get();
        return view('index', ['certificates' => $certificates]);
    }
    
}