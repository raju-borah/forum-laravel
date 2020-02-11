@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{route('discussion.create')}}" class="btn btn-success mb-3">Add Discussion</a>
    </div>

    @foreach($discussions as $discussion)
        <div class="card">
            <div class="card-header">{{$discussion->title}}</div>

            <div class="card-body">
                {!! $discussion->contents !!}
            </div>
        </div>
    @endforeach

@endsection
