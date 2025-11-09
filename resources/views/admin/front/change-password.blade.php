@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Change Password</h4>
                        {{-- <p class="card-description"> Horizontal form layout </p> --}}
                        <form class="forms-sample" method="POST" action="{{ route('admin.password-update',['id' => Auth::user()->id ]) }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" value="{{ old('new_password') }}" name="new_password" placeholder="Enter New Password...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Confirm Password </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="" value="{{ old('confirm_password') }}" name="confirm_password" placeholder="Enter Confirm Password...">
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
