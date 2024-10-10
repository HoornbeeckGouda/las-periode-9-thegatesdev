<button type="submit" class="nobutton">
    <p {{ $attributes->merge(['class' => 'btn wide solid swap secondary dark']) }}>
        {{ $slot }}
    </p>
</button>