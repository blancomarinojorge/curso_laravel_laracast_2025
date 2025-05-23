@php
    $classes = 'group/card p-6 bg-white/10 rounded-xl border border-transparent hover:border-blue-800 transition-border duration-500 hover:cursor-pointer'
@endphp

<div {{ $attributes(['class'=>$classes]) }}>
    {{ $slot }}
</div>
