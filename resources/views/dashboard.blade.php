<x-layout.app>
    <x-container>
        <div class="absolute inset-x-0 top-5 flex items-center justify-between gap-25 px-6">
            <x-links-btn :route="route('profile')" class="flex-1 justify-center btn-ghost">
                Profile
            </x-links-btn>

            <x-links-btn :route="route('links.create')" class="flex-1 justify-center btn-ghost">
                New Link
            </x-links-btn>

            <x-links-btn :route="route('logout')" class="flex-1 justify-center btn-ghost">
                Logout
            </x-links-btn>
        </div>
        <div class="text-center flex flex-col space-x-4 w-2/3 mt-4">
            <x-img src="/storage/{{ $user->photo }}" alt="/Profile Picture" />
            <div class="text-2xl font-bold justify-center m-3 text-primary tracking-wider">- {{ $user->name }} -</div>
            <div class="text-sm italic opacity-80">{{ $user->description }}</div>


            <ul class="space-y-3 mt-6">
                @foreach ($links as $link)

                    <li class="flex items-center gap-4 justify-center">


                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>

                                <x-button class="rounded-full btn-ghost">
                                    <x-icons.up-arrow class="w-6 h-6" />
                                </x-button>

                            </x-form>
                        @else
                            <x-button disabled="disabled" class="rounded-full btn-ghost btn-disabled">
                                <x-icons.up-arrow class="w-6 h-6" />
                            </x-button>

                        @endunless

                        @if (!$loop->last)

                            <x-form :route="route('links.down', $link)" patch>

                                <x-button class="rounded-full btn-ghost">
                                    <x-icons.down-arrow class="w-6 h-6" />
                                </x-button>

                            </x-form>

                        @else
                            <x-button disabled="disabled" class="rounded-full btn-ghost btn-disabled">
                                <x-icons.down-arrow class="w-6 h-6" />
                            </x-button>

                        @endif



                        <x-links-btn :route="route('links.edit', $link)" class="w-full btn-outline">
                            {{ $link->name }}
                        </x-links-btn>

                        <x-form :route="route('links.destroy', $link)" delete
                            onsubmit="return confirm('Are you sure you want to delete this link?')">

                            <x-button class="rounded-full btn-ghost btn-error">
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>

                        </x-form>
                    </li>

                @endforeach
            </ul>



        </div>
    </x-container>

</x-layout.app>