<div>
    <h1>Profile</h1>

    @if ($message = session()->get('message'))
        <div>{{ $message }}</div>
        <br>
    
    @endif

    <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')

       <div>
            <img src="storage/{{ $user->photo }}" alt="Profile Picture">
            <input type="file" name="photo" />
        </div>

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