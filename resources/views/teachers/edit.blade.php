@extends('layout')
@section('content')
    <div class="card p-3">
        <div class="card-header">Update Records</div>
        <form action="{{ url('teachers/' . $teachers->id) }}" method="POST">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="text" name="name" id="id" value="{{$teachers->id}}" class="form-control"><br>
            <label for=""> Name</label><br>
            <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"><br>
            <label for=""> Address</label><br>
            <input type="text" name="address" value="{{$teachers->address}}" id="address" class="form-control"><br>
            <label for=""> Mobile</label><br>
            <input type="text" name="mobile" value="{{$teachers->mobile}}" id="mobile" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success btn-sm">
        </form>
    </div>
@endsection
