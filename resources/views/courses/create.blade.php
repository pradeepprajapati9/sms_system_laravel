@extends("layout");
@section('content')
 <div class="card">
    <div class="card-header">Course Page</div>
    <div class="card-body">
        <form action="{{url('courses')}}" method="post">
            {!!csrf_field() !!}
            <label for=""> Course Name</label><br>
            <input type="text" name="course_name" id="course_name" class="form-control"><br>
            <label for=""> Course Duration</label><br>
            <input type="text" name="course_duration" id="course_duration" class="form-control"><br>
            <label for=""> Course Description</label><br>
            <textarea class="form-control" id="course_description" rows="3"></textarea><br>
            <label for=""> Course Price</label><br>
            <input type="text" name="course_price" id="course_price" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"> <br>
        </form>
    </div>
</div>    
@endsection