@if ($errors->any())
<div class="alert alert-danger" role="alert">

    <div class="alert-body">
        <strong><i class="me-1" data-feather="alert-triangle"></i>Attention:</strong>
        <br>
        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>
                    {{ __($error) }}
                    {{-- {{ $error }} --}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
