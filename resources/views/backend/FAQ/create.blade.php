@extends('backend.app')
@section('title')
    Create
@endsection
@section('location')
    Create
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
                        <form action="/faq" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input id="question" class="form-control" type="text" placeholder="Put Your FAQ" name="question">
                            </div>
                            <div class="form-group">
                                <label for="ans">Answer</label>
                                <textarea id="ans" class="form-control" name="ans" rows="6" placeholder="Answer That Question."></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger"><i class="far fa-save"></i> Save</button>
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