@props(['title', 'actions'])


<div class="card bg-base-800 w-2/3 shadow-xl">
    <div class="card-body">
        <div class="card-title text-2xl font-bold justify-center py-3 text-primary">{{ $title }}</div>

        {{ $slot }}


        <div class="card-actions justify-center items-center flex flex-col mt-6">
            {{ $actions }}
        </div>
    </div>
</div>