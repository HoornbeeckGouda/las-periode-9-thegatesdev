<div class="scroll" {{ $attributes->only(['id']) }}>
    <table {{ $attributes->class(['table'])->except(['id']) }}>
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>    
</div>
