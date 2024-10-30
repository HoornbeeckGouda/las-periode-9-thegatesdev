<x-layouts.app class="flex gap scroll">
    <x-slot:header>
        <p>Hello world!</p>
    </x-slot>

    <h2>Profielen</h2>

    <x-datatable class="secondary">
        <x-slot:head>
            <th>Naam</th>
            <th>Adres</th>
            <th>Woonplaats</th>
            <th>Gemaakt op</th>
            <th>Aangepast op</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($profiles as $p)
            <tr>
                <td>
                    <p>{{ "$p->first_name $p->last_name" }}</p>
                </td>
                <td>
                    <p>{{ "$p->street $p->house_no$p->house_no_addition" }}</p>
                </td>
                <td>
                    <p>{{ "$p->city" }}</p>
                </td>
                <td>
                    <p>{{ "$p->created_at" }}</p>
                </td>
                <td>
                    <p>{{ "$p->updated_at" }}</p>
                </td>
                <td>X</td>
            </tr>
            <tr>
                <td>
                    <p>{{ "$p->first_name $p->last_name" }}</p>
                </td>
                <td>
                    <p>{{ "$p->street $p->house_no$p->house_no_addition" }}</p>
                </td>
                <td>
                    <p>{{ "$p->city" }}</p>
                </td>
                <td>
                    <p>{{ "$p->created_at" }}</p>
                </td>
                <td>
                    <p>{{ "$p->updated_at" }}</p>
                </td>
                <td>X</td>
            </tr>
        @endforeach
    </x-datatable>
</x-layouts.app>
