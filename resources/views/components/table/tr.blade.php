@props(['item_id', 'route'])

<tr hx-trigger="click" hx-get="{{ route($route, $item_id) }}" hx-target="body" hx-swap="beforeend">
    {{ $slot }}
</tr>