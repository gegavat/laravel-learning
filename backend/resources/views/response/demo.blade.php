<form method="POST">
    @csrf

    <input name="email" value="{{ old('email') }}">
    @error('email') <div @style(['color: red'])>
        {{ $message }}
    </div> @enderror

    <button>OK</button>

    @if(session('info'))
        <div @style(['color: blue'])>
            {{ session('info') }}
        </div>
    @endif
</form>
