@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    <div class="box-header">
        <h4 class="box-title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Gestion compte credit</font>
            </font>
        </h4>
    </div>
    <div class="box-body">
        <form action="{{ route('remboursement.store') }}" method="post" id="form">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nom et Prénoms du client :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->client }}" type="text">

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
                        <font style="vertical-align: inherit;">solde</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->solde}}" type="text" >
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">reste a remboursé :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->solde_credit}}" type="number">
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
                        <font style="vertical-align: inherit;">Type d'operation :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <select class="form-select form-select-lg" aria-label=".form-select-sm example" name="type" >
                        <option value="depot">remboursement de credit</option>
                        <option value="retrait">Retrait sur compte credit</option>
                      </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Montant :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" type="text" name="montant" >
                </div>
            </div>

            <div class="d-flex align-content-md-center">
                <button id="btn" type="submit" class="btn btn-primary btn-lg btn-block">Transaction</button>
            </div>
        </form>


    </div>
    <!-- /.box-body -->


</div>
@endsection
