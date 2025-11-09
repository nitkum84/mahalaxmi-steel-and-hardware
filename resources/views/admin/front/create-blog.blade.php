@extends('admin.layouts.master')
@section('main')
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    {{-- <p class="card-description"> Horizontal form layout </p> --}}
                    @if(isset($edit) == TRUE)
                        <h4 class="card-title">Update : {{ $blog->blog_head }}</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.blog-update',['id' => $blog->id]) }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Category</label>
                                <div class="col-sm-9">
                                    <select name="blog_category" id="" class="form-control">
                                        <option style="color:#fff;" value="" selected disabled>Select Category</option>
                                        @foreach ($categories as $blogCategory)
                                            <option value="{{ $blogCategory->id }}" {{ $blog->blog_category == $blogCategory->id ? 'selected' : '' }}>
                                                {{ $blogCategory->blog_category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Creator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Creator Name..." name="blog_creator" value="{{ $blog->blog_creator }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Head</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Name..." name="blog_head" value="{{ $blog->blog_head }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Sub Head</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Sub Heading..." name="blog_sub_head" value="{{ $blog->blog_sub_head }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input id="serviceImageInput" type="file" class="form-control" name="blog_img" value="{{ $blog->blog_img }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Preview</label>
                                <div class="col-sm-9">
                                    <img id="serviceImagePreview" src="{{ asset('uploads/'.$blog->blog_img) }}" alt="" style="max-width: 100%; max-height: 200px;width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Blog Description</label>
                                <div class="col-sm-9">
                                    <textarea id="mytextarea" class="form-control" name="blog_desc" id="" placeholder="Blog Description....">{{ $blog->blog_desc }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog SEO Title</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Enter Blog SEO Title..." class="form-control" name="blog_seo_title" value="{{ $blog->blog_seo_title }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog SEO Desc</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Enter Blog SEO Desc..." class="form-control" name="blog_seo_desc">{{ $blog->blog_seo_desc }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    @else
                        <h4 class="card-title">Add New Blog</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.blog-store') }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Category</label>
                                <div class="col-sm-9">
                                    <select name="blog_category" id="" class="form-control">
                                        <option style="color:#fff;" value="" selected disabled>Select Category</option>
                                        @foreach ($categories as $blogCategoriesFetch)
                                            <option value="{{ $blogCategoriesFetch->id }}">{{ $blogCategoriesFetch->blog_category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Creator</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Creator Name..." name="blog_creator" value="{{ old('blog_creator') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Head</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Name..." name="blog_head" value="{{ old('blog_head') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Sub Head</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Blog Sub Heading..." name="blog_sub_head" value="{{ old('blog_sub_head') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Image</label>
                                <div class="col-sm-9">
                                    <input id="serviceImageInput" type="file" class="form-control" name="blog_img" value="{{ old('blog_img') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog Preview</label>
                                <div class="col-sm-9">
                                    <img id="serviceImagePreview" src="{{ asset('assets/images/default-img.png') }}" alt="" style="max-width: 100%; max-height: 200px;width: 100%;">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Blog Description</label>
                                <div class="col-sm-9">
                                    <textarea id="mytextarea" class="form-control" name="blog_desc" id="" placeholder="Blog Description....">{{ old('blog_desc') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog SEO Title</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Enter Blog SEO Title..." class="form-control" name="blog_seo_title" value="{{ old('blog_seo_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Blog SEO Desc</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Enter Blog SEO Desc..." class="form-control" name="blog_seo_desc">{{ old('blog_seo_desc') }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
