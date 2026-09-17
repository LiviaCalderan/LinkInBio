<x-layout.app>
    <x-container>
        
        <div class="text-center flex flex-col space-x-4 w-2/3 mt-4">
            <x-img src="/storage/{{ $user->photo }}" alt="/Profile Picture" />
            <div class="text-2xl font-bold justify-center m-3 text-primary tracking-wider">- {{ $user->name }} -</div>
            <div class="text-sm italic opacity-80">{{ $user->description }}</div>


            <ul class="space-y-3 mt-6">
                @foreach ($user->links as $link)

                    <li class="flex items-center gap-4 justify-center">

                        <x-links-btn :route="$link->link" class="w-full btn-outline">
                            {{ $link->name }}
                        </x-links-btn>
                    </li>

                @endforeach
            </ul>



        </div>
    </x-container>

</x-layout.app>