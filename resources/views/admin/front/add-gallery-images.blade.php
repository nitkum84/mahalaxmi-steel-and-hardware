@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Gallery Images</h4>
                        {{-- <p class="card-description"> Horizontal form layout </p> --}}
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Add Multiple Gallery Images </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="" value="{{ old('gallery_img') }}" name="gallery_img[]" multiple>
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
