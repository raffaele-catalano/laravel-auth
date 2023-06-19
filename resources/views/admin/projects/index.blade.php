@extends('layouts.admin')

@section('content')
    <h3 class="text-center mt-3">Projects</h3>
    <div class="container d-flex flex-column align-items-center">

        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

        <table class="table table-striped table-hover w-75">
            <thead>
                <tr>
                    <th scope="col" class="text-center">
                        <a class="text-black text-decoration-none"
                            href="{{ route('admin.orderBy', ['direction' => $direction]) }}">
                            <span>#id</span>
                            @if ($direction === 'asc')
                                <i class="fa-solid fa-chevron-up fa-xs"></i>
                            @else
                                <i class="fa-solid fa-chevron-down fa-xs"></i>
                            @endif
                        </a>
                    </th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td class="text-center">{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td class="text-capitalize">{{ $project->category }}</td>
                        <td>{{ $project->is_closed ? 'Closed' : 'Ongoing' }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary"><i
                                    class="fa-solid fa-eye fa-lg"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pencil fa-lg"></i></a>

                            @include('admin.partials.delete-form')
                            {{-- <form
                                action="{{ route('admin.projects.destroy', $project) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('The project -> {{ $project->name }} will be deleted, are you sure?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger fw-bold">
                                    <i class="fa-solid fa-trash-can fa-lg"></i>
                                </button>

                            </form> --}}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center w-75 my-2">
            {{ $projects->links() }}
        </div>
    </div>
@endsection
