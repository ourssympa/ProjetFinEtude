@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Faire une Transaction</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Code Client</th>
                    <th>Num Compte</th>
                    <th>Nom et prenoms </th>
                    <th>Type De Personne</th>
                    <th>Designation de la Structure</th>
                    <th>Solde</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data )
                <tr>
                    <th>{{ $data->codeclient }}</th>
                    <th>{{ $data->numcompte }}</th>
                    <td>{{ $data->slug }} </td>
                    <td>{{ $data->typedepersonne }}</td>
                    <td>{{ $data->designation }}</td>
                    <th>{{ $data->solde.' CFA'}}</th>
                    <td>
                          <a class="btn btn-danger btn-sm" href="{{ route('transaction.add',$data->id) }}">

                       Transaction
                    </a>
                    
                    <a class="btn btn-success btn-sm" href="{{ route('transaction.historique',$data->id) }}">

                      Historique
                    </a>
                    </td>
                </tr>
                @endforeach


            </tbody>

        </table>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
    @section('script')
<script src={{Asset("AdminAssets/assets/vendor_components/datatable/datatables.min.js")}}></script>
<script src="{{Asset("AdminAssets/main/js/pages/data-table.js")}}"></script>
@endsection
@endsection
