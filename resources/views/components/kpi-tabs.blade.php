<div class="d-flex justify-content-between align-items-center my-3">
    <nav class="nav flex-fill border-bottom border-muted">
        @foreach ($links as $label => $link)
            <a class="nav-link{{ request()->url() == $link ? ' border-bottom border-dark text-dark fw-bold' : ' text-muted' }}" href="{{ $link }}">
                {{ $label }}
            </a>
        @endforeach
    </nav>
</div>
