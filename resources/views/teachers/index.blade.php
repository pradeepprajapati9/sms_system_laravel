@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                <i class="fa fa-plus " aria-hidden="true"></i>
                Add New
            </a>
            <br> <br>
            <table class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>
                                    <a href="{{ url('/teachers/' . $item->id.'show/') }}" title="View Student">
                                        <button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye " aria-hidden="true"></i>
                                            View
                                        </button>
                                    </a>
                                    <a href="{{ url('/teachers/' . $item->id.'/edit') }}" title="Edit Student">
                                        <button class="btn btn-info btn-sm">
                                            <i class="fa fa-eye " aria-hidden="true"></i>
                                            Edit
                                        </button>
                                    </a>
                                    <form method="post" action="{{ url('/teachers'.'/' . $item->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                            onclick="return confirm(&quot;confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection
