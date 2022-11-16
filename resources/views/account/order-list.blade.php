@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meus Pedidos  </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pedido </th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Data do pedido</th>
                        <th scope="col">Situação </th>

                      </tr>
                    </thead>
                    <tbody>

                       @foreach ($orders as $order )

                        <tr>
                            <th scope="row"></th>
                            <td>PEDIDO - {{ $order->id }}</td>
                            <td><img width="50px;" height="50px;" src="{{ asset('img/product-1.jpg') }}"></td>
                            <td>{{ $order->created_at }}</td>
                            <td>

                                @if($order->status == 0)

                                    {{ Aguardando Aprovação }}

                                @elseif ($order->status == 1)

                                     {{ Pedido Separado }}

                                @else

                                    {{ Pedido Enviado }}

                                @endif


                            </td>
                        </tr>

                      @endforeach


                    </tbody>
                  </table>


            </div>

            </div>
        </div>
    </div>
</div>
@endsection
