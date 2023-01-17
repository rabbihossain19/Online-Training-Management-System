@extends('website.master')

@section('title')
    student All Course
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="" class="text-decoration-none">My Profile</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none">My Courses</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none">Change Password</a></li>
                            <li class="list-group-item"><a href="" class="text-decoration-none">My Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h1 class="text-center">My Courses</h1>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Course Title</th>
                                <th>Starting Date</th>
                                <th>Enroll Date</th>
                                <th>Payment Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><a href="{{route('training.detail', ['id' => $enroll->course_id])}}" class="text-decoration-none text-dark" target="_blank">{{$enroll->course->title}}</a></td>
                                <td>{{$enroll->course->starting_date}}</td>
                                <td>{{$enroll->enroll_status}}</td>
                                <td>{{$enroll->payment_status}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
