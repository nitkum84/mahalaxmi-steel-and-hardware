@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Location</h4>
                        {{-- <p class="card-description"> Horizontal form layout </p> --}}
                        <form class="forms-sample" method="POST" action="{{ route('admin.location-store') }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Location Name </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" value="{{ old('location_name') }}" name="location_name" placeholder="Enter Location Name...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Location Image <br> <code>size : 300 X 410</code> </label>
                                <div class="col-sm-9">
                                    <input id="serviceImageInput" type="file" class="form-control" name="location_img" value="{{ old('location_img') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Location Image Preview</label>
                                <div class="col-sm-9">
                                    <img id="serviceImagePreview" src="{{ asset('assets/images/default-img.png') }}" alt="" style="max-width: 100%; max-height: 200px;width: 100%;">
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
