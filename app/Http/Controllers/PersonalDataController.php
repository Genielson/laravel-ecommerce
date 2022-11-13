<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PersonalDataController extends Controller
{

    public function allDataPersonalUser(){
        $data['address'] = DB::table('table_address')
        ->where('id_user',auth()->user()->id)->get()[0];
        $data['person'] = DB::table('people')
        ->where('id_user',auth()->user()->id)->get()[0];
        $data['user'] = DB::table('users')
        ->where('id',auth()->user()->id)->get()[0];
        $data['states'] = DB::table('states')->get();


        return view('account.personal-data',
        [ 'address' => $data['address'],
          'person' => $data['person'],
          'user' => $data['user'],
          'states' => $data['states']
        ]);
    }

}
