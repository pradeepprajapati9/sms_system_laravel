@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Course Page</div>
        <div class="card-body">
            <h6>
            <div class="card-body">
                <div class="card-title">Course Name :&nbsp;&nbsp;{{ $courses->course_name }}</div>
                <div class="card-title">Course Duration:&nbsp;&nbsp;{{ $courses->course_duration }}</div>
                <div class="card-title">Course Description:&nbsp;&nbsp;{{ $courses->course_description }}</div>
                <div class="card-title">Course Price:&nbsp;&nbsp;{{ $courses->course_price }}</div>
            </div>
            </h6>
        </div>
        <hr>
    </div>
@endsection
