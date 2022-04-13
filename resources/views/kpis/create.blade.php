<x-layout>
    <div class="container">
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
                <label class="mb-2" for="floatingTextarea">Operational Definition (OD)</label>
                <textarea name="od" class="form-control{{ $errors->has('od') ? ' is-invalid' : '' }}" id="floatingTextarea" style="height: 200px">{{ old('od', $kpi->od) }}</textarea>

                @error('od')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="row mb-3">
                <div class="col-2">
                    <label for="target" class="form-label">Target</label>
                    <input type="text" class="form-control" id="target" name="target" value="{{ old('target', $kpi->target) }}">
                </div>
            </div>

            <div class="mb-3">
                <label for="perspective_id">Perspective Category</label>
                <select id="perspective_id" name="perspective_id" class="form-select" aria-label="Default select example">
                    @foreach ($perspectives as $perspective)
                        <option value="{{ $perspective->id }}"{{ $perspective->id == $kpi->perspective_id ? ' selected' : '' }}>
                            {{ $perspective->code }}: {{ $perspective->name }}
                        </option>
                    @endforeach
                </select>
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
            <form id="delete-form" action="{{ route('perspectives.destroy', $kpi) }}" method="POST">
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