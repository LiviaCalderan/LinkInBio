<x-layout.app>
    <x-container>
        <x-card title="Edit Link">
            <x-form :route="route('links.edit', $link)" put id="edit-form">
                <x-input name="link" type="url" placeholder="exemple.com" value="{{ old('link', $link->link) }}"/>
                <x-input name="name" placeholder="Link name" value="{{ old('name', $link->name) }}"/>
            </x-form>
            
            <x-slot:actions>
                <x-button type="submit" class="btn btn-wide btn-outline btn-primary" form="edit-form">Save Link</x-button>
                <x-redirect :route="route('dashboard')" href="Cancel"/>
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>