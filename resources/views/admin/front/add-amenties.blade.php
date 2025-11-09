@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Amenities</h4>
                        {{-- <p class="card-description"> Horizontal form layout </p> --}}
                        <form class="forms-sample" method="POST" action="{{ route('admin.property-amenity-store') }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Amenities </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" value="{{ old('amenity_name') }}" name="amenity_name" placeholder="Amenities Name...">
                                </div>
                            </div>

                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-dark" type="reset">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
