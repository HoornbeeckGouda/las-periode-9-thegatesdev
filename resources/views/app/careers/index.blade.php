<x-layouts.app class="flex gap scroll">
    <x-slot:header>
        <p>Hello world!</p>
    </x-slot>

    <h2>Loopbanen</h2>

    <x-datatable class="secondary">
        <x-slot:head>
            <th>Naam</th>
            <th>Jaar</th>
            <th>Opleiding</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($list as $item)
            <tr>
                <td>
                    <p>{{ "{$item->course->prefix}.{$item->course_year->short_name}" }}</p>
                </td>
                <td>
                    <p>{{ "{$item->course_year->name}" }}</p>
                </td>
                <td>
                    <p>{{ "{$item->course->name}" }}</p>
                </td>
                <td>X</td>
            </tr>
        @endforeach
    </x-datatable>
</x-layouts.app>
