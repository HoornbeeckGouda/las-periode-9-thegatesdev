<x-layout.base class="flex center even theme-main primary dark">
    <header class="center-txt">
        <h1>Laravel College</h1>
        <p>Leven voor het Leren!</p>
    </header>
    <main>
        <x-button.nav route="{{ route('portal') }}" class="wide outline hover anim click">
            Naar het Portaal
        </x-button.nav>
    </main>
</x-layout.base>
