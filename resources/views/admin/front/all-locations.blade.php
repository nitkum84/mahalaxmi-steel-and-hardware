@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Locations</h4>
                    <p class="card-description"> Here you get all data comming from<code> Add Location </code>
                    <p class="card-description"> <code> Double Click to Edit location Name </code>
                    </p>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Location Name </th>
                                    <th> Location Image </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $location)
                                <tr data-id="{{ $location->id }}">
                                    <td>
                                        <input type="checkbox" name="select_all_locations">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td class="editable" data-field="location_name"> {{ $location->location_name }} </td>
                                    <td>
                                        <img style="width:100px;height:100px;" src="{{ asset('uploads/'.$location->location_img) }}" alt="">
                                    </td>
                                    <td>
                                        <form id="deleteForm{{ $location->id }}" action="{{ route('admin.location-delete', $location->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-location-id="{{ $location->id }}">
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
        $('td.editable').on('dblclick', function() {
            var originalContent = $(this).text();

            $(this).addClass('edit-mode');
            $(this).html('<input type="text" value="' + originalContent + '" />');

            $(this).children().first().focus();

            $(this).children().first().keypress(function(e) {
                if(e.which == 13) { // Enter key pressed
                    var newContent = $(this).val();
                    var element = $(this).parent();
                    element.removeClass('edit-mode');
                    element.html(newContent);

                    updateCategory(element.parent().data('id'), element.data('field'), newContent);
                }
            });

            $(this).children().first().blur(function() {
                $(this).parent().removeClass('edit-mode');
                $(this).parent().text(originalContent);
            });
        });
    });

    function updateCategory(id, field, value) {
        $.ajax({
            url: '/admin/location/update/' + id,
            type: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",
                field: field,
                value: value
            },
            success: function(response) {
                alert('Updated Successfully....');
            },
            error: function(response) {
                alert('Something went wrong !....');
            }
        });
    }
    $(document).ready(function() {
        // Delete button click event handler
        $('.delete-btn').click(function() {
            var locationId = $(this).data('location-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {

                $.ajax({
                    url: '/admin/location/delete/' + locationId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-locations') }}";
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
@endsection
