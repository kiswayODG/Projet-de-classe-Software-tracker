@extends('layout.app')

@section('content')
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            {{--                <img class="img-fluid logo-dark mb-2" src="../../assets/img/logo.png" alt="Logo">--}}
            <div class="loginbox">
                <div class="login-right">
                    <div class="login-right-wrap">

                        <div class="form-group">
                            <label class="form-control-label">Nom d'utilisateur</label>
                            <input disabled="true" class="form-control" name="username" value={{$user -> username }}>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Nom</label>
                            <input disabled="true" class="form-control" name="username" value={{$user -> name }}>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Adresse mail</label>
                            <input disabled="true" class="form-control" name="username" value={{$user -> email }}>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Rôle adminisatrateur</label>
                            <input disabled="true"  class="form-control" name="role" value={{$user -> isAdmin ==1 ? "Oui" : "Non" }}>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
