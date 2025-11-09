@extends('layouts.master')
@section('main')
    <main>
        @include('includes.breadcrumbs')
        <!-- collection-left start -->
        <section class="main-content-wrap bg-color shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="pro-grli-wrap product-grid">
                            <div class="collection-img-wrap">
                                {{-- <h6 class="st-title" data-animate="animate__fadeInUp">Collection (23)</h6> --}}
                                <!-- collection info start -->
                                <div class="collection-info">
                                    <div class="collection-image" data-animate="animate__fadeInUp">
                                        <img src="img/banner/sall-banner.jpg" class="img-fluid" alt="sall-banner">
                                    </div>
                                </div>
                                <!-- collection info end -->
                            </div>
                            <!-- shop-top-bar start -->

                            <!-- shop-top-bar end -->
                            <!-- Latest-product start -->
                            <div class="special-product grid-3">
                                <div class="collection-category">
                                    <div class="row">
                                        <div class="col">
                                            <div class="collection-wrap">
                                                <ul class="product-view-ul">
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-1.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-2.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Wireless device</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Wireless
                                                                                headphones</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$10.00</span>
                                                                            <span class="old-price">$15.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>22%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-3.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-4.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Waterproof</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Waterproof</a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$18.00</span>
                                                                            <span class="old-price">$24.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>14%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-5.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-6.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Live program</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Pen drivess</a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$10.00</span>
                                                                            <span class="old-price">$15.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>22%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-7.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-8.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Waterproof watch</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Smart watch</a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$32.00</span>
                                                                            <span class="old-price">$38.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>30%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-9.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-10.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Softness music</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Verse
                                                                                earphones</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$08.00</span>
                                                                            <span class="old-price">$10.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>20%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-11.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-12.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Rotation camera</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Wifro
                                                                                camera</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$32.00</span>
                                                                            <span class="old-price">$39.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>14%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-13.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-14.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Wireless device</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Bluetooth
                                                                                earbuds</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$55.00</span>
                                                                            <span class="old-price">$58.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>30%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-15.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-16.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Live program</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Projector
                                                                                leptop</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$18.00</span>
                                                                            <span class="old-price">$24.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>14%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-17.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-18.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Double door</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a
                                                                                href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Refrigerator</a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$18.00</span>
                                                                            <span class="old-price">$24.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>14%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-19.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-20.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>New system</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">New system</a>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$10.00</span>
                                                                            <span class="old-price">$15.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>22%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-21.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-22.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Avone machine</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Avone
                                                                                machine</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$32.00</span>
                                                                            <span class="old-price">$38.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>30%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="pro-item-li" data-animate="animate__fadeInUp">
                                                        <div class="single-product-wrap">
                                                            <div class="product-image banner-hover">
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="pro-img">
                                                                    <img src="img/product/home1-pro-23.jpg"
                                                                        class="img-fluid img1 mobile-img1" alt="p1">
                                                                    <img src="img/product/home1-pro-24.jpg"
                                                                        class="img-fluid img2 mobile-img2" alt="p2">
                                                                </a>
                                                                <div class="product-action">
                                                                    <a href="#quickview" class="quickview"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#quickview">
                                                                        <span class="tooltip-text">Quickview</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-eye"></i></span>
                                                                    </a>
                                                                    <a href="#add-to-cart" class="add-to-cart"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#add-to-cart">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-shopping-bag"></i></span>
                                                                    </a>
                                                                    <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                        <span class="tooltip-text">Wishlist</span>
                                                                        <span class="pro-action-icon"><i
                                                                                class="feather-heart"></i></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-caption">
                                                                <div class="product-content">
                                                                    <div class="product-sub-title">
                                                                        <span>Fancy design</span>
                                                                    </div>
                                                                    <div class="product-title">
                                                                        <h6><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}">Mobile
                                                                                cover</a></h6>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="pro-price-box">
                                                                            <span class="new-price">$44.00</span>
                                                                            <span class="old-price">$48.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <p>Lorem Ipsum is simply dummy text of the printing
                                                                            and typesetting industry. Lorem Ipsum has been
                                                                            the industry's standard dummy text ever since
                                                                            the 1500s.</p>
                                                                    </div>
                                                                    <div class="product-action">
                                                                        <a href="#quickview" class="quickview"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#quickview">
                                                                            <span class="tooltip-text">Quickview</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-eye"></i></span>
                                                                        </a>
                                                                        <a href="#add-to-cart" class="add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#add-to-cart">
                                                                            <span class="tooltip-text">Add to cart</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-shopping-bag"></i></span>
                                                                        </a>
                                                                        <a href="{{ route('products.details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="wishlist">
                                                                            <span class="tooltip-text">Wishlist</span>
                                                                            <span class="pro-action-icon"><i
                                                                                    class="feather-heart"></i></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="pro-label-retting">
                                                                    <div class="product-ratting">
                                                                        <span class="pro-ratting">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="product-label pro-new-sale">
                                                                        <span
                                                                            class="product-label-title">Sale<span>22%</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="paginatoin-area">
                                                <ul class="pagination-page-box" data-animate="animate__fadeInUp">
                                                    <li class="number active"><a href="javascript:void(0)"
                                                            class="theme-glink">1</a></li>
                                                    <li class="number"><a href="javascript:void(0)"
                                                            class="gradient-text">2</a></li>
                                                    <li class="page-next"><a href="javascript:void(0)"
                                                            class="theme-glink"><i
                                                                class="fa -solid fa-angle-right"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Latest-product end -->
                        </div>
                        <div class="pro-grli-wrap product-sidebar">
                            <div class="pro-grid-block">
                                <div class="shop-sidebar-inner collection">
                                    <div class="shop-sidebar-wrap filter-sidebar">
                                        <!-- button start -->
                                        <button class="close-sidebar close-without" type="button">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                        <!-- button end -->
                                        <!-- filter-form start -->
                                        <div class="facets">
                                            <form class="facets-form">
                                                <div class="facets-wrapper">
                                                    <!-- Product-Categories start -->
                                                    <div class="shop-sidebar">
                                                        <h6 class="shop-title">Categories</h6>
                                                        <a href="#collapse-5" data-bs-toggle="collapse"
                                                            class="shop-title shop-title-lg">Categories<i
                                                                class="fa fa-angle-down"></i></a>
                                                        <div class="collapse show shop-element" id="collapse-5">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox">
                                                                        <span class="check-name">Bluetooth</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label">
                                                                        <input type="checkbox" class="cust-checkbox">
                                                                        <span class="check-name">Earphones</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 64gb">
                                                                        <input type="checkbox" value="64gb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Headphones</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 500gb">
                                                                        <input type="checkbox" value="500gb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Collection</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 1tb">
                                                                        <input type="checkbox" value="1tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Collection left</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 2tb">
                                                                        <input type="checkbox" value="2tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Collection list</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Collection list
                                                                            left</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Collection right</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Speaker</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">360 cemera</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">DVD player</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="cat-checkbox">
                                                                    <label class="checkbox-label 3tb">
                                                                        <input type="checkbox" value="3tb"
                                                                            class="cust-checkbox">
                                                                        <span class="check-name">Air conditioner</span>
                                                                        <span class="count-check">(12)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- Product-Categories end -->
                                                    <div class="shop-sidebar sidebar-filter">
                                                        <h6 class="shop-title">Filter</h6>
                                                        <a href="javascript:void(0)"
                                                            class="shop-title shop-title-lg">Filter</a>
                                                        <div class="filter-info">
                                                            <span class="filter-count-text">23 products</span>
                                                            <span class="loading-spinner"><svg aria-hidden="true"
                                                                    focusable="false" role="presentation"
                                                                    class="spinner" viewBox="0 0 66 66"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <circle class="path" fill="none"
                                                                        stroke-width="6" cx="33" cy="33"
                                                                        r="30"></circle>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-price">
                                                        <h6 class="shop-title">Price</h6>
                                                        <a href="#collapse-3" data-bs-toggle="collapse"
                                                            class="shop-title shop-title-lg">Price</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price">The highest price is $89.00</span>
                                                            <facet-remove><a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}"
                                                                    class="reset-text">Reset</a></facet-remove>
                                                        </div>
                                                        <!-- Product-price start -->
                                                        <div class="collapse price-wrap" id="collapse-3">
                                                            <price-range class="price-range">
                                                                <div class="price-range-group group-range">
                                                                    <input type="range" class="range"
                                                                        min="0" max="89" value="0"
                                                                        id="range1">
                                                                    <input type="range" class="range"
                                                                        min="0" max="89" value="89"
                                                                        id="range2">
                                                                </div>
                                                                <div class="price-input-group group-input">
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">From</label>
                                                                        <span class="price-value">$</span>
                                                                        <span id="demo1"
                                                                            class="price-field">0</span>
                                                                    </div>
                                                                    <span class="price-range-delimeter">-</span>
                                                                    <div class="price-range-input input-price">
                                                                        <label class="label-text">To</label>
                                                                        <span class="price-value">$</span>
                                                                        <span id="demo2"
                                                                            class="price-field">89</span>
                                                                    </div>
                                                                </div>
                                                            </price-range>
                                                        </div>
                                                        <!-- Product-price end -->
                                                        <!-- More-filters start -->
                                                        <div class="shop-sidebar sidebar-open">
                                                            <h6 class="shop-title">More filters</h6>
                                                            <a href="#collapse-6" data-bs-toggle="collapse"
                                                                class="shop-title shop-title-lg">More filters<i
                                                                    class="fa fa-angle-down"></i></a>
                                                            <div class="filter-info">
                                                                <span class="shop-price">0 selected</span>
                                                                <facet-remove>
                                                                    <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}"
                                                                        class="reset-text">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse shop-element shop-flavor"
                                                                id="collapse-6">
                                                                <ul class="brand-ul scrollbar">
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 16gb">
                                                                            <input type="checkbox" value="16gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Air
                                                                                conditioner</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 32gb">
                                                                            <input type="checkbox" value="32gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Portable
                                                                                speaker</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 64gb">
                                                                            <input type="checkbox" value="64gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Wireless
                                                                                earbuds</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 500gb">
                                                                            <input type="checkbox" value="500gb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Ev charging
                                                                                plug</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 1tb">
                                                                            <input type="checkbox" value="1tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">DVD player
                                                                                slot</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 2tb">
                                                                            <input type="checkbox" value="2tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Verse
                                                                                earphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Video shoot
                                                                                drone</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Collection
                                                                                right</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Wifro wi-fi
                                                                                camera</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Movie projector
                                                                                S8</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Wireless
                                                                                headphones</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="cat-checkbox">
                                                                        <label class="checkbox-label 3tb">
                                                                            <input type="checkbox" value="3tb"
                                                                                class="cust-checkbox">
                                                                            <span class="check-name">Stylish for
                                                                                trimmer</span>
                                                                            <span class="count-check">(12)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- More-filters end -->
                                                    </div>
                                                    <div class="shop-sidebar sidebar-product">
                                                        <h6 class="shop-title">Product type</h6>
                                                        <a href="#collapse-2" data-bs-toggle="collapse"
                                                            class="shop-title shop-title-lg">Product type</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-2">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="brand-li">
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="checkbox" name="cust-checkbox"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">Electon</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-wedget">
                                                        <h6 class="shop-title">Availability</h6>
                                                        <a href="#collapse-1" class="shop-title shop-title-lg"
                                                            data-bs-toggle="collapse">Availability</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="collapse-1">
                                                            <ul class="brnad-ul scrollbar">
                                                                <li class="availability">
                                                                    <label
                                                                        class="cust-checkbox-label availability in-stock">
                                                                        <input type="checkbox"
                                                                            name="filter.v.availability" value="1"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">In stock</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                                <li class="availability">
                                                                    <label
                                                                        class="cust-checkbox-label availability in-stock">
                                                                        <input type="checkbox"
                                                                            name="filter.v.availability" value="1"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">Out of stock</span>
                                                                        <span class="count-check">(1)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="shop-sidebar sidebar-wedget">
                                                        <h6 class="shop-title">Brand</h6>
                                                        <a href="#reset" data-bs-toggle="collapse"
                                                            class="shop-title shop-title-lg">Brand</a>
                                                        <div class="filter-info">
                                                            <span class="shop-price no-js-hidden">0 selected</span>
                                                            <facet-remove>
                                                                <a href="{{ route('front.product-details',['slug' => 'tata-tmt-bar-and-steel']) }}" class="reset-text">Reset</a>
                                                            </facet-remove>
                                                        </div>
                                                        <div class="collapse filter-element" id="reset">
                                                            <ul class="brand-ul scrollbar">
                                                                <li class="brand-li">
                                                                    <label class="cust-checkbox-label">
                                                                        <input type="checkbox" name="cust-checkbox"
                                                                            class="cust-checkbox">
                                                                        <span class="filter-name">Electon</span>
                                                                        <span class="count-check">(23)</span>
                                                                        <span class="cust-check"></span>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- filter-form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- collection-left end -->
    </main>
@endsection
