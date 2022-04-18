<x-pic-layout>
    <div class="container my-4">
        @if ($divisions->isEmpty())
        @else
            @foreach ($divisions as $division)
                @php
                    $kpiStatus = $division->kpiStatusByQuarter($currentQuarter->quarter);
                @endphp
                <div class="mb-4">
                    <h6 class="mb-3">
                        {{ $division->department->name }}
                    </h6>
    
                    <form action="{{ route('pic.kpis.store') }}" method="POST">
                        @csrf
    
                        <div class="table-responsive-md mb-3">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <th class="{{ $currentQuarter && $currentQuarter->quarter == $i ? 'table-primary' : '' }}">Q{{ $i }}</th>
                                        @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($division->kpis as $kpi)
                                        <tr>
                                            <td class="w-50">
                                                <strong>
                                                    {{ $kpi->code }}: {{ $kpi->name }}
                                                </strong>
                                                <p class="text-muted my-2">{{ $kpi->od }}</p>
                                                <small class="d-block mt-2">
                                                    {{ number_format($kpi->pivot->target, 2) }}
                                                </small>
                                            </td>
                                            @for ($i = 1; $i <= 4; $i++)
                                                <td class="{{ $currentQuarter && $currentQuarter->quarter == $i ? 'table-primary' : '' }}">
                                                    @if ($currentQuarter && $currentQuarter->quarter == $i && $kpiStatus->slug != 'submitted')
                                                        <div class="d-flex align-items-center flex-wrap flex-md-nowrap">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                name="achievements[{{ $division->id }}][{{ $kpi->id }}][{{ $i }}]"
                                                                value="{{ optional($division->kpi_performances()->where('kpi_id', $kpi->id)->where('quarter', $i)->first())->achievement }}">
                                                            <button class="btn btn-link">
                                                                Upload
                                                            </button>
                                                        </div>
                                                    @else
                                                        @php
                                                            $achievement = $kpi
                                                                ->kpi_performances()
                                                                ->where('division_id', $division->id)
                                                                ->where('quarter', $i)
                                                                ->first();
                                                        @endphp
    
                                                        @if ($achievement)
                                                            <span class="text-muted">
                                                                {{ $achievement->achievement }}
                                                            </span>
                                                        @endif
                                                    @endif
                                                </td>
                                            @endfor
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
        
                        @if (!$kpiStatus)
                            <button class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-link" x-on:click="submitKpi({{ $division->id }})">
                                Submit
                            </button>
                        @else
                            <small class="text-muted">
                                {{ $kpiStatus->name }} {{ $kpiStatus->pivot->created_at->diffForHumans() }}
                            </small>
                        @endif
                    </form>

                    <form id="submit-form-{{ $division->id }}" action="{{ route('kpis.submit', $division) }}" method="POST">
                        @csrf
                    </form>
                </div>
            @endforeach
        @endif
    </div>

    @push('scripts')
        <script>
            function submitKpi(divisionId)
            {
                if (confirm('Are you sure you want to submit these KPIs?')) {
                    document.getElementById('submit-form-' + divisionId).submit();
                }
            }
        </script>
    @endpush
</x-pic-layout>