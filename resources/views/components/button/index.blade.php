@props([
    // button | link
    'type' => 'button',

    // primary | secondary
    'action' => 'primary',

    // primary, secondary, link, info, success, warning, danger
    'color' => null,

    'name' => null,

    'disabled' => false,

    'href' => '#',

    'target' => 'self',
])

@php
    $colors = [
        'primary' => 'bg-primary-600 text-white hover:bg-primary-800',
        'secondary' => 'bg-secondary-500 text-white hover:bg-secondary-800',
        'link' => 'bg-link-600 text-white hover:bg-link-800',
        'info' => 'bg-info-600 text-white hover:bg-info-800',
        'success' => 'bg-success-600 text-white hover:bg-success-800',
        'warning' => 'bg-warning-600 text-white hover:bg-warning-800',
        'danger' => 'bg-danger-600 text-white hover:bg-danger-800',
    ];

    // Action
    $class = $action == 'primary' || $action == 'secondary' ? $colors[$action] : $colors['primary'];

    // Color
    $class = array_key_exists($color, $colors) ? $colors[$color] : $class;

    // Attributes
    $attributes = $attributes->merge(['class' => 'px-2 py-1 rounded'])->merge(['class' => $class]);
@endphp

@if ($type == 'link')
    <a href="{{ $href }}" {{ $attributes }} target="_{{ $target }}">
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes }} @disabled($disabled) @if (!empty($name)) name="{{ $name }}" @endif>
        {{ $slot }}
    </button>
@endif
