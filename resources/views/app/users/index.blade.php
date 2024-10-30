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

        @foreach ($users as $u)
            <tr>
                <td>
                    <p>{{ "$u->email" }}</p>
                </td>
                <td>
                    <p>{{ "$u->created_at" }}</p>
                </td>
                <td>
                    <p>{{ "$u->updated_at" }}</p>
                </td>
                <td>X</td>
            </tr>
        @endforeach
    </x-datatable>
</x-layouts.app>
