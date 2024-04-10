@extends("layout");
@section('content')
 <div class="card">
    <div class="card-header">Enrollments Page</div>
    <div class="card-body">
        <form action="{{url('enrollments')}}" method="post">
            {!!csrf_field() !!}
            <label for=""> Enrollment No</label><br>
            <input type="text" name="enroll_no" id="enroll_no" class="form-control"><br>
            <label for=""> Course</label><br>
            <input type="text" name="course" id="course" class="form-control"><br>
            <label for=""> Student Name </label><br>
            <input type="text" name="student_name" id="student_name" class="form-control"><br>
            <label for=""> Join Date</label><br>
            <input type="text" name="join_date" id="join_date" class="form-control"><br>
            <label for=""> Fees</label><br>
            <input type="text" name="fees" id="fees" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"> <br>
        </form>
    </div>
</div>    
@endsection