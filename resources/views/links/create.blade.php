<x-layout.app>
    <x-container>
        <x-card title="Add New Link">
            <x-form :route="route('links.create')" post id="create-form">
                <x-input name="link" type="url" placeholder="exemple.com" value="{{ old('link') }}"/>
                <x-input name="name" placeholder="Link name" value="{{ old('name') }}"/>
            </x-form>
            
            <x-slot:actions>
                <x-button type="submit" class="btn btn-wide btn-outline btn-primary" form="create-form">Save</x-button>
                <x-redirect :route="route('dashboard')" href="Cancel"/>
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>