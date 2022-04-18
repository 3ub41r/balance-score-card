<x-layout>
    <div class="container">
        <x-kpi-tabs />

        <form action="{{ route('divisions.store') }}" method="POST">
            @csrf

            <div class="table-responsive-md mb-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">PIC</th>
                            <th scope="col">Approver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <th>{{ $department->name }}</th>
                                <td>
                                    <select id="pic_staff[{{ $department->id }}]" name="pic_staff[{{ $department->id }}]" class="form-select">
                                        <option value=""></option>
                                        @foreach ($staff as $person)
                                            <option value="{{ $person->id }}"{{ optional($department->current_division)->pic_staff_id == $person->id ? ' selected' : '' }}>
                                                {{ $person->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select id="approver_staff[{{ $department->id }}]" name="approver_staff[{{ $department->id }}]" class="form-select">
                                        <option value=""></option>
                                        @foreach ($staff as $person)
                                            <option value="{{ $person->id }}"{{ optional($department->current_division)->approver_staff_id == $person->id ? ' selected' : '' }}>
                                                {{ $person->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
</x-layout>