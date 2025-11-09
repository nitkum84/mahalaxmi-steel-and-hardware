<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Amenity;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\Location;
use App\Models\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function storePropertyCategory(Request $request)
    {
        $validatedData = $request->validate([
            'property_category_name' => 'required|string|max:255|unique:property_categories',
        ]);
        $propertyCategory = new PropertyCategory();
        $propertyCategory->property_category_name = $validatedData['property_category_name'];
        $propertyCategory->property_category_slug = $slug = \Illuminate\Support\Str::slug($validatedData['property_category_name'], '-');
        $propertyCategory->save();
        Log::create([
            'action' => 'Admin created Product category',
            'description' => 'Product category titled "' . $propertyCategory->property_category_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success', 'Property Category Created Successfully !');
    }
    public function updatePropertyCategory(Request $request, $id)
    {
        $category = PropertyCategory::find($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $field = $request->input('field');
        $value = $request->input('value');
        $category->$field = $value;
        if ($field === 'property_category_name') {
            $category->property_category_slug = Str::slug($value, '-');
        }
        // $category->$field = $value;
        $category->save();
        Log::create([
            'action' => 'Admin updated Product category',
            'description' => 'Product titled "' . $category->property_category_name . '" was updated by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return response()->json(['success' => 'Category updated successfully']);
    }
    public function deletePropertyCategory($id)
    {
        $propertyCategory = PropertyCategory::findOrFail($id);
        $propertyCategory->delete();
        Log::create([
            'action' => 'Admin Deleted Product category',
            'description' => 'Product category titled "' . $propertyCategory->property_category_name . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Product category deleted successfully.');
        return response()->json(['message' => 'Product category deleted successfully.', 200]);
    }
    public function storeAmenity(Request $request)
    {
        $validatedData = $request->validate([
            'amenity_name' => 'required|string|max:255|unique:amenities',
        ]);
        $amenity = new Amenity();
        $amenity->amenity_name = $validatedData['amenity_name'];
        $amenity->amenity_slug = $slug = \Illuminate\Support\Str::slug($validatedData['amenity_name'], '-');
        $amenity->save();
        Log::create([
            'action' => 'Admin created amenity',
            'description' => 'Amenity titled "' . $amenity->amenity_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success', 'Amenity Created Successfully !');
    }
    public function updateAmenity(Request $request, $id)
    {
        $amenity = Amenity::find($id);
        if (!$amenity) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $field = $request->input('field');
        $value = $request->input('value');
        $amenity->$field = $value;
        if ($field === 'amenity_name') {
            $amenity->amenity_slug = Str::slug($value, '-');
        }
        // $category->$field = $value;
        $amenity->save();
        Log::create([
            'action' => 'Admin updated amenity',
            'description' => 'Amenity titled "' . $amenity->amenity_name . '" was updated by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return response()->json(['success' => 'Amenity updated successfully']);
    }
    public function deleteAmenity($id)
    {
        $amenity = Amenity::findOrFail($id);
        $amenity->delete();
        Log::create([
            'action' => 'Admin Deleted Amenity',
            'description' => 'Amenity titled "' . $amenity->amenity_name . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Amenity deleted successfully.');
        return response()->json(['message' => 'Amenity deleted successfully.', 200]);
    }
    public function locationStore(Request $request)
    {
        $validatedData = $request->validate([
            'location_name' => 'required|string|max:255|unique:locations',
            'location_img' => 'required|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        if ($request->hasFile('location_img')) {
            $imageName = uniqid() . '.' . $request->file('location_img')->extension();
            $request->file('location_img')->move(public_path('uploads'), $imageName);
        } else {
            $imageName = 'default.jpg';
        }
        $location = new Location();
        $location->location_name = $validatedData['location_name'];
        $location->location_slug = $slug = \Illuminate\Support\Str::slug($validatedData['location_name'], '-');
        $location->location_img = $imageName;
        $location->save();
        Log::create([
            'action' => 'Admin created location',
            'description' => 'location titled "' . $location->location_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return back()->with('success', 'location Created Successfully !');
    }
    public function locationUpdate(Request $request, $id)
    {
        $location = Location::find($id);
        if (!$location) {
            return response()->json(['error' => 'location not found'], 404);
        }
        $field = $request->input('field');
        $value = $request->input('value');
        $location->$field = $value;
        if ($field === 'location_name') {
            $location->location_slug = Str::slug($value, '-');
        }
        // $location->$field = $value;
        $location->save();
        Log::create([
            'action' => 'Admin updated location',
            'description' => 'Location titled "' . $location->location_name . '" was updated by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return response()->json(['success' => 'Location updated successfully']);
    }
    public function locationDelete($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        Log::create([
            'action' => 'Admin Deleted location',
            'description' => 'location titled "' . $location->location_name . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'location deleted successfully.');
        return response()->json(['message' => 'location deleted successfully.', 200]);
    }
    public function propertyStore(Request $request)
    {
        $validatedData = $request->validate([
            // 'property_location' => 'required',
            'property_category' => 'required',
            // 'amenities' => 'required|array',
            'property_name' => 'required|string|max:255|unique:properties',
            'property_desc' => 'required|string',
            // 'property_bedrooms' => 'required|integer',
            // 'property_bathrooms' => 'required|integer',
            // 'property_area' => 'required|numeric',
            // 'property_garages' => 'required|integer',
            // 'property_year' => 'required|integer',
            // 'property_plot_size' => 'required|numeric',
            // 'property_map_url' => 'required|string',
            // 'property_address' => 'required|string',
            // 'property_mobile_num' => 'required|string',
            'property_value' => 'required|string',
            'property_discount' => 'required|string',
            'property_seo_title' => 'required|string|max:255',
            'property_seo_desc' => 'required|string|max:255',
            'property_img' => 'required',
            'property_img.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048', // Max file size: 2MB
        ]);
        // dd($request->all());
        $property = new Property();
        if ($request->hasfile('property_img')) {
            $imgData = [];
            foreach ($request->file('property_img') as $file) {
                $name = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/uploads/', $name);
                $imgData[] = $name;
            }
            $property->property_img = json_encode($imgData);
        }
        // $amenitiesJson = json_encode($validatedData['amenities']);
        // Create a new Property instance and save it to the database
        // $property->property_location = $request->property_location;
        $property->property_category = $request->property_category;
        $property->property_name = $request->property_name;
        $property->property_desc = $request->property_desc;
        // $property->property_bedrooms = $request->property_bedrooms;
        // $property->property_bathrooms = $request->property_bathrooms;
        // $property->property_area = $request->property_area;
        // $property->property_garages = $request->property_garages;
        // $property->property_year = $request->property_year;
        // $property->property_plot_size = $request->property_plot_size;
        // $property->property_map_url = $request->property_map_url;
        // $property->property_address = $request->property_address;
        // $property->property_mobile_num = $request->property_mobile_num;
        $property->property_value = $request->property_value;
        $property->property_discount = $request->property_discount;
        $property->property_seo_title = $request->property_seo_title;
        $property->property_seo_desc = $request->property_seo_desc;
        $property->property_slug = $slug = \Illuminate\Support\Str::slug($validatedData['property_name'], '-');
        // $property->property_amenities = $amenitiesJson;
        // dd($property);
        $property->save();
        Log::create([
            'action' => 'Admin Created Product',
            'description' => 'Product titled "' . $property->property_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product created successfully');
    }
    public function propertyView($id)
    {
        $property = Property::findOrFail($id);
        $title = $property->property_name . "Update | Admin - Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.create-property', ['property' => $property, 'edit' => TRUE, 'title' => $title, 'desc' => $desc]);
    }
    public function propertyUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            // 'property_location' => 'required',
            'property_category' => 'required',
            // 'amenities' => 'required|array',
            'property_name' => 'required|string|max:255|unique:properties,property_name,' . $id,
            'property_desc' => 'required|string',
            // 'property_bedrooms' => 'required|integer',
            // 'property_bathrooms' => 'required|integer',
            // 'property_area' => 'required|numeric',
            // 'property_garages' => 'required|integer',
            // 'property_year' => 'required|integer',
            // 'property_plot_size' => 'required|numeric',
            // 'property_map_url' => 'required|string',
            // 'property_address' => 'required|string',
            // 'property_mobile_num' => 'required|string',
            'property_value' => 'required|string',
            'property_discount' => 'required|string',
            'property_seo_title' => 'required|string|max:255',
            'property_seo_desc' => 'required|string|max:255',
            'property_img.*' => 'mimes:jpeg,png,jpg,webp|max:2048', // Max file size: 2MB
        ]);

        $property = Property::findOrFail($id);

        // $amenitiesJson = json_encode($validatedData['amenities']);
        if (isset($validatedData['property_img'])) {

            if ($request->hasfile('property_img')) {

                if ($property->property_img) {
                    Storage::delete($property->property_img);
                }
                $imgData = [];
                foreach ($request->file('property_img') as $file) {
                    $name = uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path() . '/uploads/', $name);
                    $imgData[] = $name;
                }

                $property->property_img = json_encode($imgData);
            }
        } else {
        }

        // Update property details
        // $property->property_location = $request->property_location;
        $property->property_category = $request->property_category;
        $property->property_name = $request->property_name;
        $property->property_desc = $request->property_desc;
        // $property->property_bedrooms = $request->property_bedrooms;
        // $property->property_bathrooms = $request->property_bathrooms;
        // $property->property_area = $request->property_area;
        // $property->property_garages = $request->property_garages;
        // $property->property_year = $request->property_year;
        // $property->property_plot_size = $request->property_plot_size;
        // $property->property_map_url = $request->property_map_url;
        // $property->property_address = $request->property_address;
        // $property->property_mobile_num = $request->property_mobile_num;
        $property->property_value = $request->property_value;
        $property->property_discount = $request->property_discount;
        $property->property_seo_title = $request->property_seo_title;
        $property->property_seo_desc = $request->property_seo_desc;
        $property->property_slug = \Illuminate\Support\Str::slug($validatedData['property_name'], '-');
        // $property->property_amenities = $amenitiesJson;
        // dd($property->all());
        $property->save();
        Log::create([
            'action' => 'Admin Updated Product',
            'description' => 'Product titled "' . $property->property_name . '" was created by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        return redirect()->back()->with('success', 'Product updated successfully');
    }
    public function propertyUpdateStatus(Request $request, $id)
    {
        $property = Property::find($id);
        // dd($property);
        if ($property) {
            $newStatus = $request->input('status') ? 0 : 1;
            $property->status = $newStatus;
            Log::create([
                'action' => 'Admin Changed Product Status',
                'description' => 'Product titled "' . $property->property_name . '" status was changed by admin',
                'user_id' => Auth::id()
            ]);
            $property->save();
            return response()->json(['message' => 'Status Changed successfully']);
        }
        return response()->json(['error' => 'Product not found'], 404);
    }
    public function propertyDelete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        Log::create([
            'action' => 'Admin Deleted Product',
            'description' => 'Product titled "' . $property->property_name . '" was deleted by admin',
            // 'user_id' => Auth::id()
            // 'user_id' => '1'
        ]);
        Session::flash('success', 'Product deleted successfully.');
        return response()->json(['message' => 'Product deleted successfully.', 200]);
    }
}
