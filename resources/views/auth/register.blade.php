<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}"/>
                <x-input name="email" placeholder="Email" value="{{ old('email') }}"/>
                <x-input name="email_confirmation" placeholder="Confirm Email"/>
                <x-input name="password" type="password" placeholder="Password"/>
                <x-input name="password_confirmation" type="password" placeholder="Confirm Password"/>
            </x-form>
            
            <x-slot:actions>
                <x-button type="submit" class="btn btn-wide btn-outline btn-primary" form="register-form">Register</x-button>
                <x-redirect message="Alreary have an account?" route="login" href="Login"/>
            </x-slot:actions>

        </x-card>
    </x-container>

</x-layout.app>