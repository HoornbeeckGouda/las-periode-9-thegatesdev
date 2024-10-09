<button type="submit" class="nobutton">
    <p {{ $attributes->merge(['class' => 'btn wide secondary solid swap']) }}>
        {{ $slot }}
    </p>
</button>