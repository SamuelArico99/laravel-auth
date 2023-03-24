@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                {{ $post->title }}
            </h1>
            <h6>
                {{ $post->slug }}
            </h6>
            <p>
                {{ $post->content }}
            </p>
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success">
                Aggiungi Post
            </a>
        </div>
    </div>
@endsection