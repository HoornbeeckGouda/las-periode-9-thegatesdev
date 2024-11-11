@props(['text', 'hide' => null])

<div class="collapse fill {{ $hide == null ? '' : 'hide' }}">
    <button type="button" class="none fill-x" _='on click toggle .hide on the closest parent .collapse'>
        {{ $text }}
    </button>
    <div class="content fill-x">
        {{ $slot }}
    </div>
</div>