<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/vendor/iconly/bold.css') }}">
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/datatables/style.css') }}">
    @stack('css')
</head>

<body>
    <div id="app">
        {{-- sidebar --}}
        @include('partial.sidebar.sidebar')
        {{-- endsidebar --}}
        <div id="main">
            <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3> @yield('judul') </h3>
                            <p class="text-subtitle text-muted">@yield('sub')</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> @yield('judul')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    @yield('content')
                </div>
        </div>
    </div>
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('/vendor/datatables/simple-datatables.js') }}"></script>
    <!-- sweet alert -->
    <script script src=" https://cdn.jsdelivr.net/npm/sweetalert2@10 "></script>
    @stack('js')
</body>

</html>
