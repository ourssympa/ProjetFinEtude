@extends('/AdminView/layout/layout')

@section('contents')
<div class="box">
       <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Nom et prénoms du client</th>
                          <th>Date de la transaction</th>
                          <th>type</th>
                          <th>Montant</th>
                          

                      </tr>
                  </thead>
                  <tbody>
                      @foreach($datas as $data )
                      <tr>
                          <th>{{ $data->id }}</th>
                          <th>{{ $data->client }}</th>
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