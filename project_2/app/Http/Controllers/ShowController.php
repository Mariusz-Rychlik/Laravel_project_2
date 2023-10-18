<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function Show(){
        return 'kontroler ShowController';
    }

    public function ShowFirstName(){
        $data=[
            'firstName'=> 'Janusz',
            'lastName' => 'Nowak',
            'city'=> 'Poznan'
        ];
        return View('data',$data);
    }
}
