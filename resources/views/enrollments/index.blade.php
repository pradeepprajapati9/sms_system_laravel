@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Enrollments Application</h2>
        </div>
        <div class="card-body ">
            <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                <i class="fa fa-plus " aria-hidden="true"></i>
                Add New
            </a>
            <br> <br>
            <table class="table-responsive ">
                <table class="table border ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Enrollment No  </th>
                            <th> Course</th>
                            <th> Student Name</th>
                            <th >Join Date</th>
                            <th >Fees</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enrollments as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->enroll_no }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->student_name }}</td>
                                <td>{{ $item->join_date }}</td>
                                <td>{{ $item->fees }}</td>
                                <td>

                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/enrollments/' . $item->id . 'show/') }}" title="View Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye " aria-hidden="true"></i>
                                                View
                                            </button>
                                        </a> &nbsp;
                                        <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Student">
                                            <button class="btn btn-info btn-sm">
                                                <i class="fa fa-eye " aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        &nbsp;
                                        <form method="post" action="{{ url('/enrollments' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                                                onclick="return confirm(&quot;confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
                                        </form>
                                    </div> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection
