@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">payments  Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Enrollment No:&nbsp;&nbsp;{{ $payments->enroll_no }}</div>
                <div class="card-title">Course :&nbsp;&nbsp;{{ $payments->course }}</div>
                <div class="card-title">Student Name:&nbsp;&nbsp;{{ $payments->student_name}}</div>
                <div class="card-title">Paid:&nbsp;&nbsp;{{ $payments->amount}}</div>
                <div class="card-title"> Total Fees :&nbsp;&nbsp;{{ $payments->fees}}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
