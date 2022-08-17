@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link_activo link'
            : 'link_inactivo link';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
