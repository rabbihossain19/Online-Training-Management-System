@extends('website.master')

@section('title')
    Best Online Training System
@endsection


@section('body')

    <div class="carousel slide" data-bs-ride="carousel" id="slider" data-bs-interval="2600">
        <div class="carousel-inner">
            @foreach($offer_courses as $key => $offer_course_slide)
            <div class="carousel-item active">
                <img src="{{asset($offer_course_slide->offer_image)}}" alt="" class="w-100" height="500"/>
                <div class="carousel-caption my-caption">
                    <h3 class="text-warning">{{$offer_course_slide->title}}</h3>
                    <h5 class="text-info fw-bold">Offer End: {{$offer_course_slide->offer_date}}</h5>
                    <a href="" class="btn btn-dark px-5">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row bg-info">
                <div class="col">
                    <div class="card card-body border-0 border-bottom border-top text-center">
                        <h3>Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($recent_course as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img src="{{asset($course->image)}}" alt="{{$course->title}}" class="" height="250" />
                            <div class="card-body">
                                <h4><a href="{{route('training.detail', ['id' => $course->id])}}" class="text-decoration-none text-dark">{{$course->title}}</a></h4>
                                <p class="mb-0">Tk. {{$course->fee}}</p>
                                <p class="">Starting Date: {{$course->starting_date}}</p>
                            </div>
                            <div class="card-footer bottom-0">
                                <a href="{{route('training.detail', ['id' => $course->id])}}" class="btn btn-warning float-end">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
