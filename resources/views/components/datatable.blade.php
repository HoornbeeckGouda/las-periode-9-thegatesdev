<div class="scroll">
    <table {{ $attributes->class(['datatable']) }}>
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
