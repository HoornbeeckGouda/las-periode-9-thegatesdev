@props(['course'])

<x-part.modal>
    <h3>Opleiding {{ "($course->prefix)" }} <b>{{ $course->name }}</b></h3>
    <x-part.collapse text="Vakken">
        <ul>
            @foreach ($course->subjects as $subject)
                <li><p>{{ $subject->name }}</p></li>
            @endforeach
        </ul>
    </x-part.collapse>
    <div class="flex row gap">
        <button class="btn solid swap active">Bewerken</button>
        <button class="btn solid swap negative">Verwijderen</button>
    </div>
</x-part.modal>