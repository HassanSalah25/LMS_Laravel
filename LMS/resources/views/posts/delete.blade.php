@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{route('posts.list')}}" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">title: {{ ucfirst($post->title) }}</h1>
                <p>details {!! $post->description !!}</p>
                <hr>
                <a href="{{ route('posts.delete',$post->id )  }}" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="{{ route('posts.delete',$post->id )  }}" method="POST">
{{--                    @method('DELETE')--}}
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
