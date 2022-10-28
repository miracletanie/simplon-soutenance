@if (session('success'))

<div class="alert alert-success" role="alert">

    <div class="alert-body">
        <strong><i class="me-1" data-feather="check"></i>Informations :</strong>
        <hr>
        {{-- {{ __(session('info')) }} --}}
        {{ session('success') }}
    </div>
</div>
@endif
