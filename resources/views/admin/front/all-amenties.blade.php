@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Amenities</h4>
                    <p class="card-description"> Here you get all data comming from<code> Add Property Amenities </code>
                    <p class="card-description"> <code> Double Click to Edit Amenity Name </code>
                    </p>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Amenity Name </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($amenities as $amenity)
                                <tr data-id="{{ $amenity->id }}">
                                    <td>
                                        <input type="checkbox" name="select_all_amenities">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td class="editable" data-field="amenity_name"> {{ $amenity->amenity_name }} </td>
                                    <td>
                                        <form id="deleteForm{{ $amenity->id }}" action="{{ route('admin.property-amenity-delete', $amenity->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-amenity-id="{{ $amenity->id }}">
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
            url: '/admin/property/amenity/update/' + id,
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
            var amenityId = $(this).data('amenity-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {

                $.ajax({
                    url: '/admin/property/amenity/delete/' + amenityId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-property-amenties') }}";
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
