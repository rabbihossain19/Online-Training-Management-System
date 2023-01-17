@extends('website.master')

@section('title')
    Training Center
@endsection


@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row bg-info">
                <div class="col">
                    <div class="card card-body border-0 border-bottom border-top text-center">
                        <h3>{{isset($courses[0]->category) ? $courses[0]->category->name.' Training Course ' : 'No Course Available'}}</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($courses as $course)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{asset($course->image)}}" alt="" class="" height="250" />
                        <div class="card-body">
                            <h4><a href="{{route('training.detail', ['id' => $course->id])}}" class="text-decoration-none text-dark">{{$course->title}}</a></h4>
                            <p class="mb-0 fw-bold">Course Fee: {{$course->fee}}</p>
                            <p class="fw-bold">Starting Date: {{$course->starting_date}}</p>
                        </div>
                        <div class="card-footer bottom-0">
                            <a href="{{route('training.detail', ['id' => $course->id])}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
