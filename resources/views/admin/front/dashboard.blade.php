@extends('admin.layouts.master')
@section('main')
@php
use Carbon\Carbon;
@endphp
<div class="main-panel">
    <div class="content-wrapper">
       <div class="row">
          <div class="col-12 grid-margin stretch-card">
             <div class="card corona-gradient-card" style="background-image: linear-gradient(to left, #000447, #911a6c) !important;">
                <div class="card-body py-0 px-0 px-sm-3">
                   <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                         <img src="{{ asset('assets/images/dashboard/Group126%402x.png') }}" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                         <h4 class="mb-1 mb-sm-0">Hi, Mahalaxmi Steel and Hardware</h4>
                         <p class="mb-0 font-weight-normal d-none d-sm-block">Good day! . You can find all your website reports below. </p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                         <span>
                         <a href="{{ route('admin.all-leads') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Check Leads</a>
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
             <div class="card">
                <div class="card-body">
                   <div class="row">
                      <div class="col-9">
                         <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $enquiryCount }}</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">+{{ $enquiryCountLastWeek }}</p>
                         </div>
                      </div>
                      <div class="col-3">
                         <div class="icon icon-box-success ">
                            <span class="mdi mdi-contact-mail"></span>
                         </div>
                      </div>
                   </div>
                   <h6 class="text-muted font-weight-normal">Enquiry Leads</h6>
                </div>
             </div>
          </div>
          {{-- <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
             <div class="card">
                <div class="card-body">
                   <div class="row">
                      <div class="col-9">
                         <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $callbackCount }}</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">+{{ $callbackCountLastWeek }}</p>
                         </div>
                      </div>
                      <div class="col-3">
                         <div class="icon icon-box-secondary">
                            <span class="mdi mdi-call-missed"></span>
                         </div>
                      </div>
                   </div>
                   <h6 class="text-muted font-weight-normal">Callbacks Requests</h6>
                </div>
             </div>
          </div> --}}
          <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
             <div class="card">
                <div class="card-body">
                   <div class="row">
                      <div class="col-9">
                         <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{ $propertyCount }}</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium">+{{ $propertyCountLastWeek }}</p>
                         </div>
                      </div>
                      <div class="col-3">
                         <div class="icon icon-box-warning ">
                            <span class="mdi mdi-home"></span>
                         </div>
                      </div>
                   </div>
                   <h6 class="text-muted font-weight-normal">Total Products</h6>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.includes.footer')
    <!-- partial -->
 </div>
@endsection
