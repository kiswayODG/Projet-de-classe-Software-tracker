@extends('layout.auth')

@section('content')

<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            {{--                <img class="img-fluid logo-dark mb-2" src="../../assets/img/logo.png" alt="Logo">--}}
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>CONNEXION</h1>
                        <p class="account-subtitle">Bienvenue sur Soft-Tracker</p>



                        <form method="POST" action="{{ route('login.perform') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Login (email)</label>

                                @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                                <input class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Mot de passe</label>
                                @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                                <div class="pass-group">
                                    <input type="password" name="password" id="password" class="form-control pass-input">
                                    <span class="fas fa-eye toggle-password" id="togglePassword" ></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <!-- <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cb1">
                                                <label class="custom-control-label" for="cb1">Se rappeler de moi</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="forgot-link" href="#">Mot de passe oublié ?</a>
                                        </div> -->


                                </div>
                                @if(Session::has('errors'))
                                <span class="text-danger text-center"> {{Session::get('errors')->first()}}</span>
                                @endif
                            </div>
                            <button class="btn btn-lg btn-block btn-primary" type="submit">Se connecter</button>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">Ou</span>
                            </div>


                            <div class="text-center dont-have">Jai pas de compte? <a
                                    href="{{route('register')}}">Creez-en!</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            this.classList.toggle("fa-eye");
        });

    </script>

@endsection
