@extends('layouts.app')

@section('title', 'Список постов')

@section('content')
    <h1>Список постов</h1>

    @forelse($posts as $post)
        <article>
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['content'] }}</p>
        </article>
    @empty
        <p>Постов пока нет 😢</p>
    @endforelse

    <x-alert>
        По умолчанию success
    </x-alert>

    <br>

    <x-alert type="error">
        Здесь ошибка
    </x-alert>
@endsection

