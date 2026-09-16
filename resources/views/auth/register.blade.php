<x-layout.app>
    <div>


        {{ auth()->id()}}
        <h1>Register</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>

        @endif

        <form action="{{ route('register') }}" method="POST">

            @csrf
            <div>
                <input type="text" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" />

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <input type="email" name="email" placeholder="Digite seu email" value="{{ old('email') }}" />

            </div>

            <br>

            <div>
                <input type="email" name="email_confirmation" placeholder="Confirme seu email" />

                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>

            <div>
                <input type="password" name="password" placeholder="Digite sua senha">


            </div>

            <br>

            <div>
                <input type="password" name="password_confirmation" placeholder="Confirme sua senha">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>
            <button>Register</button>

        </form>
    </div>
</x-layout.app>