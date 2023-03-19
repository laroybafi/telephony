@extends('layouts/default')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    <ol class="breadcrumb" aria-label="breadcrumbs">
                        <li class="breadcrumb-item"><a href="#"><b>Home</b></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><b>Call</b></a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-lg-7">
                    <div class="row row-cards">
                        <div class="col-12">
                            <form class="card" action="{{ route('customers_update_profile', $customer->id)}}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h3 class="card-title">Detail Profile</h3>
                                    <div class="row row-cards">
                                        <div class="col">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Nama</label>
                                                <div class="col">
                                                    <input type="name" class="form-control" name="name"
                                                        value="{{ $customer->name }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">No. Pelanggan</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="customer_no"
                                                        value="{{ $customer->customer_no }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Pekerjaan</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="occupation"
                                                        value="{{ $customer->occupation }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Pendidikan</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="education"
                                                        value="{{ $customer->education }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Gender</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="gender"
                                                        value="{{ $customer-> gender}}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Status</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="status"
                                                        value="{{ $customer->status }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Tgl Lahir</label>
                                                <div class="col">
                                                    <input type="date" class="form-control" name="birth_date"
                                                        value="{{ $customer->birth_date }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Alamat</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="address"
                                                        value="{{ $customer->address }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">No.Kontrak</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="contract_no"
                                                        value="{{ $customer->contract_no }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Area</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="province"
                                                        value="{{ $customer->province }}">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-4 col-form-label">Branch</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="acc_branch"
                                                        value="{{ $customer->acc_branch }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <input type="submit" value="Update Profile" class="btn btn-primary"></input>
                                </div>
                            </form>
                        </div>
                        <div class="col-12">
                            <form class="card" action="{{ route('customers_update_simulasi', $customer->id)}}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <h3 class="card-title">Simulasi</h3>
                                    <div class="row row-cards">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label">Pencairan</label>
                                                <input type="text" class="form-control" name="Pencairan"
                                                    value="{{ $customer->pencairan }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Angsuran</label>
                                                <input type="text" class="form-control" name="angsuran"
                                                    value="{{ $customer->angsuran }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Paket</label>
                                                <input type="text" class="form-control" name="paket"
                                                    value="{{ $customer->paket }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Brand</label>
                                                <input type="text" class="form-control" name="brand"
                                                    value="{{ $customer->brand }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control" name="model"
                                                    value="{{ $customer->model }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">OTR</label>
                                                <input type="text" class="form-control" name="otr"
                                                    value="{{ $customer->otr }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">DP Percent</label>
                                                <input type="text" class="form-control" name="dp_percent"
                                                    value="{{ $customer->dp_percent }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tenor</label>
                                                <input type="text" class="form-control" name="tenor"
                                                    value="{{ $customer->tenor }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">AR</label>
                                                <input type="text" class="form-control" name="ar"
                                                    value="{{ $customer->ar }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Cash</label>
                                                <input type="text" class="form-control" name="cash"
                                                    value="{{ $customer->cash }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Biaya TJH</label>
                                                <input type="text" class="form-control" name="tjh_price"
                                                    value="{{ $customer->tjh_price }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">ACP</label>
                                                <input type="text" class="form-control" name="acp"
                                                    value="{{ $customer->acp }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Bunga Flat</label>
                                                <input type="text" class="form-control" name="flat_interest"
                                                    value="{{ $customer->flat_interest }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">TDP</label>
                                                <input type="text" class="form-control" name="tdp"
                                                    value="{{ $customer->tdp }}">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3 mt-4">
                                                <button type="submit" class="btn btn-secondary">Generate PDF</button>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">ADDM/ADDB</label>
                                                <input type="text" class="form-control" name="addm_addb"
                                                    value="{{ $customer->addm_addb }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Branch</label>
                                                <input type="text" class="form-control" name="acc_branch"
                                                    value="{{ $customer->acc_branch }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Type</label>
                                                <input type="text" class="form-control" name="type"
                                                    value="{{ $customer->type }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Year</label>
                                                <input type="text" class="form-control" name="year"
                                                    value="{{ $customer->year }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">DP</label>
                                                <input type="text" class="form-control" name="dp"
                                                    value="{{ $customer->dp }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Insurance</label>
                                                <input type="text" class="form-control" name="insurance"
                                                    value="{{ $customer->insurance }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">TLO</label>
                                                <input type="text" class="form-control" name="tlo"
                                                    value="{{ $customer->tlo }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Credit</label>
                                                <input type="text" class="form-control" name="credit"
                                                    value="{{ $customer->credit }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Bunga Efektif</label>
                                                <input type="text" class="form-control" name="efective_interest"
                                                    value="{{ $customer->efective_interest }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">ATMT ACP</label>
                                                <input type="text" class="form-control" name="atm_acp"
                                                    value="{{ $customer->atm_acp }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-secondary">Count</button>
                                    <input type="submit" value="Submit" class="btn btn-primary"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Call Result</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('initiate_call', $customer->id) }}">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label" for="phone_number">Phone Number</label>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="phone_number_masked"
                                            id="phone_number_masked" aria-describedby="phoneHelp"
                                            value="{{$customer->phone_number_masked}}" disabled>
                                    </div>
                                    <div class="col-4" style="display:none;">
                                        <input type="text" class="form-control" name="phone_number" id="phone_number"
                                            aria-describedby="phoneHelp" value="{{$customer->phone_number}}" disabled>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-success"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-phone" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                </path>
                                            </svg>Call</button>
                                    </div>
                                </div>
                            </form>
                            @if (isset($success) && $success)
                            <div class="modal show" style="display:block" id="exampleModal" tabindex="-1">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <a href="{{ route('customers_detail', $customer->id) }}" type="button"
                                            class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                                        <div class="modal-status bg-success">

                                        </div>
                                        <div class="text-center">
                                            <h1 class="mt-5 text-center">Call in Progress</h1>
                                            <label id="minutes">00</label>:<label id="seconds">00</label>
                                        </div>
                                        <div class="modal-body mx-auto mb-4">
                                            <div class="btn-group-vertical" role="group" aria-label="Basic example">

                                                <img src="{{ asset('static/landing-assets/user.png') }}" alt="">
                                            </div>
                                        </div>
                                        <!-- Modal Footer -->
                                        <div class="modal-footer mx-auto mb-5">
                                        <a type="button" href="{{ route('customers_detail', $customer->id) }}" class="btn btn-danger btn-icon"
                                                    aria-label="Button">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-phone-off" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 21l18 -18"></path>
                                                        <path d="M5.831 14.161a15.946 15.946 0 0 1 -2.831 -8.161a2 2 0 0 1 2 
                                                            -2h4l2 5l-2.5 1.5c.108 .22 .223 .435 .345 .645m1.751 2.277c.843 
                                                            .84 1.822 1.544 2.904 2.078l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a15.963 
                                                            15.963 0 0 1 -10.344 -4.657">
                                                        </path>
                                                    </svg>
                                                </a>
                                           <!-- <form class="card" action="{{ route('terminate_call', $call->sid) }}"
                                                method="post">
                                                <button type="submit" class="btn btn-danger btn-icon"
                                                    aria-label="Button">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-phone-off" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M3 21l18 -18"></path>
                                                        <path d="M5.831 14.161a15.946 15.946 0 0 1 -2.831 -8.161a2 2 0 0 1 2 
                                                            -2h4l2 5l-2.5 1.5c.108 .22 .223 .435 .345 .645m1.751 2.277c.843 
                                                            .84 1.822 1.544 2.904 2.078l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a15.963 
                                                            15.963 0 0 1 -10.344 -4.657">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <form class="" action="{{ route('customers_update_call_result', $customer->id)}}"
                                method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3 row" style="display:block;">
                                    <label class="col-3 col-form-label">Call Result 1</label>
                                    <div class="col">
                                        <select class="form-select" name="call_result_1" id="callResult1-dropdown"
                                            value="{{ $customer->call_result_1}}">
                                            <option value="Connected">Connected</option>
                                            <option value="Unconnected">Unconnected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row" style="display:none;" id="call_result_selection2">
                                    <label class="col-3 col-form-label">Call Result 2</label>
                                    <div class="col">
                                        <select class="form-select" name="call_result_2" id="callResult2-dropdown"
                                            value="{{ $customer->call_result_2}}">

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row" style="display:none;" id="call_result_selection3">
                                    <label class="col-3 col-form-label">Call Result 3</label>
                                    <div class="col">
                                        <select class="form-select" name="call_result_3" id="callResult3-dropdown"
                                            value="{{ $customer->call_result_3}}">

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row" style="display:none;" id="call_result_selection4">
                                    <label class="col-3 col-form-label">Call Result 4</label>
                                    <div class="col">
                                        <select class="form-select" name="call_result_4" id="callResult4-dropdown"
                                            value="{{ $customer->call_result_3}}">

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3" style="display:block;">
                                    <label class="col-3 col-form-label">Product</label>
                                    <div class="col">
                                        <input type="text" class="form-control" name="product"
                                            value="{{ $customer-> product}}">
                                    </div>
                                </div>
                                <div class="row mb-3" style="display:block;">
                                    <label class="col-3 col-form-label">Notes</label>
                                    <div class="col">
                                        <textarea class="form-control" name="notes"
                                            value="{{ $customer->notes }}"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-3 col-form-label pt-0">Blacklist</label>
                                    <div class="col">
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" checked>
                                            <span class="form-check-label"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3 row" style="display:none;" id="call_result_selection2">
                                    <label class="col-3 col-form-label">Caller</label>
                                    <div class="col">
                                        @if (Auth::check())
                                        <input type="text" class="form-control" name="caller" id="caller"
                                            value="{{ Auth::user()->name }}">
                                        @endif
                                        </input>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer text-end">
                            <input type="submit" value="Submit" class="btn btn-primary"></input>
                            <!--<button type="submit" class="btn btn-primary">Submit & Next</button>
                            <button type="submit" class="btn btn-secondary">Reset</button>-->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
