<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
       <a style="text-decoration: none;color:#fff;" class="sidebar-brand brand-logo" href="{{ route('admin.dashboard') }}">
            {{-- <img style="width:225px;height:auto;border-radius:50px;" src="{{ asset('front-assets/images/logo.png') }}" alt="logo" /> --}}
            <h4 style="line-height: 10px;">Mahalaxmi Steel</h4>
            <p style="line-height: 10px;">BACKOFFICE</p>
        </a>
       <a style="text-decoration: none;color:#fff;" class="sidebar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('img/gm.png') }}" alt="logo" />
        </a>
    </div>
    <ul class="nav">
       <li class="nav-item profile">
          <div class="profile-desc">
             <div class="profile-pic">
                <div class="count-indicator">
                   <img class="img-xs rounded-circle " src="{{ asset('img/gm.png') }}" alt="">
                   <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                   <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
                   <span>Super Admin</span>
                </div>
             </div>
             <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
             <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                {{-- <a href="{{ route('admin.profile') }}" class="dropdown-item preview-item">
                   <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                         <i class="mdi mdi-settings text-primary"></i>
                      </div>
                   </div>
                   <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                   </div>
                </a> --}}
                <div class="dropdown-divider"></div>
                <a href="{{ route('admin.change-password') }}" class="dropdown-item preview-item">
                   <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                         <i class="mdi mdi-onepassword  text-info"></i>
                      </div>
                   </div>
                   <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                   </div>
                </a>
             </div>
          </div>
       </li>
       <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
       </li>
       <li class="nav-item menu-items">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
          </a>
       </li>
       <li class="nav-item menu-items">
          <a class="nav-link" href="{{ route('admin.all-leads') }}">
          <span class="menu-icon">
          <i class="mdi mdi-human"></i>
          </span>
          <span class="menu-title">All Leads</span>
          </a>
       </li>
       {{-- <li class="nav-item menu-items">
          <a class="nav-link" href="{{ route('admin.all-callback-requests') }}">
          <span class="menu-icon">
          <i class="mdi mdi-call-missed"></i>
          </span>
          <span class="menu-title">All Callback Requests</span>
          </a>
       </li> --}}
       {{-- <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
          <i class="mdi mdi-newspaper"></i>
          </span>
          <span class="menu-title">Blog</span>
          <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.create-category') }}">Create Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-categories') }}">All Categories</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.create-blog') }}">Create Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-blogs') }}">All Blogs</a></li>
             </ul>
          </div>
       </li> --}}
       <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-1" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
          <i class="mdi mdi-home-map-marker"></i>
          </span>
          <span class="menu-title">Product</span>
          <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic-1">
             <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.create-property-category') }}">Create Product Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-property-categories') }}">All Categories</a></li>
                {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('admin.add-property-amenties') }}">Add Amenity</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-property-amenties') }}">All Amenities</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.add-location') }}">Add Location</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-locations') }}">All Location</a></li> --}}
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.create-property') }}">Create Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-properties') }}">All Product</a></li>
             </ul>
          </div>
       </li>
       {{-- <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic-2" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
        <i class="mdi mdi-folder-multiple-image"></i>
        </span>
        <span class="menu-title">Gallery</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic-2">
           <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.add-gallery-image') }}">Add Gallery Image</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ route('admin.all-galleries-images') }}">All Gallery Images</a></li>
           </ul>
        </div>
        </li> --}}
    </ul>
 </nav>
