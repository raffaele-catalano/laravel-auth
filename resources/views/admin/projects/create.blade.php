@extends('layouts.admin')

@section('content')
    <h3 class="text-center mt-3">Add a New Project</h3>
        <div class="container d-flex flex-column align-items-center">

            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
            @endif

            <form action="{{ route('admin.projects.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name (*)</label>
                    <input id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" type="text">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea cols="30" rows="10" id="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" type="text"></textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category (*)</label>
                    <input id="category" value="{{ old('category') }}" class="form-control @error('category') is-invalid @enderror"
                    name="category" placeholder="Category" type="text">
                        @error('category')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="start_date" class="form-label">Start Date (*)</label>
                    <input id="start_date" value="{{ old('start_date') }}" class="form-control @error('start_date') is-invalid @enderror"
                    name="start_date" placeholder="Start Date" type="text">
                        @error('start_date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input id="end_date" value="{{ old('end_date') }}" class="form-control @error('end_date') is-invalid @enderror"
                    name="end_date" placeholder="End Date" type="text">
                        @error('end_date')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="is_closed" class="form-label">Status</label>
                    <select class="form-select" name="is_closed" id="is_closed">
                        <option value="0" selected>Ongoing</option>
                        <option value="1">Closed</option>
                    </select>
                        @error('is_closed')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>



                <div class="btn-container d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
@endsection
