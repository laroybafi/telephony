<!doctype html>
<html lang="en">
  <head>
    @include('layouts.partials.head')
  </head>
  <body >
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page">
      <!-- Navbar -->
      @include('layouts.partials.navbar')
      <div class="page-wrapper">
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
           @yield('content')
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <!--<li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>-->
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2023
                    <a href="." class="link-secondary">yxnr</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    @include('layouts.partials.scripts')
  </body>
</html>