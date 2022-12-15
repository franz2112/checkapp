<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link sizes="76x76" rel="icon" type="image/png" href="/../assets/admin/img/CheckappLogo.png" />
    <title>@yield('title') {{ config('app.name', 'CheckApp') }}</title>
      
    
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="/../assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/../assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/../assets/admin/css/nucleo-svg.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>

    @vite([
        'public/assets/admin/css/soft-ui-dashboard.css', 
        
        'public/assets/admin/js/soft-ui-dashboard.js', 
          
        'public/assets/vendor/all.js'
         ])
      
      @livewireStyles
  </head>