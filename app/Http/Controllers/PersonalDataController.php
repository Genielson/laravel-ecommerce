<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDataController extends Controller
{

    public function allDataPersonalUser(){
        return view('account.personal-data');
    }

}
