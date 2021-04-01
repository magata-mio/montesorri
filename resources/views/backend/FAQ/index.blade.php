@extends('backend.app')
@section('title')
    FAQ
@endsection
@section('location')
    FAQ
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faq/create" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm table-light" id="datatable">
                            <thead>
                                <tr>
                                    <th>#SN</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Update Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faq as $key=>$faqs)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $faqs->question }}</td>
                                        <td>{{ $faqs->answer }}</td>
                                        <td>{{ date('j-F-Y',strtotime($faqs->updated_at)) }}</td>
                                        <td>
                                            <form action="/faq/{{ $faqs->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a href="/faq/{{ $faqs->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                                                <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
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