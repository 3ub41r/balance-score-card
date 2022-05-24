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
            <a href="{{ route('kpis.create') }}" class="btn btn-success mb-3">
                New KPI
            </a>
            <div class="mb-4">
                @foreach ($perspectives as $perspective)
                    <div class="my-4">
                        <h6 class="my-4">{{ $perspective->code }}: {{ $perspective->name }}</h6>

                        @if ($perspective->kpis->isEmpty())
                            <p class="text-muted">No KPI yet.</p>
                        @else
                            <div class="mb-5 table-responsive">
                                <table class="table table-hover table-bordered rounded">
                                    <thead>
                                        <tr>
                                            <th>Division</th>
                                            <th>Target</th>
                                            @for ($i = 1; $i <= 4; $i++)
                                                <th class="text-center">Q{{ $i }}</th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($perspective->kpis as $kpi)
                                            <tr>
                                                <td colspan="6">
                                                    <a href="{{ route('kpis.edit', $kpi) }}">
                                                        {{ $kpi->code }}: {{ $kpi->name }}
                                                    </a>
                                                </td>
                                            </tr>
                                            @if ($kpi->divisions->isNotEmpty())
                                                @foreach ($kpi->divisions as $division)
                                                    <tr>
                                                        <td>
                                                            {{ $division->department->name }}
                                                        </td>
                                                        <td>
                                                            {{ $division->pivot->target }}
                                                        </td>
                                                        @for ($i = 1; $i <= 4; $i++)
                                                            <td class="text-center" title="Q{{ $i }}">
                                                                @if ($division->pivot['q' . $i])
                                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                                @endif
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                            @endif
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>