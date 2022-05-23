<x-pic-layout>
    <div class="container my-4">
        @if ($divisions->isEmpty())
            <h5 class="text-center my-5">
                There are no KPIs that require your approval for the selected year.
            </h5>
        @else
            <h3 class="mb-3 pb-3 border-bottom">Approve KPIs</h3>

            @foreach ($divisions as $division)
                @php
                    $kpiStatus = $division->kpiStatusByQuarter($currentQuarter->quarter);
                @endphp
                <div class="mb-4">
                    <h6 class="mb-3">
                        {{ $division->department->name }}
                    </h6>
    
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
                                                @php
                                                    $achievement = $kpi
                                                        ->kpi_performances()
                                                        ->where('division_id', $division->id)
                                                        ->where('quarter', $i)
                                                        ->first();
                                                @endphp

                                                @if ($achievement)
                                                    <span>
                                                        {{ $achievement->achievement }}
                                                    </span>
                                                @endif
                                            </td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if (optional($kpiStatus)->slug == 'submitted')
                        <form x-ref="approveForm{{ $division->id }}" id="approve-form" action="{{ route('approver.kpis.approve', $division) }}" method="POST">
                            @csrf

                            <button
                                type="submit"
                                x-on:click.prevent="if (confirm('Are you sure you want to approve these KPIs?')) { $refs.approveForm{{ $division->id }}.submit(); }"
                                class="btn btn-primary">
                                Approve
                            </button>
                            <small class="text-muted ms-2">
                                <i class="bi bi-check-circle"></i> Submitted {{ $kpiStatus->pivot->created_at->diffForHumans() }}.
                            </small>
                        </form>
                    @elseif (optional($kpiStatus)->slug == 'reviewed')
                        <small class="text-muted">
                            <i class="bi bi-check-circle"></i>
                            {{ $kpiStatus->name }} {{ $kpiStatus->pivot->created_at->diffForHumans() }}
                        </small>
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</x-pic-layout>