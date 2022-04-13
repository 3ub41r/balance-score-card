<x-layout>
    <div class="container">
        <x-kpi-tabs />

        @if ($perspectives->isEmpty())
            <div class="text-center my-5">
                <h5 class="fw-bold my-3">You have not added any perspectives.</h5>

                <a href="{{ route('perspectives.create') }}" class="btn btn-success my-3">
                    New Perspective
                </a>
            </div>
        @else
            <a href="{{ route('perspectives.create') }}" class="btn btn-success mb-3">
                New Perspective
            </a>

            <div class="list-group mb-4">
                @foreach ($perspectives as $perspective)
                    <a href="{{ route('perspectives.edit', $perspective) }}" class="list-group-item list-group-item-action">
                        {{ $perspective->code }}: {{ $perspective->name }}
                    </a>
                @endforeach
            </div>        
        @endif
    </div>
</x-layout>