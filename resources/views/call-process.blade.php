@extends('layouts/default')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-12">
        <div class="row">
            <div class="card text-center">
                <h2 class="mt-5">Call in Progress</h2>
                <div class="modal-body mx-auto">
                    <div class="btn-group-vertical  my-5" role="group" aria-label="Basic example">
                        <input id="phoneNumber" type="tel"></input>
                        <div class="btn-group btn-group-lg ">
                            <button type="button"
                                class="btn btn-outline-secondary border-bottom-0 rounded-0 btnNumber">1</button>
                            <button type="button" class="btn btn-outline-secondary border-bottom-0 btnNumber">2</button>
                            <button type="button"
                                class="btn btn-outline-secondary border-bottom-0 rounded-0 btnNumber">3</button>
                        </div>
                        <div class="btn-group btn-group-lg">
                            <button type="button"
                                class="btn btn-outline-secondary border-bottom-0 rounded-0 btnNumber">4</button>
                            <button type="button" class="btn btn-outline-secondary border-bottom-0 btnNumber">5</button>
                            <button type="button"
                                class="btn btn-outline-secondary border-bottom-0 rounded-0 btnNumber">6</button>
                        </div>
                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-outline-secondary rounded-0 btnNumber">7</button>
                            <button type="button" class="btn btn-outline-secondary btnNumber">8</button>
                            <button type="button" class="btn btn-outline-secondary rounded-0 btnNumber">9</button>
                        </div>
                        <div class="btn-group btn-group-lg">
                            <button type="button" class="btn btn-outline-secondary rounded-0 btnNumber">*</button>
                            <button type="button" class="btn btn-outline-secondary btnNumber">0</button>
                            <button type="button" class="btn btn-outline-secondary rounded-0 btnNumber"><span
                                    class="small">#</span></button>
                        </div>
                        <div class="btn-group btn-group-lg">
                            <button id="btnDial" type="button" class="btn btn-outline-secondary rounded-0">
                                <i class="fa fa-phone-square fa-flip-horizontal  fa-2x" style="color: green;"
                                    aria-hidden="true"></i> </button>
                            <button type="button" class="btn btn-outline-secondary btnNumber">+</button>
                            <button id="btnDelete" type="button" class="btn btn-outline-secondary rounded-0">
                                <i class="fa fa-backspace fa-1x" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn btn-default btn-circle btnHangUp">
                        <i class="fa fa-phone fa-1x fa-rotate-icon" aria-hidden="true" style="color: red;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
