@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Dashboard</h3>
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
