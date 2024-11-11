<div class="flex scroll">
    <div class="flex row even">
        <button type="button" class="btn solid" hx-trigger="click throttle:2000" hx-get="{{ route('app.courses.create') }}" hx-target="body" hx-swap="beforeend">Nieuw</button>
    </div>
    @fragment('table')
    <x-table.layout :$head id="table" class="sticky border hover secondary">
        {{ $slot }}
    </x-table.layout>
    @endfragment
</div>