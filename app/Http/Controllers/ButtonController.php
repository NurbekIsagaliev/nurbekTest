<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ButtonController extends Controller
{
    public function buttonClick(Request  $request){
        $post = Click::create(array(
            'name'  => $request->name,
            'request_type' =>$request->request_type,
            'status'   => $request->status
          ));
          
    }
}

