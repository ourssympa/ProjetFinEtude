@extends('/UserView/layout/index')

@section('contents')
<div class="row">


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
                            <th class="align-middle">Motifs</th>
                            <th class="align-middle">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($datas as $data)
                        <tr>
                            <td>
                                <div class="form-check font-size-16">
                                    <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                    <label class="form-check-label" for="transactionCheck02"></label>
                                </div>

                               <td>{{$data->codecredit}}</td>
                               <td>{{$data->montant}}</td>

                               <td>
                                <span >{{$data->status}}</span>
                                </td>

                                <td>
                                    <span class="">{{$data->motifs}}</span>
                                </td>

                               @if($data->status=="accepté" || $data->status=="soldé" )
                               <td>
                                <a href="{{route('credit.voir',$data->id)}}" class="btn btn-danger">Voir +</a>
                                </td>
                               @endif


                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('titre')
Historique de vos credit
@endsection
