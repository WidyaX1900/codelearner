@extends('admin.header')
@section('title', 'Dashboard')
@section('content')
<div class="row mx-3 my-3">
    <div class="col-4 px-3">
        <div class="rounded bg-blue p-3 text-light">
            <small class="fw-bold">
                <i class="fa-solid fa-newspaper fs-5 me-2"></i>
                Posts
            </small>
            <div class="text-end fw-bold fs-1 me-2">40</div>
        </div>
    </div>
    <div class="col-4 px-3">
        <div class="rounded bg-green p-3 text-light">
            <small class="fw-bold">
                <i class="fa-solid fa-user fs-5 me-2"></i>
                Subscribers
            </small>
            <div class="text-end fw-bold fs-1 me-2">40</div>
        </div>
    </div>
    <div class="col-4 px-3">
        <div class="rounded bg-danger p-3 text-light">
            <small class="fw-bold">
                <i class="fa-solid fa-comment fs-5 me-2"></i>
                Comments
            </small>
            <div class="text-end fw-bold fs-1 me-2">40</div>
        </div>
    </div>
</div>
@endsection