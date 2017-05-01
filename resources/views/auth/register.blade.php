@extends('master.authLayout')

@section('content')
<div class="content-wrapper register-screen">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    Register
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('nif') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                NIF
                                <input type="text" class="form-control" name="nif" value="{{ old('nif') }}">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('nif'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nif') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                Full Name
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                User Name
                                <input type="text" class="form-control" name="user_name" value="{{ old('user_name') }}">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('user_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_name') }}</strong>
                                </span>
                                @endif
                                </div>
                          </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                E-Mail Address
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                Password
                                <input type="password" class="form-control" name="password">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">
                                Confirm Password
                                <input type="password" class="form-control" name="password_confirmation">
                            </label>
                            <div class="col-md-6">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="boton btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <a  href="{{ url('/password/reset') }}"> Recuperar contraseña </a>
    <a id='sol-user' href="{{ url('/login') }}"> Back to login </a>
</footer>
@endsection
