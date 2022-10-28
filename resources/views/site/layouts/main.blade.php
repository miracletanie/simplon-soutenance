<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Location de viehicule</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  @include('site.layouts.includes.css')
  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
    {{-- @include('site.layouts.includes.search') --}}
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
    @include('site.layouts.includes.menu')
  <!--/ Nav End /-->

  @yield('content')

  <!--/ footer Star /-->
  {{-- @include('site.layouts.includes.section-footer') --}}
  @include('site.layouts.includes.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  @include('site.layouts.includes.js')
</body>
</html>
