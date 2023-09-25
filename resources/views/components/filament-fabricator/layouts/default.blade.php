@props(['page'])
<x-app-layout>
    {{-- Header Here --}}

    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

     {{-- Footer Here --}}
</x-app-layout>