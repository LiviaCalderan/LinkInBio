<x-layout.app>
    <div>
        <h1>Dashboard</h1>
        <h2>User: {{ auth()->user()->name }} :: {{ auth()->id() }}</h2>

        <a href="{{ route('profile') }}">Update Profile</a>

        @if ($message = session()->get('message'))
            <div>{{ $message }}</div>

        @endif

        <a href="{{ route('links.create') }}">Adicionar</a>

        <ul>
            @foreach ($links as $link)
                <li style="display: flex; gap: 10px;">

                    @if (!$loop->last)

                        <form action="{{ route('links.down', $link) }}" method="post">

                            @csrf
                            @method('PATCH')

                            <button>⬇️</button>

                        </form>

                    @endif


                    @unless ($loop->first)
                        <form action="{{ route('links.up', $link) }}" method="post">

                            @csrf
                            @method('PATCH')

                            <button>⬆️</button>

                        </form>
                    @endunless




                    <a href="{{ route('links.edit', $link) }}">{{ $link->name }} </a>

                    <form action="{{ route('links.destroy', $link) }}" method="post"
                        onsubmit="return confirm('Tem certeza que deseja deletar este link?')">

                        @csrf
                        @method('DELETE')

                        <button>Delete</button>

                    </form>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout.app>