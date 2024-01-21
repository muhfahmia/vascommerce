<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Vascommerce</title>
    <link rel="stylesheet" href="assets/dashboard/app.css" />
    <link rel="stylesheet" href="assets/dashboard/mainDashboard.css" />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
              <div class="logo">
                <a href="{{url('dashboard')}}"><img class="img-fluid" src="assets/img/vascommLogo.png" alt="Logo"/></a>
              </div>
              <div class="sidebar-toggler x">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-item active">
                <a href="{{url('dashboard')}}" class="sidebar-link">
                  <i class="bi bi-house-door"></i>
                  <span>Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-person"></i>
                  <span>Manajemen User</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-journal-text"></i>
                  <span>Manajemen Produk</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        <div class="page-heading">
          <h3>Profile Statistics</h3>
        </div>
        <div class="page-content">
          <section class="row">
           
          </section>
        </div>

        <footer>
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>2024 &copy; All rights reserved</p>
            </div>
            <div class="float-end">
              <p>
                Crafted with
                <span class="text-danger"><i class="bi bi-heart"></i></span> by
                <a href="#">Fahmi Ardiyanto</a>
              </p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="assets/dashboard/bootstrap.js"></script>
    <script src="assets/dashboard/app.js"></script>
  </body>
</html>
