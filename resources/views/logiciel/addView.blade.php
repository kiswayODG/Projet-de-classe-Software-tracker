<!-- Modal -->
<div class="modal fade" id="addSoft" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('logiciel.store') }}" method="POST">
                @csrf

                <input type="hidden" id="soft_id" name="soft_id">


                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Logiciel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="nom" class="col-sm-4 col-form-label">Nom du logiciel*</label>
                        <div class="col-sm-8">
                        <input name="nom" id="nom" class="form-control" required="true" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nom" class="col-sm-4 col-form-label">Editeur *</label>
                        <div class="col-sm-8">
                        <input name="editeur" id="editeur" class="form-control" required="true" placeholder="(compagnie ou individu)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="dateSortie" class="col-sm-4 col-form-label">Date de sortie</label>
                        <div class="col-sm-8">
                        <input type="date" name="datesortie" id="datesortie" class="form-control" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nom" class="col-sm-4 col-form-label">Version*</label>
                        <div class="col-sm-8">
                        <input name="version" id="version" class="form-control" required="true" placeholder="V4.0.2">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-4 col-form-label">Catégorie*</label>
                        <div class="col-sm-8">
                        <select name="category" class="form-control" id="category" style="height: 40px;">
                            @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->nomcategory}}</option>
                            @endforeach
                        </select> 
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="type" class="col-sm-4 col-form-label">Type de logiciel*</label>
                        <div class="col-sm-8">
                        <select name="typeSft" class="form-control" id="type" style="height: 40px;">
                            @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->libelle}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" id="submit" class="btn btn-success" name="type"
                        value="create">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
