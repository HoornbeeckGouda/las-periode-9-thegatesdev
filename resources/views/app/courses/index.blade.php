@props(['courses'])

<x-layout.app class="flex gap scroll">
    <x-slot:header>
        <x-part.nav current="app.courses.index"/>
    </x-slot>

    <x-table.interactive>
        <x-slot:head>
            <th>Naam</th>
            <th>Laatst actief</th>
            <th>Aantal vakken</th>
            <th>Acties</th>
        </x-slot:head>

        @foreach ($courses as $course)
            <x-table.tr :item_id="$course->id" route="app.courses.show">
                <td>
                    <p>{{ $course->name }}</p>
                </td>
                <td>
                    <p>{{ $course->lastCourseYear->name ?? 'Niet actief geweest' }}</p>
                </td>
                <td>
                    <p>{{ $course->subjects_count }}</p>
                </td>
                <td>X</td>
            </x-table.tr>
        @endforeach
    </x-table.interactive>
</x-layout.app>
