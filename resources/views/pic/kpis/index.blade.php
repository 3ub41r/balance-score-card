<x-pic-layout>
    <div class="container my-4">
        @if ($divisions->isEmpty())
            <h5 class="text-center my-5">
                There are no KPIs set for the selected year.
            </h5>
        @else
            <h3 class="mb-3 pb-3 border-bottom">Update KPIs</h3>

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
                                            </td>
                                            @for ($i = 1; $i <= 4; $i++)
                                                <td class="{{ $currentQuarter && $currentQuarter->quarter == $i ? 'table-primary' : '' }}">
                                                    @if ($currentQuarter && $currentQuarter->quarter == $i && !$kpiStatus)
                                                        @php
                                                            $performance = $division->kpi_performances()->where('kpi_id', $kpi->id)->where('quarter', $i)->first();
                                                        @endphp
                                                        <div class="d-flex align-items-center flex-wrap flex-md-nowrap">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                name="achievements[{{ $division->id }}][{{ $kpi->id }}][{{ $i }}]"
                                                                value="{{ optional($performance)->achievement }}">
                                                            
                                                            @if ($kpi->pivot->target)
                                                                <span class="text-nowrap mx-2 text-muted">
                                                                    of {{ number_format($kpi->pivot->target, 2) }}
                                                                </span>
                                                            @endif

                                                            <button class="btn btn-link">
                                                                Upload
                                                            </button>
                                                        </div>
                                                        @if ($performance)
                                                            <small class="text-muted d-block mt-2">
                                                                Updated {{ $performance->updated_at->diffForHumans() }}
                                                            </small>
                                                        @endif
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
                            <button x-on:click="if (confirm('Are you sure you want to submit these KPIs?')) { $refs.submitForm{{ $division->id }}.submit(); }"
                                type="button"
                                class="btn btn-link">
                                Submit
                            </button>
                        @else
                            <small class="text-muted">
                                <i class="bi bi-check-circle"></i>
                                {{ $kpiStatus->name }} {{ $kpiStatus->pivot->created_at->diffForHumans() }}
                            </small>
                        @endif
                    </form>

                    <form x-ref="submitForm{{ $division->id }}" action="{{ route('pic.kpis.submit', $division) }}" method="POST">
                        @csrf
                    </form>
                </div>
            @endforeach
        @endif
    </div>
</x-pic-layout>