<x-layouts.app class="flex gap scroll">
    <x-slot:header>
        <p>Hello world!</p>
    </x-slot>

    <h2>Gebruikers</h2>

    <x-datatable class="secondary">
        <x-slot:head>
            <th>E-mail</th>
            <th>Gemaakt op</th>
            <th>Aangepast op</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($list as $item)
            <tr>
                <td>
                    <p>{{ "$item->email" }}</p>
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
    </x-datatable>
</x-layouts.app>
