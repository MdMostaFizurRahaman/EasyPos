<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('template')}}/css/slim.css">

  </head>
  <body>

    <div class="page-error-wrapper">
      <div>
        <h1 class="error-title">401</h1>
        <h5 class="tx-sm-24 tx-normal">Oopps. You are unauthorized to access.</h5>
        <p class="mg-b-50">You need to get an admin account to access the page.</p>
         <p class="mg-b-50"><a href="{{url('/home')}}" class="btn btn-error">Back to Home</a></p>
        <p class="error-footer">&copy; Copyright {{date('Y')}}. All Rights Reserved. Easy Fashion Ltd.</p>
      </div>

    </div><!-- page-error-wrapper -->

  </body>
</html>
