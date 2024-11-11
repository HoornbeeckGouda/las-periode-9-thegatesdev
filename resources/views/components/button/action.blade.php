<button class="none" {{ $attributes->merge(['type' => 'submit'])->except(['class']) }}>
    <span {{ $attributes->class(['btn'])->only(['class']) }}>
        {{ $slot }} 
    </span>
</button>