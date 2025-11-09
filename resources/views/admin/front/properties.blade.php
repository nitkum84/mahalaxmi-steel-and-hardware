@extends('admin.layouts.master')
@section('main')
<style>
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 80px;
        height: 40px;
        cursor: pointer;
    }

    .toggle-switch input[type="checkbox"] {
        display: none;
    }

    .toggle-switch-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ddd;
        border-radius: 20px;
        box-shadow: inset 0 0 0 2px #ccc;
        transition: background-color 0.3s ease-in-out;
    }

    .toggle-switch-handle {
        position: absolute;
        top: 5px;
        left: 5px;
        width: 30px;
        height: 30px;
        background-color: #fff;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out;
    }

    .toggle-switch::before {
        content: "";
        position: absolute;
        top: -25px;
        right: -35px;
        font-size: 12px;
        font-weight: bold;
        color: #aaa;
        text-shadow: 1px 1px #fff;
        transition: color 0.3s ease-in-out;
    }

    .toggle-switch input[type="checkbox"]:checked + .toggle-switch-handle {
        transform: translateX(45px);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2), 0 0 0 3px #05c46b;
    }

    .toggle-switch input[type="checkbox"]:checked + .toggle-switch-background {
        background-color: #05c46b;
        box-shadow: inset 0 0 0 2px #04b360;
    }

    .toggle-switch input[type="checkbox"]:checked + .toggle-switch:before {
        content: "On";
        color: #05c46b;
        right: -15px;
    }

    .toggle-switch input[type="checkbox"]:checked + .toggle-switch-background .toggle-switch-handle {
        transform: translateX(40px);
    }

</style>
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Products</h4>
                    <p class="card-description"> Here you get all data comming from<code> Products </code>
                    </p>
                    <div class="table-responsive">
                        <table id="example" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Status </th>
                                    <th> Product Name </th>
                                    <th> Value </th>
                                    <th> Image </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($properties as $property)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="select_all_properties">
                                        </td>
                                        <td> {{ $loop->iteration }}</td>
                                        <td>
                                            <form id="statusForm_{{ $property->id }}" action="{{ route('admin.update-property-status', ['id' => $property->id]) }}" method="put" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <input type="hidden" name="status" value="{{ $property->status }}">
                                                <label class="toggle-switch">
                                                    <input type="checkbox" class="status-toggle" {{ $property->status ? 'checked' : '' }}>
                                                    <div class="toggle-switch-background">
                                                        <div class="toggle-switch-handle"></div>
                                                    </div>
                                                </label>
                                            </form>
                                        </td>
                                        <td> {{ $property->property_name }} </td>
                                        <td>
                                            {{ $property->property_value }}
                                        </td>
                                        <td>
                                            @php
                                                $images = json_decode($property->property_img, true);
                                                $firstImage = isset($images[0]) ? $images[0] : null;
                                            @endphp
                                            @if($firstImage)
                                                <img style="width: 100px; height: 100px; border-radius: 1000px;" src="{{ asset('uploads/' . $firstImage) }}" alt="">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.property-view',['id' => $property->id]) }}" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form id="deleteForm{{ $property->id }}" action="{{ route('admin.property-delete', $property->id) }}" method="DELETE">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-property-id="{{ $property->id }}">
                                                    <i class="mdi mdi-upload btn-icon-prepend"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        // Delete button click event handler
        $('.delete-btn').click(function() {
            var propertyId = $(this).data('property-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {

                $.ajax({
                    url: 'product/delete/' + propertyId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-properties') }}";
                    },
                    error: function(xhr, status, error) {
                        // Display error message
                        alert('An error occurred while deleting the record.');
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.status-toggle').change(function () {
            var statusForm = $(this).closest('form'); // Get the closest form to the changed checkbox
            $.ajax({
                type: 'POST',
                url: statusForm.attr('action'),
                data: statusForm.serialize(),
                success: function (response) {
                    console.log(response);
                    alert('Status Updated Successfully!');
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection
