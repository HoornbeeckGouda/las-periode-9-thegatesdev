<a href="{{ route($route) }}">
    <span {{ $attributes->merge(['class' => 'btn wide col-light outline hover anim click']) }}>
        {{ $slot }}
    </span>
</a>