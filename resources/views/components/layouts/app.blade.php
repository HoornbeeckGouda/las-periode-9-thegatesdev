<x-layouts.base class="flex theme-main primary dark pad gap">
    <x-layouts.header class="card">
        {{ $header ?? '' }}
    </x-layouts.header>
    <div {{ $attributes->class(['fill card']) }}>
        {{ $slot }}
    </div>
</x-layouts.base>
