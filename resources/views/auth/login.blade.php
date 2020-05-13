@extends('layouts.app_auth')
@section('content')

    <div class="kt-login__container">
        <div class="kt-login__logo">
            <a href="#">
                <img src="assets/media/logo-sm.png">
            </a>
        </div>
        <div class="kt-login__signin">
            <div class="kt-login__head">
                <h3 class="kt-login__title">Entrar</h3>
            </div>
            <form class="kt-form" action="{{route('login')}}" method="post">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="email" placeholder="Email" required name="email" autocomplete="off">

                </div>


                <div class="input-group">
                    <input class="form-control" type="password" placeholder="Senha" required name="password">
                </div>
                <div class="row kt-login__extra">
                    <div class="col">
                        <label class="kt-checkbox">
                            <input type="checkbox" name="remember"> Lembre-se de mim
                            <span></span>
                        </label>
                    </div>
                    <div class="col kt-align-right">
                        <a href="javascript:;" class="kt-login__link">Esqueceu a senha ?</a>
                    </div>
                </div>
                <div class="kt-login__actions">
                    <button id="" class="btn btn-brand btn-elevate kt-login__btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="kt-login__signup">
            <div class="kt-login__head">
                <h3 class="kt-login__title">Cadastro</h3>
                <div class="kt-login__desc">Preencha os campos para se cadastrar:</div>
            </div>
            <form class="kt-form" action="{{route('register')}}" method="post">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Nome" required name="name">
                </div>

                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" required name="c_email" autocomplete="off">
                </div>

                <div class="input-group">
                    <input class="form-control" type="password" placeholder="Senha" required name="password">
                </div>

                <div class="input-group">
                    <input class="form-control" type="password" placeholder="Confirmar senha" requried name="password_confirmation">
                </div>

                <div class="kt-login__actions">
                    <button class="btn btn-brand btn-elevate kt-login__btn-primary">Cadastrar</button>&nbsp;&nbsp;
                    <button id="kt_login_signup_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>
        <!--<div class="kt-login__forgot">
            <div class="kt-login__head">
                <h3 class="kt-login__title">Esquece a senha ?</h3>
                <div class="kt-login__desc">Digite seu email para resetar a senha:</div>
            </div>
            <form class="kt-form" action="#" >
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" required id="kt_email" autocomplete="off">
                </div>
                <div class="kt-login__actions">
                    <button class="btn btn-brand btn-elevate kt-login__btn-primary">Resetar</button>&nbsp;&nbsp;
                    <button id="kt_login_forgot_cancel" class="btn btn-light btn-elevate kt-login__btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>-->
        <div class="kt-login__account">
            <span class="kt-login__account-msg">
                Ainda não tem uma conta?
            </span>
            &nbsp;&nbsp;
            <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Cadastre-se!</a>
        </div>
    </div>


@endsection
