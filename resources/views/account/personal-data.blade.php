@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dados Pessoais </div>

                <form>

                    <div class=" m-2 form-group">
                        <label for="exampleInputEmail1">Nome </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu nome ">

                    </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">CPF </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu CPF">

                    </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Estado</label>
                        <select id="estado" name="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="EX">Estrangeiro</option>
                        </select>
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Cidade  </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sua cidade">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Logradouro </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu Bairro">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Numero </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numero da sua casa/apartamento">
                      </div>

                      <div class="m-2 form-group">
                        <label for="exampleInputEmail1"> Bairro </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu bairro">
                      </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">

                    </div>

                    <div class="m-2 form-group">
                      <label for="exampleInputPassword1">Senha </label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>

                    <div class="m-2 form-group">
                        <label for="exampleInputPassword1">Confirmar Senha </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>

                    <button type="submit" class="btn btn-primary m-2"> Salvar </button>
                  </form>

            </div>
        </div>
    </div>
</div>
@endsection
