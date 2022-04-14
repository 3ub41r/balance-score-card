<x-layout>
    <div class="container my-4">
        <form action="{{ $division->id ? route('divisions.update', $division) : route('divisions.store') }}" method="POST">
            @csrf

            @if ($division->id)
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $division->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <input type="hidden" name="year_implemented" value="{{ session('year') ?? now()->year }}">

            <div class="row g-3 align-items-center mb-3">
                <div class="col">
                    <label for="pic_staff_id" class="form-label">PIC Staff</label>
                    <select id="pic_staff_id" name="pic_staff_id" class="form-select">
                        @foreach ($staff as $person)
                            <option value="{{ $person->id }}"{{ $person->id == $division->pic_staff_id ? ' selected' : '' }}>
                                {{ $person->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('pic_staff_id')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="approver_staff_id" class="form-label">Approver Staff</label>
                    <select id="approver_staff_id" name="approver_staff_id" class="form-select">
                        @foreach ($staff as $person)
                            <option value="{{ $person->id }}"{{ $person->id == $division->approver_staff_id ? ' selected' : '' }}>
                                {{ $person->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('approver_staff_id')
                        <div class="">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>

            @if ($division->id)
                <button id="delete-btn" type="button" class="btn btn-link text-danger">
                    Delete
                </button>
            @endif
        </form>

        @if ($division->id)
            <form id="delete-form" action="{{ route('divisions.destroy', $division) }}" method="POST">
                @csrf
                @method('DELETE')
            </form>
        @endif
    </div>

    <script>
        const deleteBtn = document.querySelector('#delete-btn');
        
        deleteBtn.addEventListener('click', (event) => {
            if(confirm('Are you sure?')) {
                document.querySelector('#delete-form').submit();
            }
        });
    </script>
</x-layout>