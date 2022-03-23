@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Liste du Personnel</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
          <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
            <thead>
                <tr>
                    <th>Num Matricule</th>
                    <th>Nom et prenoms </th>
                    <th>Télephone</th>
                    <th>Sexe</th>
                    <th>Nationalité</th>
                    <th>Date de Naissance</th>
                    <th>Poste</th>
                    <th>Niveau Etude</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($datas as $data )
                <tr>
                    <th>{{ $data->nummatricule }}</th>
                    <th>{{ $data->slug }}</th>
                    <td>{{ $data->tel }} </td>
                    <td>{{ $data->sexe }}</td>
                    <td>{{ $data->nationalite }}</td>
                    <td>{{ $data->datedenaissance }}</td>
                    <td>{{ $data->poste}}</td>
                    <td>{{ $data->nivetude}}</td>
                    <td>
                          <a class="btn btn-primary btn-sm" href="{{ route('personnel.edit',$data->id) }}">

                        Modification
                    </a>

                    <form action="{{ route('personnel.destroy',$data->id)}}" method="post">
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
