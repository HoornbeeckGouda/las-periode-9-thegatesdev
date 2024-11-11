@props(['slot', 'header', 'footer'])

<div class="modal flex center" _="on closeModal add .closing then wait for animationend then remove me">
    <div class="underlay" _="on click trigger closeModal"></div>
    <form {{ $attributes->class('content card scroll flex gap') }}>
        <header class="flex row between fill-x center-txt pad">
            {{ $header ?? '' }}
            <span class="closemark" _="on click trigger closeModal">&times;</span>
        </header>
        <main class="flex gap scroll">
            {{ $slot ?? '' }}
        </main>
        <footer class="flex row gap pad">
            {{ $footer ?? '' }}
        </footer>
    </form>
</div>
