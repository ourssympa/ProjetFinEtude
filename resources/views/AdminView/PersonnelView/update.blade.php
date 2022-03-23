@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">

    <div class="box-header">
        <h4 class="box-title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Modifier Les informations Du Personnel</font>
            </font>
        </h4>
    </div>
    <div class="box-body">
        <form action="{{ route('personnel.update',$personnel->id) }}" method="post" id="form">
            @method('put')
            @csrf
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Numéro matricule</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $matricule }}" type="text" name="nummatricule">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>

            <div class="form-group row" >
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nom</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->nom }}" type="text" name="nom">

                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Prénoms</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->prenoms }}" type="text" name="prenoms">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sexe </font>
                    </font>
                </label>
                <div class="col-md-10">

                    @if($personnel->sexe=="masculin")
                    <div>
                    <input type="radio" id="mas" name="sexe" value="masculin" checked>
                    <label for="mas">masculin</label>
                </div>

                    <div>
                        <input type="radio" id="fem" name="sexe" value="feminin">
                        <label for="fem">feminin</label>
                    </div>

                    @else
                    <div>
                        <input type="radio" id="mas" name="sexe" value="masculin" >
                        <label for="mas">masculin</label>
                    </div>

                        <div>
                            <input type="radio" id="fem" name="sexe" value="feminin" checked>
                            <label for="fem">feminin</label>
                        </div>

                    @endif





                </div>
            </div>



            <div class="form-group row">
                <label class="col-form-label col-md-2">Date de naissance</label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->datedenaissance}}" type="date" name="datedenaissance">
                    {{-- <span class="form-text text-muted">Using <code>input type="date"</code></span> --}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nationalité</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->nationalite }}" type="text" name="nationalite">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Télephone</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->tel }}" type="tel" name="tel">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Poste</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->poste }}" type="text" name="poste">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>



            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Niveau d'etude</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $personnel->nivetude }}" type="text" name="nivetude">
                    <span class="form-text text-muted">
                        {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                    </span>
                </div>
            </div>




            <div class="d-flex align-content-md-center">
                <button id="btn" type="submit" class="btn btn-success btn-lg btn-block">Enregistrer</button>
            </div>
        </form>


    </div>
    <!-- /.box-body -->


</div>
@endsection
