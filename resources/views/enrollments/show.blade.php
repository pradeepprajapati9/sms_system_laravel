@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Enrollments  Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Enrollment No:&nbsp;&nbsp;{{ $enrollments->enroll_no }}</div>
                <div class="card-title">Course :&nbsp;&nbsp;{{ $enrollments->course }}</div>
                <div class="card-title">Student Name:&nbsp;&nbsp;{{ $enrollments->student_name}}</div>
                <div class="card-title"> Join Date:&nbsp;&nbsp;{{ $enrollments->join_date}}</div>
                <div class="card-title"> Fees :&nbsp;&nbsp;{{ $enrollments->fees}}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
