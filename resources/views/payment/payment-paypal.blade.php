<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <INPUT TYPE="hidden" name="charset" value="utf-8">
    <input type="hidden" name="business" value="genielsonl44@gmail.com">

    @for ($i = 0; $i < count($_SESSION['itens-cart']); $i++ )

        <input type="hidden" name="item_name_{{$i+1}}" value="{{$_SESSION['itens-cart'][$i]->title}}">
        <input type="hidden" name="item_number_{{$i+1}}" value="{{ $_SESSION['itens-cart'][$i]->id }}">
        <input type="hidden" name="amount_{{$i+1}}" value="{{$_SESSION['itens-cart'][$i]->price}}">
        <input type="hidden" name="quantity_{{$i+1}}" value="{{$_SESSION['itens-cart'][$i]->quantity}}">

    @endfor

    <input type="hidden" name="currency_code" value="BRL">

    <input type="hidden" name="email" value="{{$_SESSION['email-user']}}">

    <input type="image" name="submit"
      src="https://www.paypalobjects.com/pt_BR/i/btn/btn_buynow_LG.gif"
      alt="PayPal - The safer, easier way to pay online">

</form>
<script>
document.forms[0].submit();
</script>
