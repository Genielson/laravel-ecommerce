@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dados Pessoais </div>

                @if(Session::has('messageSuccess'))
                   <p class="alert text-center alert-success"> {{Session::get('messageSuccess')}} </p>
                @endif

                @if(Session::has('messageError'))
                   <p class="alert text-center alert-danger"> {{Session::get('messageError')}} </p>
                @endif

                <form method="POST" action="{{ route('meus-dados') }}">
                    @csrf
                    <div class=" m-2 form-group">
                        <label for="exampleInputEmail1">Nome </label>
                        <input type="text" class="form-control" name="nome" id="exampleInputEmail1" value="{{ $user->name }}" aria-describedby="emailHelp" placeholder="Seu nome ">

                    </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">CPF </label>
                        <input type="text" class="form-control" name="cpf" id="exampleInputEmail1" value="{{ $person->cpf }}"  aria-describedby="emailHelp" placeholder="Seu CPF">

                    </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <select id="estado" name="estado">

                            @foreach ( $states as $state )
                                <option
                                @if($address->state == $state->id)
                                       {{ "value='".$state->id."' selected " }}
                                @else
                                        {{ "value='".$state->id."'"}}
                                @endif >
                                    {{ $state->state_name }}
                                 </option>
                            @endforeach

                        </select>
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Cidade  </label>
                        <input type="text" class="form-control" name="cidade" id="exampleInputEmail1" value="{{ $address->city }}"  aria-describedby="emailHelp" placeholder="Sua cidade">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">CEP </label>
                        <input type="text" class="form-control" name="cep" id="exampleInputEmail1" value="{{ $address->cep }}"   aria-describedby="emailHelp" placeholder="Seu CEP">

                    </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Logradouro </label>
                        <input type="text" class="form-control" name="logradouro" id="exampleInputEmail1" value="{{ $address->address }}"  aria-describedby="emailHelp" placeholder="Seu Bairro">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Numero </label>
                        <input type="text" class="form-control" name="numero" id="exampleInputEmail1" value="{{ $address->number }}"  aria-describedby="emailHelp" placeholder="Numero da sua casa/apartamento">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1"> Bairro </label>
                        <input type="text" class="form-control" name="bairro" id="exampleInputEmail1" value="{{ $address->district }}" aria-describedby="emailHelp" placeholder="Seu bairro">
                      </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $user->email }}" aria-describedby="emailHelp" placeholder="Seu email">

                    </div>

                    <button type="submit" class="btn btn-primary m-2"> Salvar </button>
                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
