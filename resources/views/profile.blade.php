<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="update-form" enctype="multipart/form-data">
                <div class="flex flex-col items-center gap-6">
                    <x-img src="/storage/{{ $user->photo }}" alt="Profile Picture" />
                    <x-file-input name="photo" />

                </div>
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" placeholder="About you..."
                    value="{{ old('description', $user->description) }}" />

                <x-input name="handler" prefix="linkinbio.com.br/" placeholder="@seuLink"
                    value="{{ old('handler', $user->handler) }}" />

            </x-form>

            <x-slot:actions>
                <x-button type="submit" class="btn btn-wide btn-outline btn-primary"
                    form="update-form">Update</x-button>
                <x-redirect :route="route('dashboard')" href="Cancel" />
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>