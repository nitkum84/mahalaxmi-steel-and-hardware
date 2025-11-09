<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Blog;
use App\Models\Log;
use App\Models\BlogCategory;
use App\Models\Amenity;
use App\Models\Location;
use App\Models\PropertyCategory;
use App\Models\Property;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            // $blogCategoriesGlobal = BlogCategory::orderBy('id', 'DESC')->get();

            // $logsGlobal = Log::orderBy('id', 'DESC')->limit(5)->get();

            // $logsGlobalAll = Log::orderBy('id', 'DESC')->paginate(50);

            // $logsGlobalCount = $logsGlobal->count();

            $propertyCategoriesGlobal = PropertyCategory::orderBy('id', 'DESC')->get();

            // $blogGlobal = Blog::orderBy('id', 'DESC')->limit(2)->get();

            // $propertyGlobal10 = Property::where('status', 1)->orderBy('id', 'DESC')->with('category')->paginate(25);

            // $propertyGlobal = Property::where('status', 1)->orderBy('id', 'DESC')->with('category')->paginate(10);

            $view
                ->with('propertyCategoriesGlobal', $propertyCategoriesGlobal);
        });
    }
}
