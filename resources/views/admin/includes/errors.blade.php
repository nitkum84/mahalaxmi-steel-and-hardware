@if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-dismissible fade show py-2 bg-warning">
        <div class="d-flex align-items-center">
            <div class="fs-3 text-dark"><ion-icon name="warning-sharp" role="img" class="md hydrated" aria-label="warning sharp"></ion-icon>
            </div>
            <div class="ms-3">
                <div class="text-dark">{{ $error }}</div>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
@endif
@if(session('error'))
<div class="alert alert-dismissible fade show py-2 bg-danger">
    <div class="d-flex align-items-center">
        <div class="fs-3 text-white"><ion-icon name="close-circle-sharp" role="img" class="md hydrated" aria-label="close circle sharp"></ion-icon>
        </div>
        <div class="ms-3">
            <div class="text-white">{{ session('error') }}</div>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
