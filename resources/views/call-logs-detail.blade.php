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
                        <li class="breadcrumb-item"><a href="#"><b>Call Logs</b></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"><b>Call Logs Detail</b></a>
                        </li>
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
                <div class="col-12">
                    <div class="card-body">
                        <h3 class="card-title">Calls Detail</h3>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">SID</label>
                            <div class="col-9">
                                <input type="sid" class="form-control" name="sid" value="{{ $calls->sid }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Date Created</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="dateCreated"
                                    value="{{ $calls->dateCreated->format('Y-m-d H:i:s') }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Date Updated</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="dateUpdated"
                                    value="{{ $calls->dateUpdated->format('Y-m-d H:i:s') }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">From</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="from" value="{{ $calls->from}}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">To</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="to" value="{{ $calls->to }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Status</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="status" value="{{ $calls->status }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Start Time</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="startTime"
                                    value="{{ $calls->startTime->format('Y-m-d H:i:s') }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">End Time</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="endTime"
                                    value="{{ $calls->endTime->format('Y-m-d H:i:s') }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Duration</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="duration" value="{{ $calls->duration }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Feedback</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="feedback"
                                    value="{{ $calls->subresourceUris['feedback'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">User Defined Messages</label>
                            <div class="col-3">
                                <input type="text" class="form-control" name="user_defined_messages"
                                    value="{{ $calls->subresourceUris['user_defined_messages'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Notifications</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="notifications"
                                    value="{{ $calls->subresourceUris['notifications'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Recordings</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="recordings"
                                    value="{{ $calls->subresourceUris['recordings'] }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label">Streams</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="streams"
                                    value="{{ $calls->subresourceUris['streams'] }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
