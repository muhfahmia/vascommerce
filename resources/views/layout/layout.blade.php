<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vascommerce - @yield('title', 'Landing Page')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon-vascomm.png" rel="icon">
  <link href="assets/img/icon-vascomm.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair Display" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/css/aos.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/template/style.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

    <div id="header" class="container-fluid text-center fixed-top">
        <div class="d-flex flex-row justify-content-center justify-content-md-left">
            <div class="col-md-2">
                <a href="{{url('')}}">
                    <img class="img-fluid" src="assets/img/vascommLogo.png" alt="logo" srcset="">
                </a>
            </div>
            <div class="col-md-6 offset-md-1 text-center d-none d-md-block">
                <div class="input-group">
                    <input type="text" class="form-control home-search-input" placeholder="Cari parfum kesukaanmu" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="p-2 home-search-input-icon" id="basic-addon2"><i class="bi bi-search"></i></div>
                </div>
            </div>
            <div class="col-md-3 d-none d-md-block">
                @if(!Auth::check())
                <a href="{{url('login')}}">
                <button type="button" class="btn btn-primary btn-masuk">MASUK</button>
                </a>
                <a href="{{url('register')}}">
                    <button type="button" class="btn btn-primary btn-daftar">DAFTAR</button>
                </a>
                @else 
                <a href="{{url('logout')}}">
                    <button type="button" class="btn btn-danger">Logout</button>
                </a>
                @endif
            </div>
        </div>
    </div>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 px-md-0 px-3">
                    @if(Session::has('message'))
                    <div class="alert alert-{{Session::get('type')}}" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 offset-md-1 text-md-center">
                    <div class="p-md-3 py-2">
                        <img src="assets/img/vascommLogo.png" class="img-fluid" alt="logo">
                    </div>
                    <div class="py-md-4 py-2 footer-caption">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo in vestibulum, sed dapibus tristique nullam.
                    </div>
                    <div class="d-flex flex-row justify-content-md-center">
                        <div class="p-3"><i class="bi bi-facebook footer-icon"></i></div>
                        <div class="p-3"><i class="bi bi-twitter footer-icon"></i></div>
                        <div class="p-3"><i class="bi bi-instagram footer-icon"></i></div>
                    </div>
                </div>
                <div class="col-md-2 offset-md-1 font-playfair">
                   <div class="py-3 footer-title-menu pb-3">
                        Layanan
                   </div>
                   <div class="footer-menu">
                        Bantuan
                    </div>
                    <div class="footer-menu">
                        Tanya Jawab
                    </div>
                    <div class="footer-menu">
                        Hubungi Kami
                    </div>
                    <div class="footer-menu">
                        Cara Berjualan
                    </div>
                </div>
                <div class="col-md-2 font-playfair">
                    <div class="py-3 footer-title-menu pb-3">
                         Tentang Kami
                    </div>
                    <div class="footer-menu">
                         About Us
                     </div>
                     <div class="footer-menu">
                         Karir
                     </div>
                     <div class="footer-menu">
                         Blog
                     </div>
                     <div class="footer-menu">
                         Syarat & Ketentuan
                     </div>
                </div>
                 <div class="col-md-2 font-playfair">
                    <div class="py-3 footer-title-menu pb-3">
                         Mitra
                    </div>
                    <div class="footer-menu">
                         Supplier
                     </div>
                 </div>
            </div>
        </div>
    </section>
    <div style="background-color:#E4FDFF;height:30px;">
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/template/main.js"></script>

</body>

</html>