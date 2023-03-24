@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h1>
                Crea Post
            </h1>
        </div>
        @if ($errors->any())
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col">
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" required maxlength="128" id="title" placeholder="Inserisci titolo..">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Contenuto</label>
                        <textarea class="form-control" id="content" required maxlength="4096" name="content" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">
                        Aggiungi
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection