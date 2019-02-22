<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
//    public function checkValidation(Request $request){
//        echo 'Name:' . $request->name . '.Age:' . $request->age;
//    }
    public function checkValidation(FormExampleRequest $request){
        $success = "Du lieu cap nhat thanh cong";
        return view('welcome', compact('success'));
    }
}
