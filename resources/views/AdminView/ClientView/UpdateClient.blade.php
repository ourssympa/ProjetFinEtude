@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">

    <div class="box-header">
        <h4 class="box-title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Modifier le compte</font>
            </font>
        </h4>
    </div>
    <div class="box-body">
        <form action="{{route('client.update',$data->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Numéro de Compte</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->numcompte}}" type="text" name="numcompte">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nom</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->nom}}" type="text" name="nom">

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
                    <input class="form-control" value="{{ $data->prenoms}}" type="text" name="prenoms">
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
                        <font style="vertical-align: inherit;">Numéro CNI</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{$data->numcarte}}"  type="text" name="numcarte">
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

                    @if($data->sexe=="masculin")
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
                    <input class="form-control" value="{{ $data->datedenaissance}}"  type="date" name="datedenaissance">
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
                    <input class="form-control" value="{{ $data->nationalite}}" type="text" name="nationalite">
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
                    <input class="form-control" value="{{ $data->telephone}}" type="tel" name="telephone">
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
                        <font style="vertical-align: inherit;">Profession</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->profession}}" type="text" name="profession">
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
                        <font style="vertical-align: inherit;">Revenu mensuel</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->revmensuel}}" type="number" name="revmensuel">
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
                        <font style="vertical-align: inherit;">Disposition de patrimoine </font>
                    </font>
                </label>
                <div class="col-md-10">
                    @if($data->patrimoine==1)
                    <div>
                        <input type="radio" id="Oui" name="patrimoine" value="1" checked>
                        <label for="Oui">Oui</label>
                    </div>

                    <div>
                        <input type="radio" id="non" name="patrimoine" value="0">
                        <label for="non">Non</label>
                    </div>
                    @else
                    <div>
                        <input type="radio" id="Oui" name="patrimoine" value="1" >
                        <label for="Oui">Oui</label>
                    </div>

                    <div>
                        <input type="radio" id="non" name="patrimoine" value="0" checked>
                        <label for="non">Non</label>
                    </div>
                    @endif

                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Estimation du patrimoine</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" type="number" value="{{ $data->estimationpatrimoine}}" name="estimationpatrimoine">
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
                        <font style="vertical-align: inherit;">Assurance Vie</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->assvie}}" type="number" name="assvie">
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
                        <font style="vertical-align: inherit;">Type de personne </font>
                    </font>
                </label>
                <div class="col-md-10">
                    @if($data->typedepersonne=="physique")
                    <div>
                        <input type="radio" id="typep" name="typedepersonne" value="physique" checked>
                        <label for="typep">Personne physique</label>
                    </div>

                    <div>
                        <input type="radio" id="typem" name="typedepersonne" value="morale">
                        <label for="typem">Personne morale</label>
                    </div>

                    @else
                    <div>
                        <input type="radio" id="typep" name="typedepersonne" value="physique" >
                        <label for="typep">Personne physique</label>
                    </div>

                    <div>
                        <input type="radio" id="typem" name="typedepersonne" value="morale" checked>
                        <label for="typem">Personne morale</label>
                    </div>

                    @endif


                </div>
            </div>
            @if($data->typedepersonne=="physique")
                <div id="suite" style="display: none">
            @else
            <div id="suite" >
            @endif

                <div class="form-group row">
                    <label class="col-form-label col-md-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Designation de la structure</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{ $data->designation}}" name="designation">
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
                            <font style="vertical-align: inherit;">Numero registre du commerce</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $data->nrc}}" type="text" name="nrc">
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
                            <font style="vertical-align: inherit;">Boite Postale</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" value="{{ $data->bp}}" type="text" name="bp">
                        <span class="form-te&xt text-muted">
                            {{-- <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">En utilisant</font>
                            </font><code>input type="tel"</code> --}}
                        </span>
                    </div>
                </div>

            </div>

            <div class="d-flex align-content-md-center">
                <button type="submit" class="btn btn-success btn-lg btn-block">Modification</button>
            </div>
        </form>


    </div>
    <!-- /.box-body -->


</div>
@section('script')

<script>
    var suite = document.getElementById("suite");
    var morale =document.getElementById("typem");
    var physique =document.getElementById("typep");

    morale.addEventListener("click", () => {suite.style.display = "block";});
    physique.addEventListener("click", () => {suite.style.display = "none";});
</script>
@endsection
@endsection
