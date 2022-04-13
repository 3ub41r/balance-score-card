<x-layout>
    <div class="container">
        <x-kpi-tabs />

        <a href="{{ route('kpis.create') }}" class="btn btn-success">
            New KPI
        </a>

        @foreach ($perspectives as $perspective)
            <div class="mb-4">
                <h5>{{ $perspective->code }}: {{ $perspective->name }}</h5>
            </div>
        @endforeach
    </div>
</x-layout>