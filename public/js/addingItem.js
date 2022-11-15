document.getElementById("plus").addEventListener('click',adicionaItem,false);

function adicionaItem(){
    var url = "/adicionar-item-carrinho";
    var idProduct = document.getElementById("plus").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.location.reload(true);
      }else{
        console.log("status : "+this.status);
      }
    };
    xmlhttp.open("GET", url+"?idProduct="+idProduct, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send();
}
