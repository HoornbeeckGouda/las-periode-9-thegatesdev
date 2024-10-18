<x-layouts.base class="flex center theme-main primary dark">
    <div>
        <div class="card flex center bgap">
            <header>
                <h2>Log in</h2>
            </header>
            <x-forms.login/>
            <x-buttons.action class="solid swap secondary" form="login-form">
                Login
            </x-buttons.action>
        </div>
    </div>
</x-layouts.base>
