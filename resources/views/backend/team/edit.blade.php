@extends('backend.app')
@section('title')
    Team Create
@endsection
@section('location')
    Team Create
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/teams" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/teams/{{ $team->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Team Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="team_name" value="{{ $team->team_name }}">
                            </div>
                            <div class="form-group">
                                <label for="position">Position <span class="text-danger">*</span></label>
                                <input id="position" class="form-control" type="text" name="position" value="{{ $team->position }}">
                            </div>
                            <div class="form-group">
                                <label for="words">Words <span class="text-danger">*</span></label>
                                <textarea id="words" class="form-control" name="word" rows="3">{{ $team->words }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="profile">Profile <span class="text-danger">*</span></label>
                                <input id="profile" class="form-control-file" type="file" name="profile" accept="image/*">
                            </div>
                            <div class="my-2">
                                <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <img src="{{ asset($team->image) }}" width="120" alt="">
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary"><i class="fas fa-sync"></i> Update Record</button>
                        </form>
                        @if (session('message'))
                            <div class="mt-3">
                                <p class="alert alert-success alert-sm">{{ session('message') }}</p>
                            </div>                           
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection