{{--<div style="padding:10px; border:1px solid #ccc;">--}}
{{--    {{ $slot }}--}}
{{--</div>--}}
<style>
    .alert-success {
        padding:10px;
        border:1px solid green;
        color: green;
    }
    .alert-error {
        padding:10px;
        border:1px solid red;
        color: red;
    }
</style>

@props(['type' => 'success'])

<div class="alert alert-{{ $type }}">
    {{ $slot }}
</div>
