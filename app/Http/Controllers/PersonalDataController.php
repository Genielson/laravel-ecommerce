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



       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveDataPersonalUser(Request $request){
        $id = auth()->user()->id;
        $user = new User();
        $person = new Person();
        $address = new Address();
        $user->id = $id;
        $user->email = $request->input("email");
        $user->name = $request->input("nome");

        $person->id_user = $id;
        $person->name = $request->input("nome");
        $person->cpf = $request->input("cpf");
        $person->name = $request->input("nome");

        $address->id_user = $id;
        $address->address = $request->input('endereco');
        $address->number = $request->input('numero');
        $address->district = $request->input('bairro');
        $address->state = $request->input('estado');
        $address->city = $request->input('city');
        $address->country = 'BRA';
        $address->cep = $request->input('cep');

        if($user->save() && $person->save() && $address->save()){
            return redirect()->route('meus-dados')
            ->with('messageSuccess','Dados salvos com sucesso! ');
        }else{
            return redirect()->route('meus-dados')
            ->with('messageError','Houve um erro ao salvar os dados! ');
        }



    }

}
