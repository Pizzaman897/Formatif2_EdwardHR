@props(['status' => 'Tidak Aktif'])

@php
    $s = trim(strtolower($status));
    if ($s === 'aktif') {
        $bg = 'bg-green-100';
        $text = 'text-green-800';
    } elseif ($s === 'tidak aktif' || $s === 'nonaktif' || $s === 'tidak_aktif') {
        $bg = 'bg-red-100';
        $text = 'text-red-800';
    } else {
        $bg = 'bg-gray-100';
        $text = 'text-gray-800';
    }
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-2 py-0.5 rounded text-xs font-medium {$bg} {$text}"]) }}>
    {{ $status }}
</span>