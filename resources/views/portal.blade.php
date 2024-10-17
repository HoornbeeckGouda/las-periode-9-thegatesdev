<x-layouts.base class="flex center theme-main primary light">
    <div class="card flex center gap">
        <header>
            <h2>Log in</h2>
        </header>
        <main>
            <form action="auth/login" method="post" class="form-simple flex gap">
                @csrf
                <div>
                    <label for="email">Email adres</label>
                    <input type="email" name="email" id="email" placeholder="Email adres...">
                </div>
                <div>
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password" id="password" placeholder="Wachtwoord...">
                </div>
                <div>
                    <x-buttons.action type="submit" class="solid swap secondary">
                        Login
                    </x-buttons.action>
                </div>
            </form>
        </main>
    </div>
</x-layouts.base>
