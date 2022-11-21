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
        ->where('id_user',auth()->user()->id)->get();
        $data['person'] = $data['person'][count($data['person']) - 1];

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



       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDataPersonalUser(Request $request){
        $id = auth()->user()->id;
        if(User::updateOrCreate([
            'id' => $id,
            'email' => $request->input("email"),
            'name' => $request->input("nome")
        ]
        ) && Person::updateOrCreate([
            'id' => $id,
            'id_user' => $id,
            'name' => $request->input("nome"),
            'cpf' => $request->input("cpf")
        ]) && Address::updateOrCreate([
            'id_user' => $id,
            'address' => $request->input('logradouro'),
            'number' => $request->input('numero'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'state' => $request->input('estado'),
            'country' => "BRA",
            'cep' => $request->input('cep')
        ])){
            return redirect()->route('meus-dados')
            ->with('messageSuccess','Dados salvos com sucesso! ');
        }else{
            return redirect()->route('meus-dados')
            ->with('messageError','Houve um erro ao salvar os dados! ');
        }

    }

}
