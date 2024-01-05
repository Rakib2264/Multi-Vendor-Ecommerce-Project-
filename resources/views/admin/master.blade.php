<!doctype html>
<html lang="en">

@include('admin.include.css')

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
     @include('admin.include.slidbar')
        <!--end sidebar wrapper -->
        <!--start header -->
       @include('admin.include.header')
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
      @include('admin.include.footer')
    </div>
    <!--end wrapper-->
    <!--start switcher-->
   @include('admin.include.switcher')
    <!--end switcher-->
    <!-- Bootstrap JS -->
    @include('admin.include.js')
</body>

</html>
