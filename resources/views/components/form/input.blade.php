<div  class="flex">
    <label for="{{ $name }}">{{ $slot }}</label>
    <input type="{{ $type ?? $name }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? "$slot..." }}">
</div>