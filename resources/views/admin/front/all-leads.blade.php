@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Enquiry | Contact - Leads</h4>
                    <p class="card-description"> Here you get all data comming from <code>.Quick Enquiry & Contact Forms</code>
                    </p>
                    <div class="table-responsive">
                        <table  id="example2" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Sr No. </th>
                                    <th> Page URL </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Mobile </th>
                                    <th> Requirement </th>
                                    <th> Message </th>
                                    <th> Date </th>
                                    {{-- <th> Edit </th> --}}
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select_all_leads">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> <a class="btn btn-outline-danger btn-icon-text" href="{{ $enquiry->page_url }}">Visit : {{ $enquiry->page_url ?? 'N/A' }}</a> </td>
                                    <td> {{ $enquiry->name }} </td>
                                    <td> <a class="btn btn-outline-success btn-icon-text" href="{{ $enquiry->email }}">Mailto : {{ $enquiry->email }}</a> </td>
                                    <td> <a class="btn btn-outline-info btn-icon-text" href="tel:{{ $enquiry->mobile_number }}">Call : {{ $enquiry->mobile_number }}</a> </td>
                                    <td> {{ $enquiry->requirement ?? 'N/A' }} </td>
                                    <td> {{ $enquiry->message ?? 'N/A' }} </td>
                                    <td> {{ $enquiry->created_at }} </td>
                                    {{-- <td>
                                        <a type="button" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>
                                    </td> --}}
                                    <td>
                                        <form id="deleteForm{{ $enquiry->id }}" action="{{ route('enquiry.delete', $enquiry->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-enquiry-id="{{ $enquiry->id }}">
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
            var enquiryId = $(this).data('enquiry-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {

                $.ajax({
                    // url: 'enquiry/delete/' + enquiryId,
                    url: '{{ route('enquiry.delete', ['id' => ':enquiryId']) }}'.replace(':enquiryId', enquiryId),
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-leads') }}";
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
