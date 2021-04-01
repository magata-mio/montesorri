@extends('backend.app')
@section('title')
    Edit Notice
@endsection
@section('location')
    notice
@endsection
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="/notices" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
            <form action="/notices/{{ $notices->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Notice Title<span class="text-danger">*</span></label>
                    <input id="title" class="form-control" type="text" name="title" value="{{ $notices->notice_title }}">
                </div>
                <div class="form-group">
                    <label for="description">Notice Description</label>
                    <input id="description" class="form-control" type="text" name="description" value="{{ $notices->description }}">
                </div>
                <div class="form-group">
                    <label for="image">Notice Image</label>
                    <input id="image" class="form-control-file" type="file" name="image">
                </div>
                
                <button type="submit" class="btn btn-success btn-sm">Update</button>
                @if (session('message'))
                    <div class="py-3">
                        <p class="alert alert-success alert-sm">{{ session('message') }}</p>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection