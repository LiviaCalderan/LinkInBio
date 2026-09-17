@props(['name', 'prefix' => null])
<label class="input w-full flex items-center gap-2">

    @if ($prefix)
        <span class="opacity-50">{{ $prefix }}</span>
    @endif

    <input class="grow" name="{{ $name }}" {{ $attributes }} />



    @error($name)
        <div class="text-sm text-error">{{ $message }}</div>
    @enderror
</label>