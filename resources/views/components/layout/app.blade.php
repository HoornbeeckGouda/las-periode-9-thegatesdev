@props(['header'])

<x-layout.base class="flex theme-main primary dark pad gap">
    <x-layout.header class="card pad">
        {{ $header ?? '' }}
    </x-layout.header>
    <div {{ $attributes->class(['fill card pad']) }}>
        {{ $slot }}
    </div>
</x-layout.base>
