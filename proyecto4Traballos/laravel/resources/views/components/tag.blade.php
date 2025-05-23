@props(['size'=>'base'])
@php
    $classes = 'px-3 py-1 bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-300';

    if ($size=='base'){
        $classes .= ' text-m ';
    }elseif ($size='small'){
        $classes .= ' text-2xs ';
    }
@endphp

<a href="#" class="{{ $classes }}">
    {{ $slot }}
</a>
