<x-base class="view-portal theme-main primary light">
    <div id="root">
        <header>
            <a class="link" href="{{ route('home') }}">< Terug</a>
            <h2>Log in</h2>
        </header>
        <main>
            <form action="auth/login" method="post">
                @csrf
                <label for="email">Email</label>
                <input type="email" autocomplete="email" name="email" id="email" placeholder="user@example.com">
                <label for="password">Wachtwoord</label>
                <input type="password" autocomplete="current-password" name="password" id="password"
                    placeholder="Wachtwoord...">
                <x-form-button type="submit">Log in</x-form-button>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li><p>{{ $error }}</p></li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </div>
</x-base>
