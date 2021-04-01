@extends('backend.app')
@section('title')
    Team
@endsection
@section('location')
    team
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-3">
                    <div class="card-header">
                        <a href="/teams/create" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-sm" id="datatable">
                            <thead class="text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Words</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($team as $key=>$team)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>{{ $team->team_name }}</td>
                                            <td>{{ $team->position }}</td>
                                            <td>{{ $team->words }}</td>
                                            <td>
                                                <form action="/teams/{{ $team->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="/teams/{{ $team->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection