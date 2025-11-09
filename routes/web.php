<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PropertyFrontController;
use App\Http\Controllers\BlogFrontController;
use App\Http\Controllers\EnquiryController;

use App\Http\Controllers\Admin\FrontController as AdminFrontController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('front.home');

Route::get('about-us', [FrontController::class, 'about'])->name('front.about');

Route::get('products', [FrontController::class, 'products'])->name('front.products');

Route::get('product/details/{slug}', [FrontController::class, 'productDetails'])->name('front.product-details');

Route::get('blogs', [FrontController::class, 'blogs'])->name('front.blogs');

Route::get('contact-us', [FrontController::class, 'contact'])->name('front.contact');

Route::get('quick-enquiry', [FrontController::class, 'enquiry'])->name('front.enquiry');

Route::get('product/enquiry/{slug}', [FrontController::class, 'enquiry'])->name('front.product-enquiry');

Route::get('privacy-and-policy', [FrontController::class, 'policy'])->name('front.policy');

Route::get('terms-and-conditions', [FrontController::class, 'terms'])->name('front.terms');

Route::fallback(function () {
    return redirect()->route('front.404');
});
Route::get('404', function () {
    return view('front.404');
})->name('front.404');

// ===== PROPERTY FRONT ======
Route::prefix('product')->group(function () {
    Route::get('/{slug}', [PropertyFrontController::class, 'productsDetails'])->name('products.details');
});
//  BLOG FRONT ================
Route::prefix('blog')->group(function () {
    Route::get('/{slug}', [BlogFrontController::class, 'blogDetails'])->name('blog.details');
});
// ===== Enquiry Front ==========
Route::prefix('enquiry')->group(function () {
    Route::post('/store/{slug?}', [EnquiryController::class, 'store'])->name('enquiry.store');
    Route::delete('/delete/{id}', [EnquiryController::class, 'delete'])->name('enquiry.delete');
    Route::post('/callback/store', [EnquiryController::class, 'callbackStore'])->name('callback.store');
    Route::delete('/callback/delete/{id}', [EnquiryController::class, 'callbackDelete'])->name('callback.delete');
});

Route::get('thank-you', [FrontController::class, 'thankYou'])->name('front.thank-you');

Route::get('login', [AdminFrontController::class, 'login'])->name('admin.login');

Route::post('login/authenticate', [AuthController::class, 'login'])->name('login.check');

Route::get('user/logout', [AuthController::class, 'logout'])->name('user.logout');

// ADMIN ROUTES
Route::group(['middleware' => 'admin'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [AdminFrontController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/profile', [AdminFrontController::class, 'profile'])->name('admin.profile');

        Route::get('/change-password', [AdminFrontController::class, 'changePassword'])->name('admin.change-password');

        Route::post('/password/update/{id}', [AuthController::class, 'updatePassword'])->name('admin.password-update');

        Route::get('/all-leads', [AdminFrontController::class, 'allLeads'])->name('admin.all-leads');

        Route::get('/all-callback-requests', [AdminFrontController::class, 'callbackRequests'])->name('admin.all-callback-requests');

        Route::get('/create-product-category', [AdminFrontController::class, 'createPropertyCategory'])->name('admin.create-property-category');

        Route::get('/all-product-categories', [AdminFrontController::class, 'allPropertyCategory'])->name('admin.all-property-categories');

        // Route::get('/add-property-amenties',[AdminFrontController::class,'addPropertyAmenities'])->name('admin.add-property-amenties');

        // Route::get('/all-amenties',[AdminFrontController::class,'allPropertyAmenities'])->name('admin.all-property-amenties');

        // Route::get('/add-location',[AdminFrontController::class,'addLocation'])->name('admin.add-location');

        // Route::get('/all-locations',[AdminFrontController::class,'allLocation'])->name('admin.all-locations');

        Route::get('/create-product', [AdminFrontController::class, 'createProperty'])->name('admin.create-property');

        Route::get('/all-products', [AdminFrontController::class, 'allProperties'])->name('admin.all-properties');

        Route::get('/create-category', [AdminFrontController::class, 'createCategory'])->name('admin.create-category');

        Route::get('/all-categories', [AdminFrontController::class, 'allCategories'])->name('admin.all-categories');

        Route::get('/create-blog', [AdminFrontController::class, 'createBlog'])->name('admin.create-blog');

        Route::get('/all-blogs', [AdminFrontController::class, 'allBlogs'])->name('admin.all-blogs');

        Route::get('/add-gallery-image', [AdminFrontController::class, 'createGallery'])->name('admin.add-gallery-image');

        Route::get('/all-galleries-images', [AdminFrontController::class, 'allGalleries'])->name('admin.all-galleries-images');

        // === BLOG STORE, UPDATE, DELETE, VIEW ======

        Route::post('/blog/category/store', [BlogController::class, 'storeBlogCategory'])->name('admin.blog-category-store');

        Route::get('/blog/category/all', [BlogController::class, 'fetchBlogCategories'])->name('admin.fetch-blog-categories');

        Route::post('/blog/category/update/{id}', [BlogController::class, 'updateBlogCategories'])->name('admin.blog-category-update');

        Route::delete('/blog/category/delete/{id}', [BlogController::class, 'deleteBlogCategories'])->name('admin.blog-category-delete');

        Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog-store');

        Route::get('/blog/view/{id}', [BlogController::class, 'view'])->name('admin.blog-edit');

        Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog-update');

        Route::delete('/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog-delete');

        // === PROPERTY, CATEGORY, AMENITY, LOCATION STORE, UPDATE, DELETE, VIEW ======

        Route::post('/product/category/store', [PropertyController::class, 'storePropertyCategory'])->name('admin.property-category-store');

        Route::post('/product/category/update/{id}', [PropertyController::class, 'updatePropertyCategory'])->name('admin.property-category-update');

        Route::delete('/product/category/delete/{id}', [PropertyController::class, 'deletePropertyCategory'])->name('admin.property-category-delete');

        // Route::post('/property/amenity/store', [PropertyController::class, 'storeAmenity'])->name('admin.property-amenity-store');

        // Route::post('/property/amenity/update/{id}', [PropertyController::class, 'updateAmenity'])->name('admin.property-amenity-update');

        // Route::delete('/property/amenity/delete/{id}', [PropertyController::class, 'deleteAmenity'])->name('admin.property-amenity-delete');

        // Route::post('/location/store', [PropertyController::class, 'locationStore'])->name('admin.location-store');

        // Route::post('/location/update/{id}', [PropertyController::class, 'locationUpdate'])->name('admin.location-update');

        // Route::delete('/location/delete/{id}', [PropertyController::class, 'locationDelete'])->name('admin.location-delete');

        Route::post('/product/store', [PropertyController::class, 'propertyStore'])->name('admin.property-store');

        Route::get('/product/view/{id}', [PropertyController::class, 'propertyView'])->name('admin.property-view');

        Route::post('/product/update/{id}', [PropertyController::class, 'propertyUpdate'])->name('admin.property-update');

        Route::put('/product/update/status/{id}', [PropertyController::class, 'propertyUpdateStatus'])->name('admin.update-property-status');

        Route::delete('/product/delete/{id}', [PropertyController::class, 'propertyDelete'])->name('admin.property-delete');
    });
});
