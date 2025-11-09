<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyCategory;
use App\Models\Property;
use App\Models\Location;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyFrontController extends Controller
{
    public function productsDetails($slug)
    {
        $property = Property::where('property_slug', $slug)->first();
        $title = $property->property_seo_title;
        $desc = $property->property_seo_desc;
        return view('front.product-details')
            ->with(compact('title', 'desc', 'property'));
    }
}
