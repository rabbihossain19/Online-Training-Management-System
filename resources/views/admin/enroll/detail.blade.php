@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll Details</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Enroll ID</th>
                            <th>{{$enroll->id}}</th>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <th>{{$enroll->course->title}}</th>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <th>{{$enroll->course->fee}}</th>
                        </tr>
                        <tr>
                            <th>Starting Date</th>
                            <th>{{$enroll->course->starting_date}}</th>
                        </tr>
                        <tr>
                            <th>Teacher Information</th>
                            <th>{{$enroll->course->teacher->name.'('.$enroll->course->teacher->mobile.')'}}</th>
                        </tr>
                        <tr>
                            <th>Student Information</th>
                            <th>{{$enroll->student->name.'('.$enroll->student->mobile.')'}}</th>
                        </tr>
                        <tr>
                            <th>Enroll Status</th>
                            <th>{{$enroll->enroll_status}}</th>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <th>{{$enroll->payment_status}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
