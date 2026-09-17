@props(['title' => null, 'actions'])


<div class="card bg-base-800 w-2/3 shadow-xl">
    <div class="card-body">
        @if ($title)
            <div class="card-title text-2xl font-bold justify-center py-3 text-primary">{{ $title }}</div>
        @endif


        {{ $slot }}


        <div class="card-actions justify-center items-center flex flex-col mt-6">
            {{ $actions }}
        </div>
    </div>
</div>