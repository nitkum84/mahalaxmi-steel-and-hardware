@extends('layouts.master')
@section('main')
    @php
        $title = '404 Error Page Not Found | Mahalaxmi Steel and Hardware';
        $desc = '';
    @endphp
    <main>
        @include('includes.breadcrumbs')
        <section class="page-not-found section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="search-error-wrapper">
                            <h2 data-animate="animate__fadeInUp" class="animate__fadeInUp animate__animated">404</h2>
                            <p data-animate="animate__fadeInUp" class="animate__fadeInUp animate__animated">Sorry but the page
                                you are looking for does not exist, have been removed, name changed or is temporarity
                                unavailable.</p>
                            <a href="{{ route('front.home') }}" class="btn btn-style2 animate__fadeInUp animate__animated"
                                data-animate="animate__fadeInUp">Go to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
