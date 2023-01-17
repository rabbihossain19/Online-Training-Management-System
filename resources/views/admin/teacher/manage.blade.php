@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Teacher Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Teachers Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Image</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->mobile}}</td>
                                <td>{{$teacher->address}}</td>
                                <td>{{$teacher->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <img src="{{asset($teacher->image)}}" alt="" class="" height="50" width="70"/>
                                </td>
                                <td>
                                    <a href="{{route('edit.teacher', ['id' => $teacher->id])}}" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete.teacher', ['id' => $teacher->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
