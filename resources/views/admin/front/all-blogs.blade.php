@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Blogs</h4>
                    <p class="card-description"> Here you get all data comming from<code> Create Blog </code>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox" name="select_all_blogs" id="select_all_blogs"> </th>
                                    <th> Sr No. </th>
                                    <th> Blog Name </th>
                                    <th> Blog Creator </th>
                                    <th> Blog Image </th>
                                    <th> Edit </th>
                                    <th> Delete </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select_all_blogs" id="select_all_blogs">
                                    </td>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $blog->blog_head }} </td>
                                    <td>
                                        {{ $blog->blog_creator }}
                                    </td>
                                    <td>
                                        <img style="width: 100px;height: auto;border-radius: 1000px;" src="{{ asset('uploads/'.$blog->blog_img) }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.blog-edit',['id' => $blog->id]) }}" class="btn btn-outline-secondary btn-icon-text"> Edit <i class="mdi mdi-file-check btn-icon-append"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form id="deleteForm{{ $blog->id }}" action="{{ route('admin.blog-category-delete', $blog->id) }}" method="DELETE">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-outline-danger btn-icon-text delete-btn" data-blog-id="{{ $blog->id }}">
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
            var blogId = $(this).data('blog-id');

            // Display confirmation dialog
            if (confirm('Are you sure you want to delete this record?')) {
                // Ajax request to delete the blog category
                $.ajax({
                    url: '/admin/blog/delete/' + blogId,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        // Display success message
                        alert('Record deleted successfully');
                        window.location.href = "{{ route('admin.all-blogs') }}";
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
