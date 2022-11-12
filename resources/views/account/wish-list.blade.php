@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meus Desejos </div>


                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome </th>
                        <th scope="col">Categoria </th>
                        <th scope="col"> Imagem </th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td> Smartphone Samsung Galaxy S10 </td>
                        <td> Eletronicos </td>
                        <td> <img width="50px;" height="50px;" src="{{ asset('img/product-1.jpg') }}"> </td>
                      </tr>


                    </tbody>
                  </table>


            </div>

            </div>
        </div>
    </div>
</div>
@endsection
