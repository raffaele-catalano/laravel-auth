@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            <h3>Projects</h3>
        </h2>
        <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <span class="fw-bold">{{ Auth::user()->name }}</span> {{ __('sei loggato/a! Bravo/a') }}
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
