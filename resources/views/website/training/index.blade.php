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
                        <h3>All Training Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($courses as $course)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset($course->image)}}" alt="" class="" height="250" />
                        <div class="card-body">
                            <h4>{{$course->title}}</h4>
                            <p class="mb-0">{{$course->fee}}</p>
                            <p class="">Starting Date: {{$course->starting_date}}</p>
                            <hr/>
                            <a href="{{route('training.detail', ['id' => $course->id])}}" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <div class="float-end">
                        {{$courses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
