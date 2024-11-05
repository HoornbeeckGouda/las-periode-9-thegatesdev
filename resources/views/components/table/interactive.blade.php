<div class="flex scroll">
    <div class="flex row even">
        <p>Hello</p>
        <p>Hello</p>
        <p>Hello</p>
        <p>Hello</p>
        <p>Hello</p>
    </div>
    @fragment('table')
    <x-table.layout :$head id="table" class="sticky border hover secondary">
        {{ $slot }}
    </x-table.layout>
    @endfragment
</div>