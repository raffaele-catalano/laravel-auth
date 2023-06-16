@extends('layouts.admin')

@section('content')
    <h3 class="text-center mt-3">{{ $project->name }}</h3>
        <div class="container d-flex justify-content-center">
            <h5><span class="text-primary">Category:</span> {{ $project->category }}</h5>
            <h5><span class="text-primary">Start Date:</span> {{ $project->start_date }}</h5>
            <h5><span class="text-primary">End Date:</span> {{ $project->end_date }}</h5>
            <p>{{ $project->description }}</p>
        </div>
@endsection
