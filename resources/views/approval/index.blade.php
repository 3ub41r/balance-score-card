<x-layout>
    <div class="container my-4">
        @foreach ($divisions as $division)
            <h5 class="my-4">
                {{ $division->department->name }}

                @if ($division->kpi_status)
                    <span class="badge rounded-pill bg-secondary ms-1">
                        {{ $division->kpi_status->name }}
                    </span>
                @endif
            </h5>

            <div class="card mb-5 table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th>&nbsp;</th>
                            <th class="border-start">Target</th>
                            @for ($i = 1; $i <= 4; $i++)
                                <th class="text-center border-start{{ $currentQuarter->quarter == $i ? ' table-primary' : '' }}">
                                    Q{{ $i }}
                                </th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($division->kpis as $kpi)
                            <tr>
                                <td class="w-50">
                                    <strong>
                                        {{ $kpi->code }} - {{ $kpi->name }}
                                    </strong>
                                    <p class="text-muted">
                                        {{ $kpi->od }}
                                    </p>
                                </td>
                                <td class="border-start">
                                    {{ $kpi->pivot->target }}
                                </td>
                                @for ($i = 1; $i <= 4; $i++)
                                    <td class="border-start text-center{{ $currentQuarter->quarter == $i ? ' table-primary' : '' }}">
                                        {{ optional($kpi->kpi_performances->firstWhere('quarter', $i))->achievement }}
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
</x-layout>