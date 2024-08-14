@props(['type', 'message'])

@if ($message)
    @php
        $class = match($type) {
            'success' => 'alert-primary',
            'error' => 'alert-danger',
            default => 'alert-primary', 
        };
    @endphp

    <div class="alert {{ $class }} alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
