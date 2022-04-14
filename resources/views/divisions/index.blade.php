<x-layout>
    <div class="container">
        <x-kpi-tabs />

        @if ($divisions->isEmpty())
            <div class="text-center my-5">
                <h5 class="fw-bold my-3">You have not added any divisions.</h5>

                <a href="{{ route('divisions.create') }}" class="btn btn-success my-3">
                    New Division
                </a>
            </div>
        @else
            <a href="{{ route('divisions.create') }}" class="btn btn-success mb-3">
                New Division
            </a>

            <div class="list-group mb-4">
                @foreach ($divisions as $division)
                    <a href="{{ route('divisions.edit', $division) }}" class="list-group-item list-group-item-action">
                        {{ $division->name }}
                    </a>
                @endforeach
            </div>        
        @endif
    </div>
</x-layout>