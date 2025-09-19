@props(['color', 'bgColor' => 'red'])

{{-- {{ dump($attributes) }} --}}

<div {{ $attributes->merge(['lang' => 'bn'])->class("card car-text-$color card-bg-$bgColor") }}>

    {{ dump($attributes->get('lang')) }}

    @if ($slot->isEmpty())
        Slot Content Is Empty!
    @else
        {{ $slot }}
    @endif

    <div {{ $title->attributes->class('card-header') }}>
        {{ $title ?? '' }}
    </div>

    <div class="card-footer">
        {{ $footer ?? '' }}
    </div>

</div>
