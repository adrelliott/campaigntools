<!doctype html>
<html lang="en">
  <head>
  	<title>CampaignTools.io</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    @stack('plugin-styles')
    @stack('custom-styles')
    
  </head>
  <body>

  	@include('layouts.topnav')

  	<div class="container-fluid"><!-- .container-fluid -->
  		<div class="row pt-4"><!-- .row -->
  			@include('layouts.sidenav')
  			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pt-5">
          @yield('main')
        </main>
      </div><!-- ./row -->
    </div><!-- ./container-fluid -->

    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/feather-icons"></script>

    @stack('plugin-scripts')
    @stack('custom-scripts')

   <script src="/js/app.js"></script>

  </body>
</html>