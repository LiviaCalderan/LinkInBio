<x-layout.app>
    <div>

        <h1>Adicionar Link</h1>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>

        @endif

        <form action="{{ route('links.create') }}" method="POST">

            @csrf
            <div>
                <input type="url" name="link" placeholder="Insira o link" value="{{ old('link') }}" />

                @error('link')
                    <span>{{ $message }}</span>
                @enderror

            </div>

            <br>

            <div>
                <input type="text" name="name" placeholder="Digite seu nome" value="{{ old('name') }}" />

                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <br>
            <a href="{{ route('dashboard') }}">Voltar</a>

            <button>Salvar</button>

        </form>
    </div>
</x-layout.app>