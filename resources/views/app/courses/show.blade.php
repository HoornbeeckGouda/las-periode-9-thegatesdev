@props(['course'])

<x-part.modal id="deleteForm" method="POST" action="{{ route('app.courses.destroy', $course->id) }}">
    <x-slot:header>
        <h3>Opleiding {{ "($course->prefix)" }} <b>{{ $course->name }}</b></h3>
    </x-slot:header>

    <x-part.collapse text="Info">
        <p>Laatst actief: {{ $course->lastCourseYear->name ?? 'Niet actief geweest' }}
        </p>
        <p>Aantal keer gevolgd: {{ $course->career_users_count }}</p>
    </x-part.collapse>
    <x-part.collapse hide text='Vakken {{ "($course->subjects_count)" }}'>
        <ul>
            @foreach ($course->subjects as $subject)
                <li>
                    <p>{{ $subject->name }}</p>
                </li>
            @endforeach
        </ul>
    </x-part.collapse>

    <x-slot:footer>
        <x-button.action class="solid swap active" type="button" hx-trigger="click throttle:2000"
            hx-get="{{ route('app.courses.edit', $course->id) }}" hx-target="body"
            hx-swap="beforeend">Bewerken</x-button.action>
        <input form="deleteForm" type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input form="deleteForm" type="hidden" name="_method" value="delete" />
        <x-button.action form="deleteForm" class="solid swap negative" type="submit">Verwijderen</x-button.action>
    </x-slot:footer>
</x-part.modal>
