@extends('master.authLayout')
@section('content')
    <div class='content-wrapper login-screen'>
        <h2>Login</h2>
        <header> <img src='/images/logo.png' alt='Asoka el grande: Asociación para la defensa y protección de los animales'> </header>
        <div class='error-log'>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <form method="POST" action="{{ url('/login') }}">
            <fieldset>
                {!! csrf_field() !!}
                <input id='login'
                       class="{{ $errors->has('user_name') ? ' has-error' : '' }}"
                       placeholder='Usuario o email'
                        name = "user_name">
                <input id='pass'
                       class = "{{ $errors->has('password') ? ' has-error' : '' }}"
                       type='password'
                       placeholder='Contraseña'
                        name = "password">
                <input id='recordar' type='checkbox' name='remember'>
                <label for='recordar'>Recuérdame</label>
                <input type='submit' class='boton' value='Entrar'>
                </fieldset>
        </form>
    </div>
    <footer>
        <a  href="{{ url('/password/reset') }}"> Recuperar contraseña </a>
        <a id='sol-user' href="{{ url('/register') }}"> Solicitar usuario </a>
    </footer>
@stop