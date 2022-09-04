

@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="{{route('posts.list')}}" class="btn btn-outline-primary btn-sm">Go back</a>
{{--                @dd($post)--}}
                <h1 class="display-one">TITLE: {{ ucfirst(  $post->title ?? '') }}</h1>
                <h2>details: {!! $post->description  ?? '' !!}</h2>
                <h3>date: {!! $post->created_at ?? '' !!}</h3>
                <h3>last update: {!! $post->updated_at ?? ''!!}</h3>
                <h2>post ID: {!! $post->id ?? '' !!}</h2>

                <hr>
{{--                <a href="/posts-list/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>--}}
                <li><a   href="{{ route('posts.delete',$post->id )  }}"> </a></li>

                <br><br>
                <form id="delete-frm" class="" action="{{ route('posts.delete',$post->id )  }}" method="POST">
{{--                     @method('DELETE')--}}
                    @csrf
                     <button class="btn btn-danger" href="{{ route('posts.delete',$post->id )  }}" >Delete Post</button>
                </form>

                <form id="delete-frm" class="" action="{{ route('posts.edit',$post->id )  }}" method="GET">
                    {{--                     @method('DELETE')--}}
                    @csrf
                    <button class="btn btn-info" href="{{ route('posts.edit',$post->id )  }}" >Edit Post</button>
                </form>


            </div>
        </div>
    </div>
@endsection
