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
                    <div class="fx-card-avatar fx-overlay-1"> <img src="{{Asset("AdminAssets/images/fina.jpg")}}" alt="logo">

                    </div>
                    <div class="fx-card-content">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4>Nom  et Prénoms  :  {{ $slug }}</h4>
                            </li>

                            <li class="list-group-item">
                                <h4>NumCompte :  {{ $numCompte }}</h4>
                            </li>
                            <li class="list-group-item">
                                <h4>Solde : </h4> <h4 class="text-danger">{{ $solde }}</h4>
                            </li>
                          </ul>
                           </div>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Date de la transaction</th>
                          <th>type</th>
                          <th>Montant</th>

                      </tr>
                  </thead>
                  <tbody>
                      @foreach($datas as $data )
                      <tr>
                          <th>{{ $data->id }}</th>
                          <th>{{ $data->date }}</th>

                          @if($data->type=="depot")
                          <th><span class="badge-xl badge-success">{{ $data->type }}</span></th>
                          <td class="text-dark">{{ $data->montant }} </td>
                          @else
                          <th><span class="badge-xl badge-danger">{{ $data->type }}</span></th>
                          <td class="text-dark">{{ $data->montant }} </td>
                          @endif


                      @endforeach


                  </tbody>

              </table>
              </div>
          </div>

      </div>
</div>
</div>
@section('script')
<script src={{Asset("AdminAssets/assets/vendor_components/datatable/datatables.min.js")}}></script>
{{-- <script src="{{Asset("AdminAssets/main/js/pages/data-table.js")}}"></script> --}}
<script>
    $(function () {

      $('#example').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
@endsection
