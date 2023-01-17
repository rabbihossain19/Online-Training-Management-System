@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tr>
                            <th>Course ID</th>
                            <th>{{$course->id}}</th>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <th>{{$course->title}}</th>
                        </tr>
                        <tr>
                            <th>Course Author</th>
                            <th>{{$course->teacher->author}}</th>
                        </tr>
                        <tr>
                            <th>Course Category</th>
                            <th>{{$course->category->name}}</th>
                        </tr>
                        <tr>
                            <th>Course Objective</th>
                            <th>{{$course->objective}}</th>
                        </tr>
                        <tr>
                            <th>Course Description</th>
                            <th>{!! $course->description !!}</th>
                        </tr>
                        <tr>
                            <th>Course Starting Date</th>
                            <th>{{$course->starting_date}}</th>
                        </tr>
                        <tr>
                            <th>Course Fee</th>
                            <th>{{$course->fee}}</th>
                        </tr>
                        <tr>
                            <th>Course Image</th>
                            <th><img src="{{asset($course->image)}}" alt="" height="100" width="130" /></th>
                        </tr>
                        <tr>
                            <th>Total View</th>
                            <th>{{$course->hit_count}}</th>
                        </tr>
                        <tr>
                            <th>Course Offer Status</th>
                            <th>{{$course->offer_status == 1 ? 'Course Published on Offer' : 'Not Available'}}</th>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <th>{{$course->status == 1 ? 'Course Published' : 'Course Unpublished'}}</th>
                        </tr>
                        @if($course->offer_fee > 0)
                        <tr>
                            <td>Course Offer Fee</td>
                            <td>{{$course->offer_fee}}</td>
                        </tr>
                        <tr>
                            <th>Course Offer Image</th>
                            <th><img src="{{asset($course->offer_image)}}" alt="" height="100" width="130" /></th>
                        </tr>
                        <tr>
                            <td>Course Offer Date</td>
                            <td>{{$course->offer_date}}</td>
                        </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
