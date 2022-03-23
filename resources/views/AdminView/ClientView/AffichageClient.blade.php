@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Liste des Clients</h3>
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
                    <th>Télephone</th>
                    <th>nCNI</th>
                    <th>Profession</th>
                    <th>Type De Personne</th>
                    <th>Designation de la Structure</th>
                    <th>Solde</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data )
                <tr>
                    <th>{{ $data->codeclient }}</th>
                    <th>{{ $data->numcompte }}</th>
                    <td>{{ $data->slug }} </td>
                    <td>{{ $data->telephone }}</td>
                    <td>{{ $data->numcarte }}</td>
                    <td>{{ $data->profession }}</td>
                    <td>{{ $data->typedepersonne }}</td>
                    <td>{{ $data->designation }}</td>
                    <th>{{ $data->solde.' CFA'}}</th>
                    <td>
                          <a class="btn btn-primary btn-sm" href="{{ route('client.edit',$data->id) }}">

                        Modification
                    </a>

                    <form action="{{ route('client.destroy',$data->id)}}" method="post">
                        @csrf
                    <button class="btn btn-danger btn-sm" type="submit"  onclick="return confirm('Voulez vous vraiment supprimer ?')">

                        Suppression
                    </button>
                </form>
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
