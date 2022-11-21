@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meus Pedidos  </div>

                @if($itens != NULL && count($itens) > 0)

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

                       @foreach ($itens as $item )

                        <tr>
                            <th scope="row"></th>
                            <td>PEDIDO - {{ $item->id }}</td>
                            <td><img width="50px;" height="50px;" src="{{ asset('img/product-1.jpg') }}"></td>
                            <td>{{ $item->created_at }}</td>
                            <td>

                                @if($item->status == 0)

                                     Aguardando Aprovação

                                @elseif ($item->status == 1)

                                      Pedido Separado

                                @else

                                      Pedido Enviado

                                @endif


                            </td>
                        </tr>

                      @endforeach


                    </tbody>
                  </table>


                  @else

                        <h2 style="text-align: center" > Desculpe, mas não existe pedidos realizados . </h2>

                  @endif

            </div>

            </div>
        </div>
    </div>
</div>
@endsection
