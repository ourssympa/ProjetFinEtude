@extends('/AdminView/layout/layout')

@section('contents')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Liste des demandes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                    <thead>
                        <tr>
                            <th>Code Credit</th>
                            <th>Client</th>
                            <th>Montant </th>
                            <th>demande du </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <th>{{ $data->codecredit }}</th>
                                <th>{{ $data->client }}</th>
                                <th>{{ $data->montant }}</th>
                                <td>{{ $data->created_at }} </td>
                                <td> <span class="btn btn-success">{{ $data->status }}</span> </td>
                                <td>
                                    <a class="btn btn-primary btn-md" href="{{ route('credit.show', $data->id) }}">

                                        Voir
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
    <script src={{ Asset('AdminAssets/assets/vendor_components/datatable/datatables.min.js') }}></script>
    <script src="{{ Asset('AdminAssets/main/js/pages/data-table.js') }}"></script>
@endsection
@endsection
