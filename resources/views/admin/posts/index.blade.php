@extends('layouts.app')

@section('content')
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
                    <td>XXX</td>
                </tr>

            @endforeach
        </tbody>
      </table>
@endsection
