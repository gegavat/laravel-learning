@extends('layouts.app')

@section('title', 'Список постов')

@section('content')
    <h1>Добавление поста</h1>
    <hr>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div class="mb-3">
            <input class="form-control" type="text" name="title" placeholder="Заголовок">
        </div>

        <div class="mb-3">
            <textarea class="form-control" name="content" placeholder="Содержимое поста..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
