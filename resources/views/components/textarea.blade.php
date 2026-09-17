@props(['value'])

<fieldset class="fieldset">
    <legend class="fieldset-legend">Description</legend>
    <textarea {{ $attributes }} class="textarea w-full">{{ $value }}</textarea>

    @error('description')
        <span>{{ $message }}</span>
    @enderror
</fieldset>
