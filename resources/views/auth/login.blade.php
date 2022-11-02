
@extends('basic')
@section('content')

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('login')}}" id="login-form-wrap" class="login" method="post">
                        @csrf
                        <h2>Acessar</h2>
                        <p class="form-row form-row-first">
                            <label for="login">Login <span class="required">*</span>
                            </label>
                            <input type="text" id="login" class="form-control  @error('email') is-invalid @enderror " name="email" class="input-text">
                        </p>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <p class="form-row form-row-last">
                            <label for="senha">Senha <span class="required">*</span>
                            </label>
                            <input type="password" id="senha" class="form-control @error('password') is-invalid @enderror "  name="password" class="input-text">
                        </p>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="clear"></div>
                        <p class="form-row">
                            <input type="submit" value="Login" name="login" class="button">
                            <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Manter conectado </label>
                        </p>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha ?') }}
                            </a>
                        @endif

                        <div class="clear"></div>
                    </form>
                </div>

                <div class="col-md-6">
                    <form id="register-form-wrap" class="register" method="post" action="{{ route('register') }}">
                        @csrf
                        <h2>Criar conta</h2>
                        <p class="form-row form-row-first">
                            <label for="nome">Nome Completo <span class="required">*</span>
                            </label>
                            <input type="text" id="nome" class="form-control input-text @error('name') is-invalid @enderror" name="name" >
                        </p>

                        @error('name')
                        <span class="invalid-feedback " role="alert">
                            <strong> {{ $message }}</strong>
                       </span>
                        @enderror

                        <p class="form-row form-row-first">
                            <label for="email">E-mail <span class="required">*</span>
                            </label>
                            <input type="email" id="email" class="form-control input-text @error('email') is-invalid  @enderror " name="email" class="input-text">
                        </p>

                        @error('email')

                        <span class="invalid-feedback" role="alert">
                          <strong> {{ $message }}</strong>
                        </span>

                        @enderror


                        <p class="form-row form-row-last">
                            <label for="senha">Senha <span class="required">*</span>
                            </label>
                            <input type="password" id="senha" name="password" class="input-text @error('password') is-invalid  @enderror">
                        </p>

                        @error('password')

                        <span class="invalid-feedback" role="alert">
                          <strong> {{ $message }}</strong>
                        </span>

                        @enderror

                        <p class="form-row form-row-last">
                            <label for="senha">Repita a senha <span class="required">*</span>
                            </label>
                            <input type="password" id="senha" name="password_confirmation" class="input-text @error('password') is-invalid  @enderror">
                        </p>



                        <div class="clear"></div>

                        <p class="form-row">
                            <input type="submit" value="Criar Conta" name="login" class="button">
                        </p>

                        <div class="clear"></div>
                    </form>
                </div>


            </div>
        </div>
    </div>

@endsection

