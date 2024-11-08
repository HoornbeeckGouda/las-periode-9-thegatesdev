<div class="modal flex center" _="on closeModal add .closing then wait for animationend then remove me">
    <div class="underlay" _="on click trigger closeModal"></div>
    <div class="content card">
        <span class="closemark" _="on click trigger closeModal">&times;</span>
        <div {{ $attributes->class('flex gap') }}>
            {{ $slot ?? '' }}
        </div>
    </div>
</div>