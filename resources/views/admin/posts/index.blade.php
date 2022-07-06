@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Questa è la mia CRUD</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td><a class="btn btn-success" href="{{route('admin.posts.show', $post)}}">Show</a>
                        <a class="btn btn-primary" href="{{route('admin.posts.edit', $post)}}">Edit</a>
                        <a class="btn btn-danger" href="#">delete</a>
                </tr>

            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}

</div>
@endsection
