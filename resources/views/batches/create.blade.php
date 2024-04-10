@extends("layout");
@section('content')
 <div class="card">
    <div class="card-header">Batch Page</div>
    <div class="card-body">
        <form action="{{url('batches')}}" method="post">
            {!!csrf_field() !!}
            <label for=""> Batch Name</label><br>
            <input type="text" name="batch_name" id="batch_name" class="form-control"><br>
            <label for=""> Course </label><br>
            <input type="text" name="course" id="course" class="form-control"><br>
            <label for=""> Start Date</label><br>
            <input type="text" name="start_date" id="start_date" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"> <br>
        </form>
    </div>
</div>    
@endsection