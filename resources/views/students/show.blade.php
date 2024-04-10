@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Student Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Name:&nbsp;&nbsp;{{ $students->name }}</div>
                <div class="card-title">Address:&nbsp;&nbsp;{{ $students->address }}</div>
                <div class="card-title">Mobile:&nbsp;&nbsp;{{ $students->mobile }}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
