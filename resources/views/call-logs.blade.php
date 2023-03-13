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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><b>Call Logs</b></a></li>
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
                <h3 class="card-title">Calls List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-vcenter">
                    <thead>
                        <tr>
                            <th>sid</th>
                            <th>duration</th>
                            <th>start time</th>
                            <th>end time</th>
                            <th>from</th>
                            <th>to</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($calls as $call)
                        <tr>
                            <td> {{ $call->sid }} </td>
                            <td> {{ $call->duration }} </td>
                            <td> {{ $call->startTime->format('Y-m-d H:i:s') }} </td>
                            <td> {{ $call->endTime->format('Y-m-d H:i:s') }} </td>
                            <td> {{ $call->from }} </td>
                            <td> {{ $call->to }} </td>
                            <td> {{ $call->status}} </td>
                            <td><a href="{{ route('logs_detail', $call->sid) }}" class="btn btn-success">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
