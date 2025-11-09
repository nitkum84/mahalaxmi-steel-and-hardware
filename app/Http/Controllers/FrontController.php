<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Amenity;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{
    public function index()
    {
        $title = 'Home | Mahalaxmi Steel and Hardware';
        $desc = '';
        $products = Property::where('status', '1')->orderBy('id', 'desc')->paginate(15);
        $categories = PropertyCategory::orderBy('id', 'desc')->get();
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('front.home')->with(compact('title', 'desc', 'categories', 'products', 'blogs'));
    }
    public function about()
    {
        $title = 'About | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.about')->with(compact('title', 'desc'));
    }
    public function products()
    {
        $title = 'Products | Mahalaxmi Steel and Hardware';
        $desc = '';
        $products = Property::where('status', '1')->orderBy('id', 'desc')->paginate(25);
        $categories = PropertyCategory::orderBy('id', 'desc')->get();
        return view('front.products')->with(compact('title', 'desc', 'products', 'categories'));
    }
    public function productDetails($slug)
    {
        $title = 'Product Details | Mahalaxmi Steel and Hardware';
        $desc = '';
        // UNCCOMMENT BELOW IF YOU WANT TO FETCH SINGLE PRODUCT
        // $product = Property::where('slug', $slug)->get();
        // return view('front.products')->with(compact('title', 'desc', 'product'));

        // FOR DEMO PURPOSE ONLY
        return view('front.product-details')->with(compact('title', 'desc'));

    }
    public function productsByCategory($slug)
    {
        $category = PropertyCategory::where('property_category_slug', $slug)->first();

        $title = $category->property_category_name . ' | Mahalaxmi Steel and Hardware';
        $desc = '';

        // Paginate products directly
        $products = Property::where('property_category', $category->id)
            ->orWhere('status', '1')
            ->orderBy('id', 'desc')
            ->paginate(25);

        $categories = PropertyCategory::orderBy('id', 'desc')->get();

        if (request()->ajax()) {
            return view('front.partials.products', compact('products')); // Return a partial view for products
        }

        return view('front.products')->with(compact('title', 'desc', 'products', 'categories'));
    }
    public function dealer()
    {
        $title = 'Find Dealer | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.find-dealer')->with(compact('title', 'desc'));
    }
    public function services()
    {
        $title = 'Service Structure | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.services')->with(compact('title', 'desc'));
    }
    public function contact()
    {
        $title = 'Contact Us | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.contact')->with(compact('title', 'desc'));
    }
    public function blogs()
    {
        $title = 'Blogs | Mahalaxmi Steel and Hardware';
        $desc = '';
        $blogs = Blog::orderBy('id', 'desc')->get();
        return view('front.blogs')->with(compact('title', 'desc', 'blogs'));
    }
    public function enquiry($slug = NULL)
    {
        if (isset($slug) && $slug != NULL) {
            $product = Property::where('property_slug', $slug)->first();
        } else {
            $product = NULL;
        }
        $title = 'Enquiry | Mahalaxmi Steel and Hardware';
        $desc = '';
        // return view('front.enquiry')->with(compact('title', 'desc', 'product'));
        return view('front.contact')->with(compact('title', 'desc', 'product'));
    }
    public function policy()
    {
        $title = 'Privacy & Policy | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.policy')->with(compact('title', 'desc'));
    }
    public function terms()
    {
        $title = 'Terms & Conditions | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.terms')->with(compact('title', 'desc'));
    }
    public function thankYou()
    {
        $title = 'Thank You! | Mahalaxmi Steel and Hardware';
        $desc = '';
        return view('front.thank-you')->with(compact('title', 'desc'));
    }
}
