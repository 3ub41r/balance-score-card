<x-layout>
    <div class="container">
        <x-kpi-tabs />

        @if ($perspectives->isEmpty())
            <div class="text-center my-5">
                <h5 class="fw-bold my-3">You have not added any perspectives.</h5>

                <a href="{{ route('perspectives.create') }}" class="btn btn-success my-3">
                    New Perspective
                </a>
            </div>
        @else
            <a href="{{ route('kpis.create') }}" class="btn btn-success mb-2">
                New KPI
            </a>
            <div class="mb-4">
                @foreach ($perspectives as $perspective)
                    <div class="mb-4">
                        <h5>{{ $perspective->code }}: {{ $perspective->name }}</h5>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>