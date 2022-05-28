@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Gestion des remboursement</h3>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Code credit</th>
                    <th>Client nom et prenoms</th>
                    <th>montant</th>
                    <th>interet </th>
                    <th>solde </th>
                    <th>reste a payer</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data )
                <tr>
                    <th>{{ $data->codecredit }}</th>
                    <th>{{ $data->client }}</th>
                    <td>{{ $data->montant }} </td>
                    <td>{{ $data->interet }}</td>
                    <td>{{ $data->solde }}</td>
                    <td>{{ $data->solde_credit }}</td>
                    <td>
                          <a class="btn btn-primary btn-sm" href="{{ route('remboursement.add',$data->id) }}">

                       Transaction
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
