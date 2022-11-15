@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Minha Conta</div>

                <ul class="list-group">
                    <li class="list-group-item"> <a href="">Meus Pedidos</a></li>
                    <li class="list-group-item"><a href="">Meu Carrinho</a></li>
                    <!--<li class="list-group-item"><a href="">Lista de Desejos</a></li>-->
                    <li class="list-group-item"><a href="{{ route('meus-dados') }}">Alterar Dados Pessoais</a></li>


                </ul>


            </div>
        </div>
    </div>
</div>
@endsection
