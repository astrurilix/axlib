<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ isset($title) ? "$title | " : '' }} {{ env('BRAND_NAME') }}</title>

  {{-- GLOBAL STYLE --}}
    <link rel="stylesheet" href="{{ asset('src/css/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('src/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('src/vendor/sweetalert/src/sweetalert.css') }}">
  {{-- /GLOBAL STYLE --}}

  {{-- PAGE STYLE --}}
    @yield('css')
  {{-- /PAGE STYLE --}}
  
</head>
<body>
      {{-- PAGE CONTENT --}}
      <main>
        <div class="container">
    
          <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
    
                    @yield('content')
    
                </div>
              </div>
            </div>
    
          </section>
    
        </div>
      </main>
  {{-- /PAGE CONTENT --}}
  <script src="{{ asset('src/vendor/sweetalert/docs/assets/sweetalert/sweetalert.min.js') }}"></script>
  
  @yield('script')
</body>
</html>