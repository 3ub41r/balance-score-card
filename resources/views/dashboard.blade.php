<x-pic-layout>
    <div class="container">
        <h1 class="mb-3">Hi {{ $staff->name }}</h1>

        @if ($staff->pic_divisions->isNotEmpty())
            <h4 class="mb-3">You are the PIC for</h4>

            <div class="list-group mb-4">
                @foreach ($staff->pic_divisions as $picDivision)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $picDivision->department->name }}
                        <i class="bi bi-arrow-right-short"></i>
                    </div>
                @endforeach
            </div>
        @endif

        @if ($staff->approver_divisions->isNotEmpty())
            <h4 class="mb-3">You are the approver for</h4>

            <div class="list-group mb-4">
                @foreach ($staff->approver_divisions as $approverDivision)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $approverDivision->department->name }}
                        <i class="bi bi-arrow-right-short"></i>
                    </div>
                @endforeach
            </div>
        @endif
        


    </div>
</x-pic-layout>