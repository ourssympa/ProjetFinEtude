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
                <font style="vertical-align: inherit;">Faire une Transaction</font>
            </font>
        </h4>
    </div>
    <div class="box-body">
        <form action="{{ route('transaction.store') }}" method="post" id="form">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="form-group row">
                <label class="col-form-label col-md-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nom et Prénoms du client :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="{{ $data->slug }}" type="text" name="slug">

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
                        <font style="vertical-align: inherit;">Montant :</font>
                    </font>
                </label>
                <div class="col-md-10">
                    <input class="form-control" value="" type="number" name="montant">
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
                        <option value="depot">Depot</option>
                        <option value="retrait">Retrait</option>
                      </select>
                </div>
            </div>



            <div class="d-flex align-content-md-center">
                <button id="btn" type="submit" class="btn btn-success btn-lg btn-block">Transaction</button>
            </div>
        </form>


    </div>
    <!-- /.box-body -->


</div>
@endsection
