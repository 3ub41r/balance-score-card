<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-3">KPIs!</h1>
            <a href="{{ route('kpis.create') }}" class="btn btn-success">
                New
            </a>
        </div>

        {{-- <select id="year-select" class="form-select">
            @for ($i = now()->year; $i > now()->year - 7; $i--)
                <option value="{{ $i }}"{{ $year == $i ? ' selected' : '' }}>{{ $i }}</option>
            @endfor
        </select> --}}

        <ul class="nav nav-tabs my-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('schedules.index') }}">Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perpectives</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">KPI</a>
            </li>
        </ul>

        @foreach ($perspectives as $perspective)
            <div class="mb-4">
                <h5>{{ $perspective->code }}: {{ $perspective->name }}</h5>
            </div>
        @endforeach
    </div>
</x-layout>