@props(['title', 'actions'])


<div class="card bg-base-100 w-96 shadow-lg">
    <div class="card-body">
        <div class="card-title text-2xl font-bold justify-center py-3">{{ $title }}</div>

        {{ $slot }}


        <div class="card-actions justify-center">
            {{ $actions }}
        </div>
    </div>
</div>