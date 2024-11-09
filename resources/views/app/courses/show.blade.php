@props(['course'])

<x-part.modal>
    <header>
        <h3>Opleiding {{ "($course->prefix)" }} <b>{{ $course->name }}</b></h3>
    </header>
    <main>
        <p>Laatst actief: {{ $course->lastCourseYear->name }}</p>
        <br>
        <x-part.collapse text='Vakken {{ "($course->subjects_count)" }}'>
            <ul>
                @foreach ($course->subjects as $subject)
                    <li><p>{{ $subject->name }}</p></li>
                @endforeach
            </ul>
        </x-part.collapse>
    </main>
    <footer class="flex row gap">
        <button class="btn solid swap active">Bewerken</button>
        <button class="btn solid swap negative">Verwijderen</button>
    </footer>
</x-part.modal>