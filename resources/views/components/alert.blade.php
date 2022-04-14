@if (session('message'))
    <div class="alert alert-primary rounded-0 border-top-0 shadow-sm alert-dismissible">
        <div class="container">
            {{ session('message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif