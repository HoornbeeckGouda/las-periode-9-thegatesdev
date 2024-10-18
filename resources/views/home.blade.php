<x-layouts.base class="flex center even theme-main primary dark">
    <header class="center-txt">
        <h1>Laravel College</h1>
        <p>Leven voor het Leren!</p>
    </header>
    <main>
        <x-buttons.nav route="{{ route('portal') }}" class="wide outline hover anim click">
            Naar het Portaal
        </x-buttons.nav>
    </main>
</x-layouts.base>
