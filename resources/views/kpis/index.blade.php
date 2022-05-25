<x-layout>
    <div class="container my-4">
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
                        <h5 class="my-4">{{ $perspective->code }}: {{ $perspective->name }}</h5>

                        @if ($perspective->kpis->isEmpty())
                            <p class="text-muted">No KPI yet.</p>
                        @else
                            <div class="card mb-5 table-responsive">
                                @foreach ($perspective->kpis as $kpi)
                                    <div class="card-body border-bottom{{ !$loop->first ? ' border-top' : '' }}">
                                        <a href="{{ route('kpis.edit', $kpi) }}">
                                            {{ $kpi->code }}: {{ $kpi->name }}
                                        </a>
                                    </div>
                                    @if ($kpi->divisions->isNotEmpty())
                                        <table class="table table-hover table-borderless mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Division</th>
                                                    <th class="border-start">Target</th>
                                                    @for ($i = 1; $i <= 4; $i++)
                                                        <th class="text-center border-start">Q{{ $i }}</th>
                                                    @endfor
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kpi->divisions as $division)
                                                    <tr class="border-top">
                                                        <td class="border-end">
                                                            {{ $division->department->name }}
                                                        </td>
                                                        <td class="border-start">
                                                            {{ $division->pivot->target }}
                                                        </td>
                                                        @for ($i = 1; $i <= 4; $i++)
                                                            <td class="text-center border-start" title="Q{{ $i }}">
                                                                @if ($division->pivot['q' . $i])
                                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                                @endif
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>