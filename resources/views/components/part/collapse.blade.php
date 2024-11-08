@props(['text'])

<div class="collapse fill hide" >
    <button type="button" class="fill none" _='on click toggle .hide on the closest parent .collapse'>
        {{ $text }}
    </button>
    <div class="fill content">
        {{ $slot }}
    </div>
</div>