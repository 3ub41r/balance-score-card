<x-layout>
    <div class="container">
        <x-kpi-tabs />

        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf

            <div class="table-responsive-md mb-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Key-in</th>
                            <th scope="col">Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i <= 4; $i++)
                            <tr>
                                <th scope="row">Q{{ $i }}</th>
                                <td class="{{ !optional($schedules->firstWhere('quarter', $i))->key_in_starts_on || !optional($schedules->firstWhere('quarter', $i))->key_in_ends_on ? 'table-danger' : '' }}">
                                    <div class="row g-2 align-items-center">
                                        <div class="col">
                                            <input type="date" name="key_in_starts[{{ $i }}]" class="form-control" value="{{ optional($schedules->firstWhere('quarter', $i))->key_in_starts_on }}">
                                        </div>
                                        <div class="col">
                                            <input type="date" name="key_in_ends[{{ $i }}]" class="form-control" value="{{ optional($schedules->firstWhere('quarter', $i))->key_in_ends_on }}">
                                        </div>
                                    </div>
                                </td>
                                <td class="{{ !optional($schedules->firstWhere('quarter', $i))->approval_starts_on || !optional($schedules->firstWhere('quarter', $i))->approval_ends_on ? 'table-danger' : '' }}">
                                    <div class="row g-2 align-items-center">
                                        <div class="col">
                                            <input type="date" name="approval_starts[{{ $i }}]" class="form-control" value="{{ optional($schedules->firstWhere('quarter', $i))->approval_starts_on }}">
                                        </div>
                                        <div class="col">
                                            <input type="date" name="approval_ends[{{ $i }}]" class="form-control" value="{{ optional($schedules->firstWhere('quarter', $i))->approval_ends_on }}">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        const yearSelect = document.querySelector('#year-select');
        
        yearSelect.addEventListener('change', (event) => {
            const year = yearSelect.options[yearSelect.selectedIndex].value;
            // Redirect
            window.location.replace("{{ route('schedules.index', ':year') }}".replace(':year', year));
        });
    </script>
</x-layout>