@extends('backend.app')
@section('title')
    Create Message
@endsection
@section('location')
    message
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <a href="/message" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/message" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label for="team_id">Message From</label>
                                <select id="team_id" class="form-control" name="team_id">
                                    @foreach ($team as $teams)
                                        <option value="{{ $teams->id }}" data-pos="{{ $teams->position }}">{{ $teams->team_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Position</label>
                                <input  id="position" class="form-control" type="text" name="">
                            </div>
                            <div class="form-group">
                                <label for="description">Message</label>
                                <textarea id="description" class="form-control" name="description" rows="6"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger btn-sm">Save</button>
                        </form>
                    </div>
                    @if (session('message'))
                    <div class="card-footer">
                       <p class="alert alert-success alert-sm">{{ session('message') }}</p>
                    </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        const positionDiv = document.getElementById('position')
        const selectDiv = document.getElementById('team_id')
        function setPostition(){
            const selectedOption = selectDiv.options[selectDiv.selectedIndex];
            const position = selectedOption.getAttribute('data-pos')
            positionDiv.value = position
        }

        setPostition();

        selectDiv.addEventListener('change',()=>{
            setPostition()
        })
    </script>
@endsection