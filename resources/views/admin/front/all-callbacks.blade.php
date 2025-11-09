@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Call Backs</h4>
                    <p class="card-description"> Here you get all data comming from <code> Call Backs Forms</code>
                    </p>
                    <div class="table-responsive">
                        <table id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Mobile </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($callbacks as $callback)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select_all_callback">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> <a href="tel:{{ $callback->mobile_number }}" class="btn btn-info btn-rounded btn-fw"> Call {{ $callback->mobile_number }}</a> </td>
                                    <td>
                                        <form id="deleteForm{{ $callback->id }}" action="{{ route('callback.delete', $callback->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-callback-id="{{ $callback->id }}">
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
            var callbackId = $(this).data('callback-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {

                $.ajax({
                    // url: 'enquiry/delete/' + callbackId,
                    url: '{{ route('callback.delete', ['id' => ':callbackId']) }}'.replace(':callbackId', callbackId),
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-callback-requests') }}";
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
