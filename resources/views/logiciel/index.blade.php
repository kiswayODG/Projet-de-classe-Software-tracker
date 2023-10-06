@extends('layout.app')

@section('content')
@include('logiciel.addView')

<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-12 col-sm-12 col-12">
            <div class="breadcrumb-path mb-4">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{route('accueil')}}><img src="assets/img/dash.png" class="mr-2"
                                alt="breadcrumb" />Accueil</a>
                    </li>
                    <li class="breadcrumb-item active"> Logiciels</li>
                </ul>
                <h3>Logiciels</h3>
            </div>
        </div>
        <div class="col-xl-12 col-sm-12 col-12 mb-4">
            <div class="head-link-set">

                <button class="btn btn-success btn-sm action_label" data-bs-toggle="modal" data-bs-target="#addSoft"><i
                        data-feather="plus"></i> logiciel</button>
            </div>
        </div>
        @if(session()->has('success'))
        <p class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </p>
        @endif
        <div class="col-xl-12 col-sm-12 col-12 mb-4">
                <div class="table-responsive">
                    <table id ="softTable" class="table  custom-table no-footer">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Editeur</th>
                                <th>Date sorie</th>
                                <th>Catégorie</th>
                                <th>Type</th>
                                <th>Action(s)</th>
                                <!-- <th>Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            <tr>
                                <td>
                                    <label>
                                        {{$data->nom}}</label>

                                </td>
                                <td>
                                    <label>
                                        {{$data->editeur}}</label>
                                    <!-- <label class="action_label">Richard Wilson </label> -->
                                </td>
                                <td>
                                    <label>
                                        {{$data->datesortie}}</label>
                                </td>
                                <td><label>{{$data->category->nomcategory}} </label></td>
                                <td><label>{{$data->type? $data->type->libelle:""}} </label></td>
                               
                                <td>

                                    <form action="{{ route('logiciel.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button  data-bs-toggle="modal" data-bs-target='#addSoft'
                                            data-id="{{ $data->id }}" type="button"
                                            class="editsoft btn btn-primary btn-sm ">Modif</button>

                                        <button type="submit" class="btn btn-danger btn-sm">Supp.</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        $('#softTable').DataTable();

        $('.editsoft').on('click', function (event) {
            
            event.preventDefault();
            var id = $(this).data('id');
            $.get('logiciel/' + id + '/upd', function (data) {
                $('#userCrudModal').html("Edit category");
                $('#submit').val("Edit logiciel");
                $('#addSoft').modal('show');

                $('#soft_id').val(data.data.id);

                $('#nom').val(data.data.nom);
                $('#editeur').val(data.data.editeur);
                $('#version').val(data.data.version);
                $('#datesortie').val(data.data.datesortie);
                $('#category').val(data.data.categorie_id);
                $('#type').val(data.data.soft_type_id);
                

            })
        });
    });

</script>
@endsection
