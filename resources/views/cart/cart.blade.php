@extends('basic')

@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Carrinho de Compras</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                @if(count($itens) > 0)
                                        <table cellspacing="0" class="shop_table cart">
                                            <thead>
                                            <tr>

                                                <th class="product-thumbnail">&nbsp;</th>
                                                <th class="product-name">Produto</th>
                                                <th class="product-price">Preço</th>
                                                <th class="product-quantity">Quantidade</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            <tr class="cart_item">

                                                @foreach ($itens as $item )


                                                        <td class="product-thumbnail">
                                                            <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                                        </td>

                                                        <td class="product-name">
                                                            <a href="#">{{ $item->title }}</a>
                                                        </td>

                                                        <td class="product-price">
                                                            <span class="amount">{{ $item->price }}</span>
                                                        </td>

                                                        <td class="product-quantity">
                                                            <div class="quantity buttons_added">
                                                                <button type="button" class="minus" id="minus" value="{{ $item->id_product }}"> - </button>
                                                                <input type="number" size="4" class="input-text qty text" title="Qty" value="{{ $item->quantity }}" min="0" step="1">
                                                                <button type="button" class="plus" id="plus" value="{{ $item->id_product }}"> + </button>
                                                            </div>
                                                        </td>

                                                        <td class="product-subtotal">
                                                            <span class="amount">R$ {{ $item->price * $item->quantity }}</span>
                                                        </td>

                                                        <td class="product-remove">
                                                            <a title="Remove this item" class="remove" href="{{ route('remove-item',['id' => $item->id_product]) }}">×</a>
                                                        </td>

                                                @endforeach
                                            </tr>
                                            <tr>
                                                <td class="actions" colspan="6">
                                                    <div class="coupon">
                                                        <label for="coupon_code">Cupom:</label>
                                                        <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                        <input type="submit" value="Aplicar" name="apply_coupon" class="button">
                                                    </div>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </form>

                                    <div class="cart-collaterals">

                                        <div class="cross-sells">

                                            <h2>Cálculo de Frete</h2>
                                            <form>
                                                <div class="coupon">
                                                    <label for="cep">CEP:</label>
                                                    <input type="text" placeholder="00000-000" value="" id="cep" class="input-text" name="cep">
                                                    <input type="submit" value="CÁLCULAR" class="button">
                                                </div>
                                            </form>

                                        </div>


                                        <div class="cart_totals ">
                                            <h2>Resumo da Compra</h2>

                                            <table cellspacing="0">
                                                <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">R$15,00</span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Frete</th>
                                                    <td>R$0,00</td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">R$15,00</span></strong> </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                    <div class="pull-right">
                                        <input type="submit" value="Finalizar Compra" name="proceed" class="checkout-button button alt wc-forward">
                                    </div>

                            @else

                                    <h2 style="text-align: center" > Desculpe, mas seu carrinho está vazio. </h2>


                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
