<!DOCTYPE html>
<html lang="en">
    @include('admin.includes.head')
   <body>
      <div class="container-scroller">
         @include('admin.includes.sidebar')
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.includes.header')
            <!-- partial -->
            @yield('main')
            <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
      </div>
      @include('admin.includes.functions')
   </body>

</html>
