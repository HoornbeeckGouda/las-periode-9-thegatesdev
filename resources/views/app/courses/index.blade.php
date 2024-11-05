<x-layout.app class="flex gap scroll">
    <x-slot:header>
        <p>Hello world!</p>
    </x-slot>

    <h2>Opleidingen</h2>

    <x-table.layout class="sticky border hover secondary">
        <x-slot:head>
            <th>Naam</th>
            <th>Laatst actief</th>
            <th>Aantal vakken</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($list as $item)
            <tr>
                <td>
                    <p>{{ $item->name }}</p>
                </td>
                <td>
                    <p>{{ $item->lastCourseYear->name ?? 'Niet actief geweest' }}</p>
                </td>
                <td>
                    <p>{{ $item->subjects_count }}</p>
                </td>
                <td>X</td>
            </tr>
        @endforeach
    </x-table.layout>
</x-layout.app>
