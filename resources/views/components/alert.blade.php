
@props([
    'type' => 'success',
    'message' => null
])

<div class="alert alert-{{ $type }}">
    @if($message)
        {{ $message }}
    @else
        {{ $slot }}
    @endif
</div>
