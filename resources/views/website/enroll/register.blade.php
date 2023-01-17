@extends('website.master')

@section('title')
    Contact US
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-8 mx-auto">
                    <div class="card h-100">
                        <div class="card-header text-center">Student Registration Form</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name"/>
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
                                    <label class="col-md-3 mb-3">Student NID Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="nid"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="mobile"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Current Address</label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3">Student Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3 mb-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" value="Register Now"/>
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
