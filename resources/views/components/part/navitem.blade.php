@props(['current', 'to'])

<li>
    <a class="link big" {{ $current == $to ? '' : 'href='. route($to) }}>
        <p>{{ $slot }}</p>
    </a>
</li>