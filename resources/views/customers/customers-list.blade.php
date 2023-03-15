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
<div class="container my-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Customers List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Product</th>
                            <th>Area</th>
                            <th>City</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Source</th>
                            <th>Caller</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td> {{ $customer->name }} </td>
                            <td> Multiguna </td>
                            <td> {{ $customer->province }} </td>
                            <td> {{ $customer->acc_branch }} </td>
                            <td> {{ $customer->brand }} </td>
                            <td> {{ $customer->type }} </td>
                            <td> Digital </td>
                            <td> {{ $customer->caller}} </td>
                            <td>
                            @if (Auth::check())
                                @if ($customer->caller != Auth::user()->name)
                                <a href="{{ route('customers_detail', $customer->id) }}"
                                    class="btn btn-secondary disabled" disabled>Detail</a>
                                @else
                                <a href="{{ route('customers_detail', $customer->id) }}"
                                    class="btn btn-primary">Detail</a>
                                @endif
                            @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--<div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span>
                    entries</p>
                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 6l-6 6l6 6" /></svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            next
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" /></svg>
                        </a>
                    </li>
                </ul>
            </div>-->
        </div>
    </div>
</div>

@endsection
