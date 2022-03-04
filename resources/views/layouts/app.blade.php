<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

  
        <link rel="stylesheet" href="{{asset('vendor/css/theme.min.css')}}" type="text/css"> 
        <link rel="stylesheet" href="{{asset('vendor/bootstrap-icons/font/bootstrap-icons.css')}}" type="text/css"> 
    
      <link rel="stylesheet" href="{{asset('vendor/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

        <script src="{{ mix('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
   

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')

          

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>




        @stack('modals')

        @livewireScripts

  

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/owlcarousel2/dist/owl.carousel.min.js') }}"></script>


      @stack('carusel-productos')
      


</html>
