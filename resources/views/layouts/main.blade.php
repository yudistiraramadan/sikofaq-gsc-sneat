
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  dasneat-assets-path="sneat/assets/"
  data-template="vertical-menu-template-free"
>
  {{-- Header --}}
    @include('layouts.header')
  {{-- End of Header --}}

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Sidebar -->
            @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Layout container -->
        <div class="layout-page">

            <!-- Navbar -->
                @include('layouts.navbar')
            <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @include('layouts.breadcrumb')
                @yield('content')
            </div>


            <!-- Footer -->
                @include('layouts.footer')
            <!-- End of Footer -->

            {{-- <div class="content-backdrop fade"></div> --}}
          </div>
        </div>
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    {{-- Scripts --}}
    @include('layouts.script')
    {{-- End of Scripts --}}
  </body>
</html>
