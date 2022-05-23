<x-pic-layout>
    <div class="container">
        <h1 class="my-3">Hi {{ $staff->name }}</h1>

        <div class="row my-4 gx-4">
            @if ($staff->pic_divisions->isNotEmpty() && $keyInQuarter)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="mb-3">You are the PIC for</h5>
                
                            <ul>
                                @foreach ($staff->pic_divisions as $picDivision)
                                    <li>
                                        {{ $picDivision->department->name }}
                                    </li>
                                @endforeach
                            </ul>
                
                            <p>
                                Please update the KPIs before <strong>{{ $keyInQuarter->key_in_ends_on->format('l, jS F Y') }}</strong>.
                            </p>
                
                            <a href="{{ route('pic.kpis.index') }}" class="btn btn-primary">
                                Update KPIs
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif

            @if ($staff->approver_divisions->isNotEmpty() && $approvalQuarter)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="mb-3">You are the approver for</h5>
                
                            <ul>
                                @foreach ($staff->approver_divisions as $approverDivision)
                                    <li>
                                        {{ $approverDivision->department->name }}
                                    </li>
                                @endforeach
                            </ul>
                
                            <p>
                                Please approve the KPIs before <strong>{{ $approvalQuarter->key_in_ends_on->format('l, jS F Y') }}</strong>.
                            </p>
                
                            <a href="{{ route('approver.kpis.index') }}" class="btn btn-primary">
                                Approve KPIs
                                <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-pic-layout>