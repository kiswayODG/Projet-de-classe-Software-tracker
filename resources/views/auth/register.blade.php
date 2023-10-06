@extends('layout/auth')

@section('content')

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Enregistrement</h1>
                            <p class="account-subtitle">Bienvenue sur Soft-Tracker</p>

                            <form method="post" action="{{ route('register.perform') }}">
                                @csrf

                                <div class="form-group">
                                    <label class="form-control-label">Nom d'utilisateur</label>
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                    <input class="form-control" name="username" value="{{ old('username') }}"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Mot de passe</label>
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Confirmez le mot de passe </label>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                    <input  type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-lg btn-block btn-primary" type="submit">S'enregistrer</button>
                                </div>
                            </form>

                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>


                            <div class="text-center dont-have">J'ai déjà un compte? <a href={{route('login')}}>Se connecter</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
