@extends('/AdminView/layout/layout')

@section('contents')
    <div class="box">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="box">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1"> <img src="{{ Asset('AdminAssets/images/fina.jpg') }}"
                                    alt="logo">
                                    <h3><b>Decision</b></h3><br>
                                    <form action="{{ route('credit.choix', $credit->id) }}" method="POST">
                                        @csrf
                                        <label class="text-bold text-md">Votre décision :</label>

                                        <select name="status" class="form-control">
                                            <option value="accepté">accepté</option>
                                            <option value="refus">refus</option>
                                        </select>
                                        <label class="text-bold text-md">Les motifs de votre décision :</label>

                                        <textarea name="motifs" cols="30" rows="5" class=" form-control"></textarea>
                                        <button type="submit" class="btn btn-md btn-primary">Soumettre votre decision</button>
                                    </form>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="table-responsive">
                        <h3><b>Les informations sur le credit</b></h3><br><br>
                        <h3><b>Client</b></h3><br>
                        <ul class="list-group">
                            <li class="list-group-item">Nom et Prenoms du client : <b>{{ $client->slug }}</b></li>
                            <li class="list-group-item">Solde actuel : <b>{{ $client->solde }}</b></li>
                            <li class="list-group-item">Revenue mensuel : <b>{{ $client->revmensuel }}</b></li>
                            <li class="list-group-item">Patrimoine : <b>{{ $client->estimationpatrimoine }}</b></li>
                            <li class="list-group-item">Assurance Vie : <b>{{ $client->assvie }}</b></li>
                        </ul>
                        <h3><b>Demande</b></h3><br>
                        <ul class="list-group">
                            <li class="list-group-item">Montant demandé : <b>{{ $credit->montant }}</b></li>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
