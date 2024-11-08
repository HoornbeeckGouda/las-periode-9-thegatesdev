@props(['head'])

<div class="scroll" {{ $attributes->only(['id']) }}>
    <table {{ $attributes->class(['table'])->except(['id']) }}>
        <thead class="dark">
            <tr>
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>    
</div>
