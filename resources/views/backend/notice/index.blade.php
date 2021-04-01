@extends('backend.app')
@section('title')
    Notice
@endsection
@section('location')
    notice
@endsection
@section('content')
    <div class="container">
        <div class="py-3">
            <a href="/notices/create" class="btn btn-primary btn-sm">Create</a>
        </div>
        <table class="table table-light table-bordered table-sm">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th style="width: 50%">Description</th>
                    <th>Created Time</th>
                    <th>Updated Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notices as $key=> $notice)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $notice->notice_title }}</td>
                        <td>{{ $notice->description }}</td>
                        <td>{{ date('j-F-Y',strtotime($notice->created_at)) }}</td>
                        <td>{{ date('j-F-Y',strtotime($notice->updated_at)) }}</td>
                        <td>
                            <form action="/notices/{{ $notice->id }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/notices/{{  $notice->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection