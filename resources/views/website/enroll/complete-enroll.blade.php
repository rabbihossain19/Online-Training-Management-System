@extends('website.master')

@section('title')
    Course Complete Enroll Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row bg-dark">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase">
                        <h3>Course Enroll Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card border-0">
                        <div class="card-header">Course Enroll Status</div>
                        <div class="card-body">
                            <h4>Congratulation! Your Registration is complete. Please wait, we will contact with you soon</h4>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Course Status</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$enroll->course->title}}</td>
                                    <td>{{$enroll->enroll_status}}</td>
                                    <td>{{$enroll->payment_status}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
