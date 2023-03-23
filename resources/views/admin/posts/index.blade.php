@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Tutti i Post
            </h1>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                Aggiungi Post
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-info">
                                Dettagli
                            </a>
                            <a href="{{ route('admin.posts.edit', $post->id) }} " class="btn btn-warning">
                                Modifica
                            </a>
                            <a href="{{ route('admin.posts.destroy', $post->id) }}" class="btn btn-danger">
                                Elimina
                            </a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection