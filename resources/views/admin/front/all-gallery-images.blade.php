@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Gallery Images</h4>
                    <p class="card-description"> Here you get all data comming from<code> Gallery Images </code>
                    {{-- <p class="card-description"> <code> Double Click to Edit Amenity Name </code> --}}
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Image </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="checkbox">
                                    </td>
                                    <td> 1 </td>
                                    <td> Theater </td>
                                    <td>
                                        <a type="button" class="btn btn-outline-danger btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
