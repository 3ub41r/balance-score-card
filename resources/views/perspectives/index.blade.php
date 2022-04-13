<x-layout>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="my-3">Perspectives!</h1>
            <a href="{{ route('perspectives.create') }}" class="btn btn-success">
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
                <a class="nav-link active" href="#">Perpectives</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">KPI</a>
            </li>
        </ul>

        <div class="list-group mb-4">
            @foreach ($perspectives as $perspective)
                <a href="{{ route('perspectives.edit', $perspective) }}" class="list-group-item list-group-item-action">
                    {{ $perspective->code }}: {{ $perspective->name }}
                </a>
            @endforeach
        </div>        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</x-layout>