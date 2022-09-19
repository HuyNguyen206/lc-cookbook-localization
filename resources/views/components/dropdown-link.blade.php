@props([
    'isCurrentLocale' => false
])
@php
   $localeClass = $isCurrentLocale ? "font-bold bg-blue-900 text-white" : ""
@endphp
<a {{ $attributes->merge(['class' => "$localeClass block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-blue-900 hover:text-white focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"]) }}>{{ $slot }}</a>
