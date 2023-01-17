@extends('website.master')

@section('title')
    Login / Registration
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-info">
                <div class="col">
                    <div class="card card-body border-0 border-bottom border-top text-center">
                        <h3> Login / Registration</h3>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <form action="{{route('student.login')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Registration Form</div>
                        <div class="card-body">
                            <form action="{{route('student.register')}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" required name="name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Mobile </label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-warning w-100" value="Registration"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
