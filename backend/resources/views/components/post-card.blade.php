@props([
    'title',
    'url' => '#'
])

<article>
    <h2>
        <a href="{{ $url }}">{{ $title }}</a>
    </h2>

    <div>
        {{ $slot }}
    </div>
</article>
