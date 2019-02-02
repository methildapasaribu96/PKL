

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TASPEN</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/jquery.dataTables.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/selectize.css') }}" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/master.css">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>
    <body>

        <header class="lr-padding container-fluid">
          <div class="navigation">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Menu</a>
                        <a href="{{ route('identitas_pribadi.index') }}">Kelola Data</a>
                        <a href="{{ url('/search') }}">Pencarian Pensiunan</a>
                        <a href="{{ url('/hubkami') }}">Hubungi Kami</a>
                        <a style="color:#0fd121;" href="{{ url('/menu') }}">{{ Auth::user()->name }}</a>
                    @else
                      <a href="{{ url('/visi_misi_taspen') }}">Informasi PT.Taspen</a>
                        <a href="{{ url('/informasi_mutasi') }}">Informasi Mutasi</a>
                        <a class="btn-green" href="{{ url('/login') }}">Login</a>
                        {{-- <a href="{{ url('/register') }}">Register</a> --}}
                    @endif
                </div>
            @endif
          </div> <!-- navigation -->

          <div class="header-box">
            <img class="logo-header" src="/img/TSPHEADER.png" alt="">
            <h1 class="title-header">SISTEM PENGELOLAAN DATA PENSIUNAN</h1>
            <h3 class="title-sub">PT.TASPEN JAWA TENGAH</h3>
            <p class="header-subtitle">
              Website aplikasi yang dibuat untuk memberikan fasilitas kepada pengelola data pensiunan PT.TASPEN Jawa Tengah. yang akan berguna dalam pendataan pensiunan di seluruh Jawa Tengah.
            </p>
          </div>

          <div class="container header-bottom">
            <div class="row">
              <div class="col-md-6">
                <p class="hb-title">Temukan kemudahan dalam mengelolah data pensiunan</p>
              </div>
              <div class="col-md-6">
                <a class="btn-coba" href="{{ url('/login') }}">Coba Sekarang</a>
              </div>
            </div>
          </div>

        </header>

        <div class="container-fluid">

          <div class="row section service-box">
            <div class="col-md-6">
              <img class="img-box" src="/img/icon-1.png" alt="">
            </div>
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Mengelola Data Pensiunan</h2>
                <p class="content">
                  Kami memberikan kemudahan untuk mengelola setiap data identitas dan mutasi. Dengan menggunakan fitur ini pensiunan dapat dengan mudah mengalola
                  data pensiunan dengan mudah
                </p>
                <a href="{{ url('/kelola_data_pensiunan') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- Secion One -->

          <div class="row section service-box-middle">
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Pencarian Pensiunan</h2>
                <p class="content">
                  Fitur yang tidak kalah penting adalah fitur yang dapat digunakan
                  untuk mencari para pensiunan yang telah terdaftar. Pencarian pensiunan ini bertujuan
                  untuk untuk mempermudah pencarian data pensiunan PT TASPEN Jawa Tengah
                </p>
                <a href="{{ url('/search') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <img class="img-box-2" src="/img/icon-2.png" alt="">
            </div>
          </div> <!-- Section Two -->

          <div class="row section service-box">
            <div class="col-md-6">
              <img class="img-box" src="/img/icon-3.png" alt="">
            </div>
            <div class="col-md-6">
              <div class="service-content">
                <h2 class="title-content">Informasi Mutasi</h2>
                <p class="content">
                  Dalam webiste juga menyediakan informasi mengenai mutasi PT Taspen.
                  Segala hal kami sediakan bagi pensiunan agar tetap selalu mendapatkan informasi
                  terupdate mengenai proses mutasi
                </p>
                <a href="{{ url('/informasi_mutasi') }}">
                  <span class="btn-green-control">LIHAT</span>
                  <span class="btn-group"><i class="fa fa-chevron-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- Secion Three -->

          <div class="row">
            <div class="ledgar">
              <img class="small-icon" src="/img/cantiktaspen.png" alt="">
              <h2 class="quote">
              Kami Sangat Senang<br>
              Dapat Melayani Anda
              </h2>
            </div>
          </div>

        </div> <!-- Container Fluid -->

        <footer class="container-fluid">
          <div class="row footer-box">
            <div class="col-md-6">
              <img class="logo-footer" src="/img/cantiktaspen.png" alt="">
            </div>
            <div class="col-md-6">
              <p>&copy Sistem Pengelolaan Data Pensiunan. All Right Reserved 2017
              </p>
            </div>
          </div>
        </footer>

    </body>
</html>
