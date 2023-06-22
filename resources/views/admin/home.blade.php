@extends('layouts.admin')

@section('content')
    <div class="container">
        <h3 class="text-center my-3">Dashboard</h3>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <span>Panel</span>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <h5 class="text-center"><span class="text-primary fw-bold">{{ Auth::user()->name }} </span>you're logged in! Nice!</h5>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span>Info</span>
                    </div>
                    <div class="card-body">
                        <h5>Number of Projects stored in <em>Database</em>: {{ $num_projects }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
