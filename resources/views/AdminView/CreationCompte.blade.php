@extends('/AdminView/layout/layout')

@section('contents')
    <div class="box">

        <div class="box-header">
            <h4 class="box-title">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Creation de compte</font>
                </font>
            </h4>
        </div>
        <div class="box-body">
            <form action="{{ route('client.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label class="col-form-label col-md-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Numéro de Compte</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="numcompte" disabled="disabled">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nom</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="nom">
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
                        <input class="form-control" type="text" name="prenoms">
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
                        <input class="form-control" type="text" name="numcarte">
                        <span class="form-text text-muted">
                            {{-- <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">En utilisant</font>
                        </font><code>input type="tel"</code> --}}
                        </span>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-form-label col-md-2">Date de naissance</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" name="datedenaissance">
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
                        <input class="form-control" type="text" name="nationalite">
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
                        <input class="form-control" type="tel" name="telephone">
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
                        <input class="form-control" type="text" name="profession">
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
                        <input class="form-control" type="number" name="revmensuel">
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
                        <div>
                            <input type="radio" id="Oui" name="patrimoine" value="1"
                                   checked>
                            <label for="Oui">Oui</label>
                          </div>

                          <div>
                            <input type="radio" id="non" name="patrimoine" value="0">
                            <label for="non">Non</label>
                          </div>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-md-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Estimation du patrimoine</font>
                        </font>
                    </label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="estimationpatrimoine">
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
                        <input class="form-control" type="number" name="assvie">
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
                        <div>
                            <input type="radio" id="typep" name="typedepersonne" value="pysique"
                                   checked>
                            <label for="typep">Personne physique</label>
                          </div>

                          <div>
                            <input type="radio" id="typem" name="typedepersonne" value="moral">
                            <label for="typem">Personne moral</label>
                          </div>

                    </div>
                </div>

                <div id="suite">
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Designation de la structure</font>
                            </font>
                        </label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="designation">
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
                            <input class="form-control" type="text" name="nrc">
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
                            <input class="form-control" type="text" name="bp">
                            <span class="form-text text-muted">
                                {{-- <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">En utilisant</font>
                            </font><code>input type="tel"</code> --}}
                            </span>
                        </div>
                    </div>

                </div>
            </form>


        </div>
        <!-- /.box-body -->


    </div>
@endsection
