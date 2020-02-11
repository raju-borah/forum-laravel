@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Add Discussion</div>


        <div class="card-body">
            <form action="{{route('discussion.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="">
                </div>
                <div class="form-group">
                    <label for="contents">Content</label>
                    <input id="contents" type="hidden" name="contents">
                    <trix-editor input="contents"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="channel">Channel</label>
                    <select name="channel" id="channel" class="form-control">
                        @foreach($channels as $channel)
                            <option value="{{$channel->id}}">{{$channel->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create Discussion</button>
                </div>
            </form>

        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css"/>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js" ></script>
@endsection
