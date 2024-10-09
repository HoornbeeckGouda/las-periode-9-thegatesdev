<button type="submit" class="nobutton">
    <p {{ $attributes->merge(['class' => 'btn wide active solid hover anim click']) }}>
        {{ $slot }}
    </p>
</button>