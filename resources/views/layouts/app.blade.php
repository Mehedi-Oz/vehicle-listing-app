@props(['title' => ''])

<x-base-layout :$title>

    @include('layouts.partials.header')

    {{ $slot }}

    <footer>
         {{$footerLinks}}
        <a href="">Link 1</a>
        <a href="">Link 2</a>

    </footer>

</x-base-layout>
