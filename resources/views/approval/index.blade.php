<x-layout>
    <div x-data="" class="container my-4">
        @if ($divisions->isEmpty())
            <div class="text-center my-5">
                <h5 class="fw-bold my-3">There are no KPIs ready for approval yet.</h5>
            </div>
        @else
            @foreach ($divisions as $division)
                <div class="d-flex align-items-center justify-content-between my-4">
                    <h5 class="my-0">
                        {{ $division->department->name }}

                        @if ($division->kpi_status)
                            <span class="badge rounded-pill ms-1 {{ $division->kpi_status->slug == 'rejected' ? 'bg-danger' : 'bg-secondary'}}">
                                {{ $division->kpi_status->name }}
                            </span>
                        @endif
                    </h5>

                    @if ($currentQuarter)
                        <div>
                            <button x-show="{{ optional($division->kpi_status)->slug != 'approved' ? 'true' : 'false' }}"
                                x-on:click="approve({{ $division->id }})"
                                class="btn btn-primary">
                                Approve
                            </button>
                            <button x-show="{{ optional($division->kpi_status)->slug != 'rejected' ? 'true' : 'false' }}"
                                x-on:click="reject({{ $division->id }})"
                                class="btn btn-link">
                                Reject
                            </button>
                        </div>
                    @endif
                </div>

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

            <form id="approve-form" action="{{ route('approval.approve', ':division') }}" method="POST">
                @csrf
            </form>
            <form id="reject-form" action="{{ route('approval.reject', ':division') }}" method="POST">
                @csrf
            </form>

            @push('scripts')
                <script>
                    function approve(divisionId) {
                        const approveForm = document.querySelector('#approve-form');
                        const url = "{{ route('approval.approve', ':division') }}".replace(':division', divisionId);

                        if (confirm('Are you sure you want to APPROVE these KPIs?')) {
                            approveForm.setAttribute('action', url);
                            approveForm.submit();
                        }
                    }
                    
                    function reject(divisionId) {
                        const rejectForm = document.querySelector('#reject-form');
                        const url = "{{ route('approval.reject', ':division') }}".replace(':division', divisionId);

                        if (confirm('Are you sure you want to REJECT these KPIs?')) {
                            rejectForm.setAttribute('action', url);
                            rejectForm.submit();
                        }
                    }
                </script>
            @endpush
        @endif
    </div>
</x-layout>