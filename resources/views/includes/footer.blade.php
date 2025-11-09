<!-- footer start -->
<section class="footer-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="footer-list">
                    <ul class="footer-ul">
                        <li class="footer-li footer-logo" data-animate="animate__fadeInUp">
                            <div class="footer-content">
                                <a href="{{ route('front.home') }}" class="theme-logo">
                                    <img src="{{ asset('img/logo/logo.png') }}" class="img-fluid" alt="footer-logo">
                                </a>
                                <ul class="ftcontact-ul">
                                    <li class="ftcontact-li">
                                        <div class="footer-desc">
                                            <h5><strong>Mahalaxmi Steels and Hardware</strong></h5>
                                            <p class="desc">Your trusted partner for quality steel and hardware
                                                solutions since 1988.</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li class="footer-li" data-animate="animate__fadeInUp">
                            <ul class="ftlist-ul">
                                <li class="ftlist-li">
                                    <h6 class="ftlist-title">Quick Links</h6>
                                    <a href="#footer-quick-links" class="ftlist-title" data-bs-toggle="collapse"
                                        aria-expanded="false">
                                        <span>Quick Links</span>
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </a>
                                    <ul class="ftlink-ul collapse" id="footer-quick-links">
                                        <li class="ftlink-li">
                                            <a href="{{ route('front.home') }}">Home</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="{{ route('front.products') }}">Products</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="{{ route('front.about') }}">About Us</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="{{ route('front.contact') }}">Contact Us</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="{{ route('front.policy') }}">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="footer-li" data-animate="animate__fadeInUp">
                            <ul class="ftlist-ul">
                                <li class="ftlist-li">
                                    <h6 class="ftlist-title">Contact Us</h6>
                                    <a href="#footer-contact" class="ftlist-title" data-bs-toggle="collapse"
                                        aria-expanded="false">
                                        <span>Contact Us</span>
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </a>
                                    <ul class="ftcontact-ul collapse" id="footer-contact">
                                        <li class="ftcontact-li">
                                            <div class="ft-contact-add">
                                                <a href="tel:08322318095" class="ft-contact-address">0832-2318095</a>
                                            </div>
                                        </li>
                                        <li class="ftcontact-li">
                                            <div class="ft-contact-add">
                                                <a href="tel:+919339330099"
                                                    class="ft-contact-address">+91-9339330099</a>
                                            </div>
                                        </li>
                                        <li class="ftcontact-li">
                                            <div class="ft-contact-add">
                                                <a href="mailto:mahalaxmisteels2316670@gmail.com"
                                                    class="ft-contact-address">mahalaxmisteels2316670@gmail.com</a>
                                            </div>
                                        </li>
                                        <li class="ftcontact-li">
                                            <div class="ft-contact-add">
                                                <p class="ft-contact-text"><b>Emergency Support:</b><br>24/7 customer
                                                    support available</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="footer-li" data-animate="animate__fadeInUp"> ... </li> --}}

                        <li class="footer-li" data-animate="animate__fadeInUp" style="margin-left: auto;">
                            <ul class="ftlist-ul">
                                <li class="ftlist-li">
                                    <h6 class="ftlist-title">Follow Us</h6>
                                    <a href="#footer-follow" class="ftlist-title" data-bs-toggle="collapse"
                                        aria-expanded="false">
                                        <span>Follow Us</span>
                                        <span><i class="fa-solid fa-plus"></i></span>
                                    </a>
                                    <ul class="ftlink-ul collapse" id="footer-follow">
                                        <li class="ftlink-li">
                                            <a href="#">Facebook</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="#">Instagram</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="#">Twitter</a>
                                        </li>
                                        <li class="ftlink-li">
                                            <a href="#">LinkedIn</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer end -->
<!-- footer-copyright start -->
<footer class="ft-copyright-area bt">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="ft-copyright">
                    <ul class="ft-copryright-ul">
                        <li class="ft-copryright-li ft-payment">
                            <ul class="payment-icon">
                                <li>
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('img/payment/pay-1.jpg') }}" class="img-fluid" alt="pay-1">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('img/payment/pay-2.jpg') }}" class="img-fluid" alt="pay-2">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('img/payment/pay-3.jpg') }}" class="img-fluid" alt="pay-3">
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('img/payment/pay-4.jpg') }}" class="img-fluid" alt="pay-4">
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="ft-copryright-li news-letter">
                            {{-- <div class="news-block">
                                <div class="section-title">
                                    <h2>Subscribe newsletter</h2>
                                </div>
                                <form method="post" id="" accept-charset="UTF-8" class="contact-form">
                                    <input type="hidden" name="form_type" value="customer">
                                    <input type="hidden" name="utf8" value="✓">
                                    <input type="hidden" name="contact[tags]" value="newsletter">
                                    <div class="subscribe-block">
                                        <input type="email" name="contact[email]" class="email mail"
                                            id="E-mail" value="" placeholder="Enter your email"
                                            autocapitalize="off">
                                        <div class="email-submit">
                                            <button type="submit" class="btn btn-style2">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div> --}}
                        </li>
                        <li class="ft-copryright-li ft-copyright-text">
                            <p>
                                <span>© @php echo(date('Y')) @endphp All Right Reserved by Mahalaxmi Steel and Hardware </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-copyright end -->

<!-- mobile-menu start -->
<div class="mobile-menu" id="mobile-menu">
    <div class="mobile-contents">
        <div class="menu-close">
            <button class="menu-close-btn">
                <span class="menu-close-icon"><svg viewBox="0 0 24 24" width="24" height="24"
                        stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" class="css-i6dzq1">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></span>
            </button>
        </div>
        <div class="mobilemenu-content">
            <div class="main-wrap">
                <ul class="main-menu">
                    <li class="menu-link">
                        <a href="{{ route('front.home') }}" class="link-title">
                            <span class="sp-link-title">Home</span>
                        </a>
                    </li>
                    <li class="menu-link">
                        <a href="{{ route('front.about') }}" class="link-title">
                            <span class="sp-link-title">About Us</span>
                        </a>
                    </li>
                    <li class="menu-link">
                        <a href="{{ route('front.products') }}" class="link-title">
                            <span class="sp-link-title">Products</span>
                        </a>
                    </li>
                    <li class="menu-link">
                        <a href="{{ route('front.contact') }}" class="link-title">
                            <span class="sp-link-title">Contact us</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mobile-social">
                <div class="mob-wrap mob-social">
                    <ul class="social-icon">
                        <!-- facebook-icon start -->
                        <li>
                            <a href="https://www.facebook.com/">
                                <span class="icon-social facebook"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 320 512">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                        </path>
                                    </svg></span>
                                <span>90K Followers</span>
                            </a>
                        </li>
                        <!-- facebook-icon end -->
                        <!-- insta-icon start -->
                        <li>
                            <a href="https://in.pinterest.com/">
                                <span class="icon-social pinterest"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                        </path>
                                    </svg></span>
                                <span>60K Followers</span>
                            </a>
                        </li>
                        <!-- insta-icon end -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu end -->
<!-- newsletter start -->
<div id="newsletter" class="popup-wrapper">
    <div class="popup-wrapper">
        <div class="modal fade show" id="news-letter-modal" aria-modal="true" role="dialog">
            <div class="newsletter-popup-inner modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="post" action="{{ route('enquiry.store') }}" class="contact-form">
                            @csrf
                            <input type="hidden" name="page_url" value="{{ url()->current() }}">

                            <button type="button" class="close-btn" data-bs-dismiss="modal"><i
                                    class="feather-x"></i></button>
                            <div class="newsletter-info">
                                <div class="subscribe-area">
                                    <div class="subscribe-content">
                                        <h2>Get a Free Quote</h2>
                                        <p>Send us your details and we'll get back to you shortly.</p>
                                    </div>
                                    <div class="popup-newsletter">
                                        <div class="subscribe-con">
                                            <div class="subscribe-block" style="margin-bottom: 15px;">
                                                <input type="text" name="name" class="email mail"
                                                    placeholder="Enter your name" required>
                                            </div>

                                            <div class="subscribe-block" style="margin-bottom: 15px;">
                                                <input type="email" name="email" class="email mail"
                                                    placeholder="Enter your email" required>
                                            </div>

                                            <div class="subscribe-block" style="margin-bottom: 15px;">
                                                <input type="tel" name="mobile_no" class="email mail"
                                                    placeholder="Enter your 10-digit mobile" required
                                                    pattern="[0-9]{10}" title="Please enter a 10-digit mobile number">
                                            </div>

                                            <div class="subscribe-block">
                                                <div class="email-submit">
                                                    <button type="submit"
                                                        class="news-btn btn btn-style">Submit Enquiry</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newsletter end -->
<!-- bg-scren start -->
<div class="bg-screen"></div>
<!-- bg-scren end -->
<!-- bottom-menu start -->
{{-- <div class="bottom-menu">
    <ul class="bottom-menu-element">
        <li class="bottom-menu-wrap">
            <div class="bottom-menu-wrapper">
                <a href="{{ route('front.home') }}" class="bottom-menu-home">
                    <span class="bottom-menu-icon"><svg viewBox="0 0 24 24" width="24" height="24"
                            stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg></span>
                    <span class="bottom-menu-title">Home</span>
                </a>
            </div>
        </li>
        <li class="bottom-menu-wrap">
            <div class="bottom-menu-wrapper">
                <a href="login-account.html" class="bottom-menu-user">
                    <span class="bottom-menu-icon"><svg viewBox="0 0 24 24" width="24" height="24"
                            stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" class="css-i6dzq1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg></span>
                    <span class="bottom-menu-title">Account</span>
                </a>
            </div>
        </li>
        <li class="bottom-menu-wrap">
            <div class="bottom-menu-wrapper">
                <a href="collection.html" class="bottom-menu-collection">
                    <span class="bottom-menu-icon"><svg viewBox="0 0 24 24" width="24" height="24"
                            stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" class="css-i6dzq1">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span>
                    <span class="bottom-menu-title">Shop</span>
                </a>
            </div>
        </li>
        <li class="bottom-menu-wrap">
            <div class="bottom-menu-wrapper">
                <a href="wishlist-product.html" class="bottom-menu-wishlist">
                    <span class="bottom-menu-icon-wrap">
                        <span class="bottom-menu-icon"><svg viewBox="0 0 24 24" width="24" height="24"
                                stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" class="css-i6dzq1">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg></span>
                        <span class="bottom-menu-counter wishlist-counter">5</span>
                    </span>
                    <span class="bottom-menu-title">Wishlist</span>
                </a>
            </div>
        </li>
        <li class="bottom-menu-wrap">
            <div class="bottom-menu-wrapper">
                <a href="javascript:void(0)" class="bottom-menu-cart">
                    <span class="bottom-menu-icon-wrap">
                        <span class="bottom-menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M6.505 2h11a1 1 0 0 1 .8.4l2.7 3.6v15a1 1 0 0 1-1 1h-16a1 1 0 0 1-1-1V6l2.7-3.6a1 1 0 0 1 .8-.4m12.5 6h-14v12h14zm-.5-2l-1.5-2h-10l-1.5 2zm-9.5 4v2a3 3 0 1 0 6 0v-2h2v2a5 5 0 0 1-10 0v-2z">
                                </path>
                            </svg></span>
                        <span class="bottom-menu-counter cart-counter">3</span>
                    </span>
                    <span class="bottom-menu-title">Cart</span>
                </a>
            </div>
        </li>
    </ul>
</div> --}}
<!-- bottom-menu end -->
