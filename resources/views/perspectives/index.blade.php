<x-layout>
    <div class="container">
        <x-kpi-tabs />

        <a href="{{ route('perspectives.create') }}" class="btn btn-success my-3">
            New Perspective
        </a>

        <div class="list-group mb-4">
            @foreach ($perspectives as $perspective)
                <a href="{{ route('perspectives.edit', $perspective) }}" class="list-group-item list-group-item-action">
                    {{ $perspective->code }}: {{ $perspective->name }}
                </a>
            @endforeach
        </div>        
    </div>
</x-layout>