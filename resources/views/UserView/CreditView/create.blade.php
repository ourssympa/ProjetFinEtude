@extends('/UserView/layout/index')

@section('contents')
<div class="row">

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
    <div class="col-9">
        <div class="card">
            <form action="{{route('credit.store')}}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Code Credit:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$code}}"
                            name="codecredit">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Nom :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$client->nom}}"
                            id="example-text-input">
                    </div>
                </div>
                 <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Prenom :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$client->prenoms}}"
                            id="example-text-input">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Solde</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="{{$client->solde}}"
                            id="example-text-input">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Montant souhaiter :</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number"
                            name="montant">
                    </div>
                </div>
                @if (!$data)
                <button type="submit" class="btn btn-primary btn-lg">Soumettre ma demande de pret</button>
                @else
                <button type="submit" class="btn btn-primary btn-lg" disabled>Soumettre ma demande de pret</button>
                @endif
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-nowrap mb-0">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 20px;">
                                <div class="form-check font-size-16 align-middle">
                                    <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                    <label class="form-check-label" for="transactionCheck01"></label>
                                </div>
                            </th>
                            <th class="align-middle">Code du credit</th>
                            <th class="align-middle">Montant</th>
                            <th class="align-middle">Status</th>
                            <th class="align-middle">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                    <label class="form-check-label" for="transactionCheck02"></label>
                                </div>
                               @if ($data)
                               <td>{{$data->codecredit}}</td>
                               <td>{{$data->montant}}</td>

                               <td>
                                   <span class="btn btn-primary">{{$data->status}}</span>
                               </td>
                               <td>
                                   <a href="" class="btn btn-danger">Annuler le pret</a>
                               </td>
                               @endif


                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('titre')
votre Demande de pret ici
@endsection
