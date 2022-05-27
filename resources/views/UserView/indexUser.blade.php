@extends('/UserView/layout/index')

@section('contents')
<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Bienvenue!</h5>
                            <p>Mida microfinance</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="avatar-md profile-user-wid mb-4">
                            @if($user->sexe=="masculin")
                            <img src="{{asset('avatar2.png')}}" alt="" class="img-thumbnail rounded-circle">
                            @else
                            <img src="{{asset('avatar1.png')}}" alt="" class="img-thumbnail rounded-circle">

                            @endif
                        </div>
                        <h5 class="font-size-15 text-truncate">{{$user->slug}}</h5>
                        <p class="text-muted mb-0 text-truncate">{{$user->profession}}</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">

        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Solde</p>
                                <h4 class="mb-0">{{$compte->solde}} CFA</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-copy-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Num de compte</p>
                                <h4 class="mb-0">{{$compte->numcompte}}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-archive-in font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Solde de credit</p>
                                <h4 class="mb-0">0 CFA</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

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
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Type de transaction</th>
                                <th class="align-middle">Montant</th>

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
                                    <td>{{$data->date}}</td>
                                    <td>{{$data->montant}}</td>
                                    @if ($data->type=="depot")
                                    <td>
                                        <span class="badge badge-pill badge-soft-success font-size-11">depot</span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-pill badge-soft-danger font-size-11">Retrait</span>
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
</div>
@endsection

@section('titre')
Mon compte
@endsection
