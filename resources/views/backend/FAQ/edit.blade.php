@extends('backend.app')
@section('title')
    Update
@endsection
@section('location')
    Update
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faq" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/faq/{{ $faq->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input id="question" class="form-control" type="text" placeholder="Put Your FAQ" name="question" value="{{ $faq->question }}">
                            </div>
                            <div class="form-group">
                                <label for="ans">Answer</label>
                                <textarea id="ans" class="form-control" name="ans" rows="6" placeholder="Answer That Question.">{{ $faq->answer }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-danger"><i class="fas fa-edit"></i> Update</button>
                        </form>
                        <div class="py-3">
                            @if (session('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>                                
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection