@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Categories</h4>
                    <p class="card-description"> Here you get all data comming from<code> Create Product Category </code>
                    <p class="card-description"> <code> Double Click to Edit Category Name </code>
                    </p>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # <input type="checkbox" name="select_all_property_categories"> </th>
                                    <th> Sr No. </th>
                                    <th> Category Name </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($propertyCategories as $propertyCategoriesFetch)
                                <tr data-id="{{ $propertyCategoriesFetch->id }}">
                                    <td>
                                        <input type="checkbox" name="select_all_property_categories">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td
                                    class="editable" data-field="property_category_name"> {{ $propertyCategoriesFetch->property_category_name }} </td>
                                    <td>
                                        <form id="deleteForm{{ $propertyCategoriesFetch->id }}" action="{{ route('admin.property-category-delete', $propertyCategoriesFetch->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-property-id="{{ $propertyCategoriesFetch->id }}">
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
            url: '/admin/product/category/update/' + id,
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
            var propertyId = $(this).data('property-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {
                // Ajax request to delete the blog category
                $.ajax({
                    url: '/admin/product/category/delete/' + propertyId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-property-categories') }}";
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
