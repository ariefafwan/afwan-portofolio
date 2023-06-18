<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="afwan" />
    <title> {{ $page }} | Arief Afwan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset ('favicon/favicon.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- Link Style -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link href="{{ asset ('assets/css/dashboard.css') }}" rel="stylesheet" />

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: aliceblue;
        }
        #loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
        .center { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        }
    </style>
    
</head>

<body class="sb-nav-fixed">
    <div id="loader" class="center"></div>
    <!-- Content -->
    @include('admin.partials.nav-admin')

    <div id="layoutSidenav">
        @include('admin.partials.side-admin')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{ $page }}</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $page }} </li>
                    </ol>
                    @yield('body')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Teuku M. Arief Afwan 2023</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin Ingin Keluar ?</h5>
                    <button type="button" data-bs-dismiss="modal" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">Pilih logout untuk keluar dan Mengakhiri Sesi</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- scripts -->
    @include('sweetalert::alert')
    <script>
        document.onreadystatechange = function() { 
            if (document.readyState !== "complete") { 
                document.querySelector( 
                "body").style.visibility = "hidden"; 
                document.querySelector( 
                "#loader").style.visibility = "visible"; 
            } else { 
                document.querySelector( 
                "#loader").style.display = "none"; 
                document.querySelector( 
                "body").style.visibility = "visible"; 
            } 
        }; 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    @yield('js')
</body>

</html>