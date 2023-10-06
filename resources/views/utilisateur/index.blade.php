@extends('layout.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-12 col-sm-12 col-12">
            <div class="breadcrumb-path mb-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{route('accueil')}}><img src="assets/img/dash.png" class="mr-2"
                                alt="breadcrumb" />Accueil</a>
                    </li>
                    <li class="breadcrumb-item active"> Utilisateurs</li>
                </ul>
                <h3>Utilisateurs</h3>
            </div>
        </div>
        @if(session()->has('success'))
        <p class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </p>
        @endif
        <div class="col-xl-12 col-sm-12 col-12 mb-4">
            <table id="userTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nom d'utilisateur</th>
                        <th>Email</th>
                        <th>Action(s)
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            <label class=> {{$user->name}}</label>
                        </td>
                        <td>
                            <label class=> {{$user->username}}</label>
                        </td>
                        <td><label> {{$user->email}}</label></td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <!-- <button  data-bs-toggle="modal" data-bs-target='#addSoft'
                                            data-id="{{ $user->id }}" type="button"
                                            class="btn btn-primary btn-sm editsoft">Modif</button> -->

                                <button type="submit" {{ $user->fl_bloq == 1 ? 'disabled' : '' }}
                                    class="btn btn-warning btn-sm " name="action" value="block">Bloquer</button>
                                <button type="submit" {{ $user->fl_bloq == 1 ? '' : 'disabled' }}
                                    class="btn btn-success btn-sm " name="action" value="allow">Autorisé</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
   
    $(document).ready(function () {
        $('#userTable').DataTable();
    });

</script>
@endsection
