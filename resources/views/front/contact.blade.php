@extends('layouts.master')
@section('main')
    <style>
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(45deg, #f0f9ff, #e0f2fe, #dbeafe);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Floating Shapes */
        .floating-shape {
            position: fixed;
            border-radius: 50%;
            opacity: 0.1;
            z-index: -1;
            animation: float 20s infinite ease-in-out;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: var(--gradient-1);
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            background: var(--gradient-2);
            top: 60%;
            right: 10%;
            animation-delay: 3s;
        }

        .shape-3 {
            width: 250px;
            height: 250px;
            background: var(--gradient-3);
            bottom: 10%;
            left: 15%;
            animation-delay: 6s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -30px) rotate(120deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(240deg);
            }
        }

        /* Section Styling */
        .section-ptb {
            padding: 80px 0;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: var(--gradient-1);
            border-radius: 2px;
        }

        .section-title h2 span {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Contact Info Cards */
        .get-info-ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .get-info-li {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: var(--shadow-md);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }

        .get-info-li::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-1);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .get-info-li:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
            border-color: rgba(99, 102, 241, 0.3);
        }

        .get-info-li:hover::before {
            transform: scaleX(1);
        }

        .get-info-li:nth-child(1) .get-icon {
            background: var(--gradient-1);
        }

        .get-info-li:nth-child(2) .get-icon {
            background: var(--gradient-2);
        }

        .get-info-li:nth-child(3) .get-icon {
            background: var(--gradient-3);
        }

        .get-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            transition: transform 0.3s ease;
        }

        .get-info-li:hover .get-icon {
            transform: rotate(360deg) scale(1.1);
        }

        .get-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .contact-block {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .get-add {
            color: var(--text-primary);
            text-decoration: none;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .get-add:hover {
            color: #667eea;
            transform: translateX(5px);
        }

        /* Form Styling */
        .form-warp {
            background: var(--card-bg);
            padding: 3rem;
            border-radius: 24px;
            box-shadow: var(--shadow-lg);
            margin-top: 3rem;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }

        .form-fill {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .form-fill-li {
            display: flex;
            flex-direction: column;
        }

        .form-fill-li.Message {
            grid-column: 1 / -1;
        }

        .form-fill-li label {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .form-fill-li input,
        .form-fill-li textarea {
            padding: 1rem 1.25rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            outline: none;
        }

        .form-fill-li input:focus,
        .form-fill-li textarea:focus {
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .custom-textarea {
            resize: vertical;
            min-height: 150px;
            font-family: inherit;
        }

        /* Submit Button */
        .contact-submit {
            margin-top: 2rem;
            text-align: center;
        }

        .btn-style2 {
            background: var(--gradient-1);
            color: white;
            border: none;
            padding: 1rem 3rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-style2::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn-style2:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 25px rgba(102, 126, 234, 0.5);
        }

        .btn-style2:hover::before {
            left: 100%;
        }

        .btn-style2:active {
            transform: translateY(-1px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .section-ptb {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .form-warp {
                padding: 2rem 1.5rem;
            }

            .get-info-ul {
                grid-template-columns: 1fr;
            }

            .form-fill {
                grid-template-columns: 1fr;
            }
        }

        /* Animation Classes */
        [data-animate] {
            opacity: 0;
            animation-duration: 0.8s;
            animation-fill-mode: forwards;
        }

        .animate__fadeInUp {
            animation-name: fadeInUp;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translate3d(0, 40px, 0);
            }

            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        /* Stagger animation delays */
        .get-info-li:nth-child(1) {
            animation-delay: 0.1s;
        }

        .get-info-li:nth-child(2) {
            animation-delay: 0.2s;
        }

        .get-info-li:nth-child(3) {
            animation-delay: 0.3s;
        }

        .form-fill-li:nth-child(1) {
            animation-delay: 0.1s;
        }

        .form-fill-li:nth-child(2) {
            animation-delay: 0.2s;
        }

        .form-fill-li:nth-child(3) {
            animation-delay: 0.3s;
        }

        .form-fill-li:nth-child(4) {
            animation-delay: 0.4s;
        }
    </style>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    <div class="floating-shape shape-1"></div>
    <div class="floating-shape shape-2"></div>
    <div class="floating-shape shape-3"></div>

    <main>
        @include('includes.breadcrumbs')
        <!-- Get Info Area -->
        @unless(request()->segment(1) == 'quick-enquiry')
        <section class="get-info-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="about-content">
                            <!-- Section Title -->
                            <div class="section-capture text-center">
                                <div class="section-title">
                                    <h2 data-animate="animate__fadeInUp">
                                        <span>Get in touch</span>
                                    </h2>
                                </div>
                            </div>

                            <!-- Contact Info Cards -->
                            <div class="get-info contact-detail">
                                <ul class="get-info-ul">
                                    <li class="get-info-li" data-animate="animate__fadeInUp">
                                        <span class="get-icon">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </span>
                                        <div class="contact-block">
                                            <strong>Location</strong>
                                            <span class="get-add">Ponda, Goa, India</span>
                                        </div>
                                    </li>
                                    <li class="get-info-li" data-animate="animate__fadeInUp">
                                        <span class="get-icon">
                                            <i class="bi bi-telephone-fill"></i>
                                        </span>
                                        <div class="contact-block">
                                            <strong>Phone</strong>
                                            <a href="tel:08322318095" class="get-add">0832-2318095</a>
                                            <a href="tel:+919339330099" class="get-add">+91-9339330099</a>
                                        </div>
                                    </li>
                                    <li class="get-info-li" data-animate="animate__fadeInUp">
                                        <span class="get-icon">
                                            <i class="bi bi-envelope-fill"></i>
                                        </span>
                                        <div class="contact-block">
                                            <strong>Email</strong>
                                            <a href="mailto:mahalaxmisteels2316670@gmail.com" class="get-add">
                                                mahalaxmisteels2316670@gmail.com
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endunless
        <!-- Contact Form Section -->
        <section class="drop-detail section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <!-- Section Title -->
                        <div class="section-capture text-center">
                            <div class="section-title">
                                <h2 data-animate="animate__fadeInUp">
                                    <span>Drop us a message</span>
                                </h2>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="form-warp contact-detail">
                            <div class="contact-form-list">
                                <form method="post" action="{{ route('enquiry.store') }}">
                                    @csrf

                                    <input type="hidden" name="page_url" value="{{ url()->current() }}">

                                    <ul class="form-fill">
                                        <li class="form-fill-li Name" data-animate="animate__fadeInUp">
                                            <label>Name *</label>
                                            <input type="text" name="name" autocomplete="name"
                                                placeholder="Enter your name" required>
                                        </li>
                                        <li class="form-fill-li Email" data-animate="animate__fadeInUp">
                                            <label>Email Address *</label>
                                            <input type="email" name="email" autocomplete="email"
                                                placeholder="Enter your email" required>
                                        </li>
                                        <li class="form-fill-li Phone" data-animate="animate__fadeInUp">
                                            <label>Phone Number *</label>
                                            <input type="tel" name="mobile_no"
                                                placeholder="Enter your 10-digit phone number" required pattern="[0-9]{10}"
                                                title="Please enter a 10-digit mobile number">
                                        </li>
                                        <li class="form-fill-li Message" data-animate="animate__fadeInUp">
                                            <label>Message</label>
                                            <textarea name="message" rows="6" placeholder="Write your message here..." class="custom-textarea"></textarea>
                                        </li>
                                    </ul>
                                    <div class="contact-submit" data-animate="animate__fadeInUp">
                                        <button type="submit" class="btn btn-style2" style="color:#000;">
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
