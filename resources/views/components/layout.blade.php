<x-base>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ route('schedules.index') }}">BSC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($links as $label => $url)
                        <li class="nav-item">
                            <a class="nav-link{{ request()->url() == $url ? ' active' : '' }}" href="{{ $url }}">
                                {{ $loop->iteration }}. {{ $label }}
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Year {{ session('year') ?? now()->year }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @for ($i = now()->year; $i > now()->year - 10; $i--)
                                <li>
                                    <a class="dropdown-item{{ session('year') == $i ? ' fw-bold' : '' }}" href="{{ route('change-year', $i) }}">
                                        {{ $i }}
                                    </a>
                                </li>
                            @endfor
                        </ul>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn navbar-text" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <x-alert />

    {{ $slot }}
</x-base>