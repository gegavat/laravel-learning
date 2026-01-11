@extends('layouts.app')

@section('title', 'Список постов')

@section('content')
    <h1>Добавление поста</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <input type="text" name="title" placeholder="Заголовок">
        <textarea name="content"></textarea>

        <button type="submit">Создать</button>
    </form>
@endsection
