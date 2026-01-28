@props(['is' => 'a'])

@php
    $allowedTags = ['a', 'div', 'article', 'section', 'button', 'span'];
    $tag = in_array($is, $allowedTags, true) ? $is : 'a';
@endphp

<{{ $is }} {{  $attributes(['class' => 'border border-border rounded-lg bg-card p-4 md:text-sm block']) }}>
    {{  $slot }}
</{{ $is }}>