@props(['item_id', 'route'])

<tr hx-trigger="click throttle:2000" hx-get="{{ route($route, $item_id) }}" hx-target="body" hx-swap="beforeend">
    {{ $slot }}
</tr>