@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Teacher Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Name:&nbsp;&nbsp;{{ $teachers->name }}</div>
                <div class="card-title">Address:&nbsp;&nbsp;{{ $teachers->address }}</div>
                <div class="card-title">Mobile:&nbsp;&nbsp;{{ $teachers->mobile }}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
