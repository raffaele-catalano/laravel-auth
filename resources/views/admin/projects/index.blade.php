@extends('layouts.admin')

@section('content')
    <h3 class="text-center mt-3">Projects:</h3>
        <div class="container d-flex justify-content-center">
            <table class="table table-striped table-hover w-75">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $projects as $project )
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->category }}</td>
                        <td>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye fa-lg"></i></a>
                            <a href="#" class="btn btn-warning"><i class="fa-solid fa-pencil fa-lg"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
