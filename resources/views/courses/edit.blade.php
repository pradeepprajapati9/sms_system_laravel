@extends('layout')
@section('content')
    <div class="card p-3">
        <div class="card-header">Update Records</div>
        <form action="{{ url('courses/' . $courses->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="text" name="course_name" id="id" value="{{ $courses->id }}" class="form-control"><br>
            <label for=""> Course Name</label><br>
            <input type="text" name="course_name" value="{{ $courses->course_name }}" id="course_name"
                class="form-control"><br>
            <label for=""> Course Duration</label><br>
            <input type="text" name="course_duration" id="course_duration" value="{{ $courses->course_duration }}"
                class="form-control"><br>
            <label for=""> Course Description</label><br>
            <input type="text" name="course_description" value="{{ $courses->course_description }}"
                id="course_description" class="form-control"><br>
            <label for=""> Course Price</label><br>
            <input type="text" name="course_price" value="{{ $courses->course_price }}" id="course_price"
                class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
@endsection
