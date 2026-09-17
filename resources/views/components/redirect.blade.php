@props(['route', 'message'=> null, 'href'])

<div class="flex justify-center gap-2">
    <span>{{ $message }}</span>
    <a href="{{ $route }}" class="link link-primary link-hover font-medium">{{ $href }}</a>
</div>