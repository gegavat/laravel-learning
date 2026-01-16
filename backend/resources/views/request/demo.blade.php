<form method="POST">
    @csrf

    <input name="email" value="{{ old('email') }}">
    @error('email') <div @style(['color: red'])>
        {{ $message }}
    </div> @enderror

    <input name="name" value="{{ old('name') }}">
    @error('name') <div>{{ $message }}</div> @enderror

    <button>OK</button>
</form>
