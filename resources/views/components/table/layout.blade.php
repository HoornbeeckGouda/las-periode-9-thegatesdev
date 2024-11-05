<div class="scroll">
    <table {{ $attributes->class(['table']) }}>
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
