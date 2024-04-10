@extends('layout')
@section('content')
    <div class="card p-3">
        <div class="card-header">Update Records</div>
        <form action="{{ url('batches/' . $batches->id) }}" method="POST">
            {!! csrf_field() !!}
            @method('PATCH')
            <input type="text" name="course_name" id="id" value="{{ $batches->id }}" class="form-control"><br>
            <label for=""> Batch Name</label><br>
            <input type="text" name="batch_name" value="{{ $batches->batch_name }}" id="course_name"
                class="form-control"><br>
            <label for=""> Course </label><br>
            <input type="text" name="course" id="course" value="{{ $batches->course }}"
                class="form-control"><br>
            <label for=""> Start Date</label><br>
            <input type="text" name="start_date" value="{{ $batches->start_date }}"
                id="start_date" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
@endsection
