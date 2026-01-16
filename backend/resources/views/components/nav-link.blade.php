<style>
    a {
        text-decoration: none;
    }
    a.active {
        text-decoration: underline;
    }
</style>

@props([
    'active' => false,
    'end' => false,
    'url' => '#'
])

<a @class([
    'active' => $active
])
   href="{{ $url }}"
>
    {{ $slot }}
</a>

@if(!$end)
    ->
@endif
