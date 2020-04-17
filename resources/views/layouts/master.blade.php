<!doctype html>
<html lang="en">
<head>
   <title>CampaignTools.io</title>


   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- App CSS -->
   <link rel="stylesheet" href="/css/app.css">

   <!-- Styles called by partials  -->
   @stack('plugin-styles')
   @stack('custom-styles')


</head>
<body>
  <div id="app">

    <!-- MAIN PANEL -->
    @include('layouts.topnav')
    <!-- /MAIN PANEL -->

    <!-- SIDEBAR -->
    <div class="container-fluid"><!-- .container-fluid -->
        <div class="row pt-4"><!-- .row -->
            @include('layouts.sidenav')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
                @yield('main')
            </main>
        </div><!-- ./row -->
    </div><!-- ./container-fluid -->
    <!-- /SIDEBAR -->

</div>

<!-- Vue.js CDN (We use npm & build) -->
<!-- <script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script> -->

<!-- Script for the app (unused) -->
<script src="/js/app.js"></script>


<!-- Scripts called by the partials -->
@stack('plugin-scripts')
@stack('custom-scripts')


</body>
</html>