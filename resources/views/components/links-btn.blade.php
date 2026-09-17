@props(['route'])

<a href="{{ $route }}" {{ $attributes->class(['btn btn-primary font-medium']) }}>
    {{ $slot }}
</a>