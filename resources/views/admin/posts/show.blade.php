@extends('layouts.app')

@section('content')

<div class="container text-center ">
    <h1 class="titolo">{{$posts->title}} <a class="btn btn-primary" href="{{route('admin.posts.edit', $posts)}}">EDIT</a></h1>

    <div>
        <p>{{ $posts->content }}</p>
    </div>

        <a class="btn btn-secondary" href="{{ route('admin.posts.index')}}"><< Torna</a>

    </div>
</div>

@endsection
