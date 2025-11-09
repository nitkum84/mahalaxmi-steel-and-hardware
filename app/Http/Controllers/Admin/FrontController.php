<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Callback;
use App\Models\BlogCategory;
use App\Models\Amenity;
use App\Models\Enquiry;
use App\Models\Location;
use App\Models\PropertyCategory;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function dashboard()
    {
        $title = "Dashboard - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";

        $blogCount = Blog::count();
        $callbackCount = Callback::count();
        $enquiryCount = Enquiry::count();
        $propertyCount = Property::count();

        $lastWeekStartDate = now()->subWeek()->startOfWeek();
        $blogCountLastWeek = Blog::where('created_at', '>=', $lastWeekStartDate)->count();
        $callbackCountLastWeek = Callback::where('created_at', '>=', $lastWeekStartDate)->count();
        $enquiryCountLastWeek = Enquiry::where('created_at', '>=', $lastWeekStartDate)->count();
        $propertyCountLastWeek = Property::where('created_at', '>=', $lastWeekStartDate)->count();

        return view('admin.front.dashboard')->with(compact(
            'title',
            'desc',
            'blogCount',
            'callbackCount',
            'enquiryCount',
            'propertyCount',
            'blogCountLastWeek',
            'callbackCountLastWeek',
            'enquiryCountLastWeek',
            'propertyCountLastWeek'
        ));
    }
    public function allLeads()
    {
        $title = "All Leads - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $enquiries = Enquiry::latest()->get();
        return view('admin.front.all-leads')->with(compact('title', 'desc', 'enquiries'));
    }
    public function callbackRequests()
    {
        $title = "All Callbacks - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $callbacks = Callback::latest()->get();
        return view('admin.front.all-callbacks')->with(compact('title', 'desc', 'callbacks'));
    }
    public function createCategory()
    {
        $title = "Create Blog Category - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.create-blog-category')->with(compact('title', 'desc'));
    }
    public function allCategories()
    {
        $title = "All Blog Categories - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $blogs = BlogCategory::latest()->get();
        return view('admin.front.all-blog-categories')->with(compact('title', 'desc', 'blogs'));
    }
    public function createBlog()
    {
        $title = "Create Blog - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $categories = BlogCategory::orderBy('id', 'DESC')->get();
        return view('admin.front.create-blog')->with(compact('title', 'desc', 'categories'));
    }
    public function allBlogs()
    {
        $title = "All Blogs - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $blogs = Blog::latest()->get();
        return view('admin.front.all-blogs')->with(compact('title', 'desc', 'blogs'));
    }
    public function createPropertyCategory()
    {
        $title = "Create Product Category - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.create-property-category')->with(compact('title', 'desc'));
    }
    public function allPropertyCategory()
    {
        $title = "All Product Categories - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $propertyCategories = PropertyCategory::latest()->get();
        return view('admin.front.all-property-categories')->with(compact('title', 'desc', 'propertyCategories'));
    }
    public function addPropertyAmenities()
    {
        $title = "Add Product Amenities - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.add-amenties')->with(compact('title', 'desc'));
    }
    public function allPropertyAmenities()
    {
        $title = "All Product Amenities - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $amenities = Amenity::latest()->get();
        return view('admin.front.all-amenties')->with(compact('title', 'desc', 'amenities'));
    }
    public function addLocation()
    {
        $title = "Add Location - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.add-location')->with(compact('title', 'desc'));
    }
    public function allLocation()
    {
        $title = "All Locations - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $locations = Location::latest()->get();
        return view('admin.front.all-locations')->with(compact('title', 'desc', 'locations'));
    }
    public function createProperty()
    {
        $title = "Create Product - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.create-property')->with(compact('title', 'desc'));
    }
    public function allProperties()
    {
        $title = "All Properties - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        $properties = Property::latest()->get();
        return view('admin.front.properties')->with(compact('title', 'desc', 'properties'));
    }
    public function createGallery()
    {
        $title = "Add Gallery Images - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.add-gallery-images')->with(compact('title', 'desc'));
    }
    public function allGalleries()
    {
        $title = "All Gallery Images - Admin | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.all-gallery-images')->with(compact('title', 'desc'));
    }
    public function login()
    {
        $title = "Login | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.login')->with(compact('title', 'desc'));
    }
    public function changePassword()
    {
        $title = "Change Password | Mahalaxmi Steel and Hardware";
        $desc = "";
        return view('admin.front.change-password')->with(compact('title', 'desc'));
    }
}
