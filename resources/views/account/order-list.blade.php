@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meus Pedidos  </div>

                <div class="card-header">Meus Pedidos </div>


                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Numero do pedido</th>
                        <th scope="col">Data do pedido</th>
                        <th scope="col">Situação </th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row"></th>
                        <td>1000</td>
                        <td>23-10-2022</td>
                        <td> Em separação </td>
                      </tr>


                    </tbody>
                  </table>


            </div>

            </div>
        </div>
    </div>
</div>
@endsection
