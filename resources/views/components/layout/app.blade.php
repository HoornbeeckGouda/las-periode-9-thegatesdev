<x-layout.base class="flex theme-main primary dark pad gap">
    <x-layout.header class="card">
        {{ $header ?? '' }}
    </x-layout.header>
    <div {{ $attributes->class(['fill card']) }}>
        {{ $slot }}
    </div>
</x-layout.base>
