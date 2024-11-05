<x-layout.app class="flex gap scroll">
    <x-slot:header>
        <p>Hello world!</p>
    </x-slot>

    <h2>Profielen</h2>

    <x-table.layout class="sticky border hover secondary">
        <x-slot:head>
            <th>Naam</th>
            <th>Adres</th>
            <th>Woonplaats</th>
            <th>Gemaakt op</th>
            <th>Aangepast op</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($list as $item)
            <tr>
                <td>
                    <p>{{ "$item->first_name $item->last_name" }}</p>
                </td>
                <td>
                    <p>{{ "$item->street $item->house_no$item->house_no_addition" }}</p>
                </td>
                <td>
                    <p>{{ "$item->city" }}</p>
                </td>
                <td>
                    <p>{{ "$item->created_at" }}</p>
                </td>
                <td>
                    <p>{{ "$item->updated_at" }}</p>
                </td>
                <td>X</td>
            </tr>
        @endforeach
    </x-table.layout>
</x-layout.app>
