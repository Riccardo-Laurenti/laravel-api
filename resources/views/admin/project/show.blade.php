@extends('layouts.app')

@section('content')
    <div class="card-header  my-5 ">
        <h3>{{ $project->title }}</h3>
        <hr>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <img src="{{ $project->image }}" alt="" class="">
            </div>
            <div class="col-10 ">

                <h4>Title: <span class="text-primary">{{ $project->content }}</span></h4>
                <h4>Content: <span class="text-primary">{{ $project->slug }}</span></h4>
            </div>
        </div>
    </div>
@endsection
