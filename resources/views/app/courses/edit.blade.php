@props(['course'])

<x-part.modal action="{{ route('app.courses.update', $course->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="put" />
    <x-slot:header>
        <div class="flex row">
            <h3>Opleiding </h3>
            <input class="h3" type="text" name="prefix" value="{{ $course->prefix }}" size="3">
            <h3> </h3>
            <input class="h3" type="text" name="name" value="{{ $course->name }}">
        </div>
    </x-slot:header>

    <x-part.collapse text="Info">
        <p>Laatst actief: {{ $course->lastCourseYear->name ?? 'Niet actief geweest' }}</p>
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
        <button type="submit" class="btn solid swap positive">Opslaan</button>
    </x-slot:footer>
</x-part.modal>
