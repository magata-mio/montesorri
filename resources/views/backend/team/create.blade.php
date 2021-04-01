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
                        <form action="/teams" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="name">Team Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="team_name">
                            </div>
                            <div class="form-group">
                                <label for="position">Position <span class="text-danger">*</span></label>
                                <input id="position" class="form-control" type="text" name="position">
                            </div>
                            <div class="form-group">
                                <label for="words">Words <span class="text-danger">*</span></label>
                                <textarea id="words" class="form-control" name="word" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="profile">Profile <span class="text-danger">*</span></label>
                                <input id="profile" class="form-control-file" type="file" name="profile" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Save</button>
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