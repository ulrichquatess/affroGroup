<!DOCTYPE html>
 <html lang="{{ app()->getLocale() }}" class="no-js"> <!--<![endif]-->
    <head>
 <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
  <title>{{ config('app.name', 'BME Technology') }}</title>

    <link rel="stylesheet" type="text/css" href="{{asset('assets/BME/blog.css')}}">
    </head>
    <body>
        <div class="container">
            
            @yield('content');	

   </div>
</html>         