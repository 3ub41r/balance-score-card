<x-layout>
    <div class="container">
        <form action="{{ $perspective->id ? route('perspectives.update', $perspective) : route('perspectives.store') }}" method="POST">
            @csrf

            @if ($perspective->id)
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Perspective</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $perspective->name }}">
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Code</label>
                <input type="text" class="form-control" id="code" name="code" value="{{ $perspective->code }}">
            </div>

            <div class="mb-3">
                <label for="year_implemented">Year Implemented</label>
                <select id="year_implemented" name="year_implemented" class="form-select" aria-label="Default select example">
                    @for ($i = now()->year; $i >= now()->year - 7; $i--)
                        <option value="{{ $i }}"{{ $i == $perspective->year_implemented ? ' selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="perspective_category_id">Perspective Category</label>
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

            <button id="delete-btn" type="button" class="btn btn-link text-danger">
                Delete
            </button>
        </form>

        <form id="delete-form" action="{{ route('perspectives.destroy', $perspective) }}" method="POST">
            @csrf
            @method('DELETE')
        </form>
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