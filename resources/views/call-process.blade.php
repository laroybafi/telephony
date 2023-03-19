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
                        <img src="./static/landing-assets/user.png" alt="">
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer mx-auto">
                    <button href="#" class="btn btn-danger btn-icon" aria-label="Button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-off"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l18 -18"></path>
                            <path
                                d="M5.831 14.161a15.946 15.946 0 0 1 -2.831 -8.161a2 2 0 0 1 2 -2h4l2 5l-2.5 1.5c.108 .22 .223 .435 .345 .645m1.751 2.277c.843 .84 1.822 1.544 2.904 2.078l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a15.963 15.963 0 0 1 -10.344 -4.657">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
