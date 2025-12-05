<div>
    @if (now()->dayName === 'Friday')
        Friday
    @else
        Not Friday
    @endif

    <hr>

    <x-alert></x-alert>
</div>
