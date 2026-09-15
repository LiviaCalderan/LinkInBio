<div>
    <h1>Profile</h1>

    @if ($message = session('message'))
        <div>{{ $message }}</div>
    
    @endif

    <form action="{{ route('profile') }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />

            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <textarea name="description" placeholder="Write about you..." value="" >{{ old('description', $user->description) }}</textarea>

            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <span>linkinbio.com.br/</span>
            <input name="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}" />

            @error('handler')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <a href="{{ route('dashboard') }}">Cancelar</a>

        <button>Update</button>

    </form>
</div>