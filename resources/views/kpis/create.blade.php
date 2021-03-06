<x-layout>
    <div class="container my-4">
        <form action="{{ $kpi->id ? route('kpis.update', $kpi) : route('kpis.store') }}" method="POST">
            @csrf

            @if ($kpi->id)
                @method('PUT')
            @endif

            <div class="row g-3 align-items-center mb-3">
                <div class="col-2">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" id="code" name="code" value="{{ old('code', $kpi->code) }}">
                    @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="name" class="form-label">Key Performance Index</label>
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $kpi->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="floatingTextarea">Operational Definition (OD)</label>
                <textarea name="od" class="form-control{{ $errors->has('od') ? ' is-invalid' : '' }}" id="floatingTextarea" style="height: 200px">{{ old('od', $kpi->od) }}</textarea>

                @error('od')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="perspective_id" class="form-label">Perspective Category</label>
                <select id="perspective_id" name="perspective_id" class="form-select" aria-label="Default select example">
                    @foreach ($perspectives as $perspective)
                        <option value="{{ $perspective->id }}"{{ $perspective->id == $kpi->perspective_id ? ' selected' : '' }}>
                            {{ $perspective->code }}: {{ $perspective->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                @error('divisions')
                    <small class="text-danger d-block mb-2">
                        You need to pick at least ONE division responsible for this KPI.
                    </small>
                @enderror
                <label class="form-label">
                    Assign Division(s)
                </label>
                <div class="list-group">
                    @foreach ($divisions as $division)
                        <div 
                            x-data="{ isChecked:  {{ $kpi->divisions->contains('id', $division->id) ? 'true' : 'false' }} }"
                            class="list-group-item list-group-item-action py-3 d-flex justify-content-between align-items-center">
                            <div class="form-check my-0">
                                <input
                                    x-model="isChecked"
                                    class="form-check-input"
                                    type="checkbox"
                                    value="{{ $division->id }}"
                                    name="divisions[]"
                                    id="division-[{{ $division->id }}]"
                                    {{ $kpi->divisions->contains('id', $division->id) ? ' checked' : '' }}>
                                <label class="form-check-label" for="division-[{{ $division->id }}]">
                                    {{ $division->department->name }}
                                </label>
                            </div>
                            <div x-show="isChecked">
                                <div class="d-flex align-items-center">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="targets[{{ $division->id }}]"
                                        id="target-{{ $division->id }}"
                                        placeholder="Target"
                                        value="{{ old('targets.' . $division->id, optional(optional($kpi->divisions->firstWhere('id', $division->id))->pivot)->target) }}">
    
                                    <div class="ms-3 d-flex">
                                        @for ($i = 1; $i <= 4; $i++)
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox" name="quarters[{{ $division->id }}][{{ $i }}]"
                                                    id="q-{{ $division->id }}-{{ $i }}"
                                                    {{ optional(optional($kpi->divisions->firstWhere('id', $division->id))->pivot)['q' . $i] ? ' checked' : '' }}>
                                                <label class="form-check-label" for="q-{{ $division->id }}-{{ $i }}">
                                                    Q{{ $i }}
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>

            @if ($kpi->id)
                <button id="delete-btn" type="button" class="btn btn-link text-danger">
                    Delete
                </button>
            @endif
        </form>

        @if ($kpi->id)
            <form id="delete-form" action="{{ route('kpis.destroy', $kpi) }}" method="POST">
                @csrf
                @method('DELETE')
            </form>
        @endif
    </div>

    @push('scripts')
        <script>
            const deleteBtn = document.querySelector('#delete-btn');
            
            deleteBtn.addEventListener('click', (event) => {
                if(confirm('Are you sure?')) {
                    document.querySelector('#delete-form').submit();
                }
            });
        </script>
    @endpush
</x-layout>