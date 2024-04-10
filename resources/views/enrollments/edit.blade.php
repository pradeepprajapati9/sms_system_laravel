@extends('layout')
@section('content')
    <div class="card p-3">
        <div class="card-header">Update Records</div>
        <form action="{{ url('enrollments/' . $enrollments->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="text" name="name" id="id" value="{{ $enrollments->id }}" class="form-control"><br>
            <label for=""> Enrollment No</label><br>
            <input type="text" name="enroll_no" id="id" value="{{ $enrollments->enroll_no }}" class="form-control"><br>
            <label for=""> 	Course</label><br>
            <input type="text" name="course" value="{{ $enrollments->course }}" id="course"
                class="form-control"><br>
            <label for=""> Student Name </label><br>
            <input type="text" name="student_name" id="student_name" value="{{ $enrollments->student_name }}"
                class="form-control"><br>
            <label for=""> Join Date</label><br>
            <input type="text" name="join_date" value="{{ $enrollments->join_date }}" id="join_date" class="form-control"><br>
            <label for=""> 	Fees</label><br>
            <input type="text" name="fees" value="{{ $enrollments->fees }}" id="fees" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
@endsection
