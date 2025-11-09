<!-- breadcrumb start -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="col">
            <div class="row">
                <div class="breadcrumb-index">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-ul">
                        <li class="breadcrumb-li">
                            <a class="breadcrumb-link" href="{{ route('front.home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-li">
                            <span
                                class="breadcrumb-text">{{ __(strtoupper(str_replace('-', ' ', request()->segment(3) ?? (request()->segment(2) ?? (request()->segment(1) ?? ''))))) }}</span>
                        </li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
