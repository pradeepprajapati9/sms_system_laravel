@extends('layout')
@section('content')
    <div class="card p-3">
        <div class="card-header">Update Records</div>
        <form action="{{ url('payments/' . $payments->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="text" name="name" id="id" value="{{ $payments->id }}" class="form-control"><br>
            <label for=""> Enrollment No</label><br>
            <input type="text" name="enroll_no" id="id" value="{{ $payments->enroll_no }}" class="form-control"><br>
            <label for=""> 	Course</label><br>
            <input type="text" name="course" value="{{ $payments->course }}" id="course"
                class="form-control"><br>
            <label for=""> Student Name </label><br>
            <input type="text" name="student_name" id="student_name" value="{{ $payments->student_name }}"
                class="form-control"><br>
            <label for="">Paid</label><br>
            <input type="text" name="amount" value="{{ $payments->amount }}" id="amount" class="form-control"><br>
            <label for=""> Fees</label><br>
            <input type="text" name="fees" value="{{ $payments->fees }}" id="fees" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
@endsection
