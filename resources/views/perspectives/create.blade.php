<x-layout>
    <div class="container my-4">
        <form action="{{ $perspective->id ? route('perspectives.update', $perspective) : route('perspectives.store') }}" method="POST">
            @csrf

            @if ($perspective->id)
                @method('PUT')
            @endif

            <div class="row g-3 align-items-center mb-3">
                <div class="col-2">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" id="code" name="code" value="{{ old('code', $perspective->code) }}">
                    @error('code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="name" class="form-label">Perspective</label>
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $perspective->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <input type="hidden" name="year_implemented" value="{{ session('year') ?? now()->year }}">

            <div class="mb-3">
                <label for="perspective_category_id" class="form-label">Perspective Category</label>
                <select id="perspective_category_id" name="perspective_category_id" class="form-select" aria-label="Default select example">
                    @foreach ($perspectiveCategories as $perspectiveCategory)
                        <option value="{{ $perspectiveCategory->id }}"{{ $perspectiveCategory->id == $perspective->perspective_category_id ? ' selected' : '' }}>
                            {{ $perspectiveCategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Save
            </button>

            @if ($perspective->id)
                <button id="delete-btn" type="button" class="btn btn-link text-danger">
                    Delete
                </button>
            @endif
        </form>

        @if ($perspective->id)
            <form id="delete-form" action="{{ route('perspectives.destroy', $perspective) }}" method="POST">
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