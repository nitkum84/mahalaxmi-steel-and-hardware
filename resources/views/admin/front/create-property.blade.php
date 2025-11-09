@extends('admin.layouts.master')
@section('main')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<style>
    .mult-select-tag ul li {
    color: #000 !important;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="main-panel">
    <div class="content-wrapper">
        @include('admin.sections.breadcrumbs')
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    {{-- <p class="card-description"> Horizontal form layout </p> --}}
                    @if(isset($edit) == TRUE)
                    <h4 class="card-title">Update | {{ $property->property_name }}</h4>
                        <form class="forms-sample" method="post" action="{{ route('admin.property-update',['id' => $property->id ]) }}" enctype="multipart/form-data" >
                            @include('admin.includes.errors')
                            @include('admin.includes.message')
                            @csrf
                            {{-- <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Location</label>
                                <div class="col-sm-9">
                                    <select name="property_location" id="" class="form-control">
                                        <option value="" disabled>Select Location</option>
                                        @foreach($locationGlobal as $locationGlobalFetch)
                                            <option value="{{ $locationGlobalFetch->id }}" {{ old('property_location', $property->property_location) == $locationGlobalFetch->id ? 'selected' : '' }}>
                                                {{ $locationGlobalFetch->location_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Category</label>
                                <div class="col-sm-9">
                                    <select name="property_category" id="" class="form-control">
                                        <option value="" disabled>Select Category</option>
                                        @foreach($propertyCategoriesGlobal as $propertyCategory)
                                            <option value="{{ $propertyCategory->id }}" {{ old('property_category', $property->property_category) == $propertyCategory->id ? 'selected' : '' }}>
                                                {{ $propertyCategory->property_category_name }}
                                            </option>
                                        @endforeach
                                    </select>


                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Product Name..." name="property_name" value="{{ old('property_name', $property->property_name ?? '') }}">

                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Select Product Amenities</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="amenities[]" id="countries" multiple>
                                        <option value="" selected disabled>Select Amenities</option>
                                        @foreach($amenityCategoriesGlobal as $amenity)
                                            <option value="{{ $amenity->amenity_name }}" {{ in_array($amenity->amenity_name, old('amenities', explode(',', $property->property_amenities))) ? 'selected' : '' }}>
                                                {{ $amenity->amenity_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Image <code>Leave this remain unchanged images</code> </label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="property_img[]" multiple id="serviceImageInput" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group row">
                                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Image Preview <code>Only 1st Image Preview</code></label>
                                    <div class="col-sm-9">
                                        <img id="serviceImagePreview" src="{{ $property->property_img ? asset('uploads/' . json_decode($property->property_img)[0]) : asset('assets/images/default-img.png') }}" alt="" style="max-width: 100%; max-height: 200px;width: 100%;">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Description</label>
                                <div class="col-sm-9">
                                    <textarea id="mytextarea" class="form-control" name="property_desc" placeholder="Product Description....">{{ old('property_desc', $property->property_desc ?? '') }}</textarea>

                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Bedrooms
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Bedrooms..." name="property_bedrooms" value="{{ old('property_bedrooms', $property->property_bedrooms ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Bathrooms
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Bathrooms..." name="property_bathrooms" value="{{ old('property_bathrooms', $property->property_bathrooms ?? '' ) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Area
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Area in sqft..." name="property_area" value="{{ old('property_area', $property->property_area ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Garages
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Garages..." name="property_garages" value="{{ old('property_garages', $property->property_garages ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Year Built
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Year Built 20XX..." name="property_year" value="{{ old('property_year', $property->property_year ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Product Plot Size
                                        </label>
                                        <input type="number" class="form-control" placeholder="Enter Product Plot Size in sqft..." name="property_plot_size" value="{{ old('property_plot_size', $property->property_plot_size ?? '') }}">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Google Map Location (Google Maps Emebed Url)</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Enter Google Map Location (Google Maps Emebed Url)..." class="form-control" name="property_map_url">{{ old('property_map_url', $property->property_map_url ?? '') }}</textarea>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Address</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Enter Product Address..." class="form-control" name="property_address" value="{{ old('property_address', $property->property_address ?? '') }}">
                                </div>
                            </div> --}}
                            {{-- <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Mobile Number</label>
                                <div class="col-sm-9">
                                    <input type="number" placeholder="Enter Product Mobile Number..." class="form-control" name="property_mobile_num" value="{{ old('property_mobile_num', $property->property_mobile_num ?? '') }}">
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Value</label>
                                <div class="col-sm-9">
                                    <input type="text" id="productValue" placeholder="Enter Product Value..." class="form-control" name="property_value" value="{{ old('property_value', $property->property_value ?? '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product Discount (%)</label>
                                <div class="col-sm-9">
                                    <input type="number" id="productDiscount" placeholder="Enter Product Discount in Percentage..." class="form-control" name="property_discount" value="{{ old('property_discount', $property->property_discount ?? '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Actual Price</label>
                                <div class="col-sm-9">
                                    <input style="background: #59565600; color: lime;font-weight: 800;font-size: 24px;" type="text" class="form-control" id="actualPrice" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product SEO Title</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Enter Product SEO Title..." class="form-control" name="property_seo_title" value="{{ old('property_seo_title', $property->property_seo_title ?? '') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label">Product SEO Desc</label>
                                <div class="col-sm-9">
                                    <textarea type="text" placeholder="Enter Product SEO Desc..." class="form-control" name="property_seo_desc">{{ old('property_seo_desc', $property->property_seo_desc ?? '') }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    @else
                    <h4 class="card-title">Add New Product</h4>
                    <form class="forms-sample" method="post" action="{{ route('admin.property-store') }}" enctype="multipart/form-data" >
                        @include('admin.includes.errors')
                        @include('admin.includes.message')
                        @csrf
                        {{-- <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Location</label>
                            <div class="col-sm-9">
                                <select name="property_location" id="" class="form-control">
                                    <option value="" disabled>Select Location</option>
                                    @foreach($locationGlobal as $locationGlobalFetch)
                                        <option value="{{ $locationGlobalFetch->id }}" {{ old('property_location') == $locationGlobalFetch->id ? 'selected' : '' }}>
                                            {{ $locationGlobalFetch->location_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Category</label>
                            <div class="col-sm-9">
                                <select name="property_category" id="" class="form-control">
                                    <option value="" disabled>Select Category</option>
                                    @foreach($propertyCategoriesGlobal as $propertyCategory)
                                        <option value="{{ $propertyCategory->id }}" {{ old('property_category') == $propertyCategory->id ? 'selected' : '' }}>
                                            {{ $propertyCategory->property_category_name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter Product Name..." name="property_name" value="{{ old('property_name') }}">
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Select Product Amenities</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="amenities[]" id="countries" multiple>
                                    <option value="" selected disabled >Select Amenities</option>
                                    @foreach($amenityCategoriesGlobal as $amenityCategoriesGlobalFetch)
                                    <option value="{{ $amenityCategoriesGlobalFetch->amenity_name }}">{{ $amenityCategoriesGlobalFetch->amenity_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="property_img[]" multiple id="serviceImageInput" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Image Preview</label>
                            <div class="col-sm-9">
                                <img id="serviceImagePreview" src="{{ asset('assets/images/default-img.png') }}" alt="" style="max-width: 100%; max-height: 200px;width: 100%;">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Description</label>
                            <div class="col-sm-9">
                                <textarea id="mytextarea" class="form-control" name="property_desc" id="" placeholder="Product Description....">{{ old('property_desc') }}</textarea>
                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Bedrooms
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Bedrooms..." name="property_bedrooms" value="{{ old('property_bedrooms') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Bathrooms
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Bathrooms..." name="property_bathrooms" value="{{ old('property_bathrooms') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Area
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Area in sqft..." name="property_area" value="{{ old('property_area') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Garages
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Garages..." name="property_garages" value="{{ old('property_garages') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Year Built
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Year Built 20XX..." name="property_year" value="{{ old('property_year') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="" class="col-form-label">Product Plot Size
                                    </label>
                                    <input type="number" class="form-control" placeholder="Enter Product Plot Size in sqft..." name="property_plot_size" value="{{ old('property_plot_size') }}">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Google Map Location (Google Maps Emebed Url)</label>
                            <div class="col-sm-9">
                                <textarea type="text" placeholder="Enter Google Map Location (Google Maps Emebed Url)..." class="form-control" name="property_map_url">{{ old('property_map_url') }}</textarea>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Address</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Enter Product Address..." class="form-control" name="property_address" value="{{ old('property_address') }}">
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Mobile Number</label>
                            <div class="col-sm-9">
                                <input type="number" placeholder="Enter Product Mobile Number..." class="form-control" name="property_mobile_num" value="{{ old('property_mobile_num') }}">
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Value</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Enter Product Value..." class="form-control" id="productValue" name="property_value" value="{{ old('property_value') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product Discount (%)</label>
                            <div class="col-sm-9">
                                <input type="number" placeholder="Enter Product Discount in Percentage..." class="form-control" id="productDiscount" name="property_discount" value="{{ old('property_discount', $property->property_discount ?? '') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Actual Price</label>
                            <div class="col-sm-9">
                                <input style="background: #59565600; color: lime;font-weight: 800;font-size: 24px;" type="text" class="form-control" id="actualPrice" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product SEO Title</label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Enter Product SEO Title..." class="form-control" name="property_seo_title" value="{{ old('property_seo_title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label">Product SEO Desc</label>
                            <div class="col-sm-9">
                                <textarea type="text" placeholder="Enter Product SEO Desc..." class="form-control" name="property_seo_desc">{{ old('property_seo_desc') }}</textarea>
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

<script>
    new MultiSelectTag('countries', {
    rounded: true,    // default true
    shadow: true,      // default false
    placeholder: 'Search',  // default Search...
    tagColor: {
        textColor: '#327b2c',
        borderColor: '#92e681',
        bgColor: '#eaffe6',
    },
    onChange: function(values) {
        console.log(values)
    }
})

$(document).ready(function(){
    // Image preview
    $("#serviceImageInput").change(function(){
        readURL(this);
    });

    // Function to read URL and display image preview
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#serviceImagePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
});
</script>
<script>
    document.getElementById('productValue').addEventListener('input', calculateActualPrice);
    document.getElementById('productDiscount').addEventListener('input', calculateActualPrice);

    function calculateActualPrice() {
        const value = parseFloat(document.getElementById('productValue').value) || 0;
        const discount = parseFloat(document.getElementById('productDiscount').value) || 0;

        // Calculate the discount amount
        const discountAmount = (value * discount) / 100;

        // Calculate the actual price
        const actualPrice = value - discountAmount;

        // Set the actual price in the read-only input
        document.getElementById('actualPrice').value = actualPrice.toFixed(2);
    }
</script>
@endsection
