@extends('layouts.app')

@section('content')

    <x-nav-link>Главная</x-nav-link>
    <x-nav-link>Список постов</x-nav-link>
    <x-nav-link
        active
        end
        :url="route('posts.show', $post['id'])"
    >
        {{ $post['title'] }}
    </x-nav-link>

    <x-post-card
        :title="$post['title']"
        :url="route('posts.show', $post['id'])"
    >
        {{ $post['content'] }}
    </x-post-card>
@endsection
