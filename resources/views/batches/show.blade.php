@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Batech Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Batch Name :&nbsp;&nbsp;{{ $batches->batch_name }}</div>
                <div class="card-title">Course :&nbsp;&nbsp;{{ $batches->course }}</div>
                <div class="card-title">Start Date:&nbsp;&nbsp;{{ $batches->start_date }}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
