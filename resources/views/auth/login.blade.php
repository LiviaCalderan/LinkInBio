<div>
    <h1>Login</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
    
    @endif

    <form action="{{ route('login') }}" method="POST">

        @csrf
        <div>
            <input type="email" name="email" placeholder="Digite seu email" />

            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Digite sua senha">
        </div>

        <br>
        <button>Login</button>

    </form>
</div>