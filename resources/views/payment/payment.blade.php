@extends('basic')


@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Pagamento</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-12">

                    <div class="product-content-right">

                        <form enctype="multipart/form-data" action="{{ route('confirma-pagamento') }}" class="checkout" method="post" name="checkout">
                            @csrf
                            <div id="customer_details" class="col2-set">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Endereço de entrega</h3>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Cep <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" placeholder="00000-000" value="{{ $endereco->cep }}" id="billing_address_1" name="cep" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Endereço <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="{{ $endereco->address }}" placeholder="Logradouro" id="billing_address_1" name="endereco" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Bairro <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="{{ $endereco->district }}" placeholder="Seu bairro" id="billing_address_1" name="bairro" class="input-text ">
                                            </p>

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Número <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="{{ $endereco->number }}" placeholder="Numero da sua casa/apartamento" id="billing_address_1" name="numero" class="input-text ">
                                            </p>

                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Cidade <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="{{ $endereco->city }}" placeholder="Cidade" id="billing_city" name="cidade" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">Estado</label>
                                                <input type="text" id="billing_state" value="{{ $endereco->state }}" name="estado" placeholder="Estado" value="" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">País</label>
                                                <input type="text" id="billing_state" readonly name="pais" value="BRASIL" placeholder="País" value="" class="input-text ">
                                            </p>

                                            <div class="clear"></div>


                                            <h3 id="order_review_heading">Detalhes do Pedido</h3>

                                            <div id="order_review" style="position: relative;">
                                                <table class="shop_table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Produto</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @foreach ($itens as $item )



                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                {{ $item->title }} <strong class="product-quantity">× {{ $item->quantity }}</strong> </td>
                                                            <td class="product-total">
                                                                <span class="amount">R$ {{ $item->price  }}</span>
                                                            </td>
                                                        </tr>

                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>

                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td><span class="amount">R$ {{ $subtotal }} </span>
                                                        </td>
                                                    </tr>

                                                    <tr class="shipping">
                                                        <th>Frete</th>
                                                        <td>
                                                            R$ {{ $frete }}
                                                            <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                        </td>
                                                    </tr>


                                                    <tr class="order-total">
                                                        <th>Total do Pedido</th>
                                                        <td><strong><span class="amount">{{ $total }}</span></strong> </td>
                                                    </tr>

                                                    </tfoot>
                                                </table>


                                                <div id="payment">

                                                    <div class="form-row place-order">

                                                        <input type="submit" data-value="Place order" value="Pagar" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                                    </div>

                                                    <div class="clear"></div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>

                </div>
                </form>



            </div>

        </div>
    </div>

    </div>
    </div>


@endsection
