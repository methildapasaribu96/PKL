<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Styles -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/jquery.dataTables.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/selectize.css') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--     <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" href="/css/master.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navigation-default">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/homepage') }}">
                        <img class="logo" src="/img/TSP.png" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <div class="nav-right navigation-right">
                        <!-- Authentication Links -->

                        @if (Auth::guest())
                            <a class="menu" href="{{ url('/visi_misi_taspen') }}">Informasi PT.Taspen</a>
                            <a class="menu" href="{{ url('/informasi_mutasi') }}">Informasi Mutasi</a>
                            <a class="menu" href="{{ url('/search') }}">Pencarian Pensiunan</a>
                            <a class="btn-green" href="{{ route('login') }}">Login</a>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                        @role('member')
                            <a class="menu" href="{{ url('/home') }}">Menu</a>
                            <a class="menu" href="{{ route('identitas_pribadi.index') }}">Kelola Data</a>
                            <a class="menu" href="{{ url('/search') }}">Pencarian Pensiunan</a>

                        @endrole

                        @role('admin')
                            <a class="menu" href="{{ url('/home') }}">Dashboard</a>
                            <a class="menu" href="{{ route('members.index') }}">Member</a>
                            <a class="menu" href="{{ route('pensiunans.index') }}">Pensiunan</a>
                            <a class="menu" href="{{ route('mutasis.index') }}">Mutasi</a>
                        @endrole

                            <div class="dropdown menu menus">

                                <a style="color:#0fd121;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->pensiunan->nama_pensiunan }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        @include('layouts._flash')
        @yield('content')
    </div>

    <footer class="container-fluid">
      <div class="row footer-box">
        <div class="col-md-6">
          <img class="logo-footer" src="/img/cantiktaspen.png" alt="">
        </div>
        <div class="col-md-6">
          <p>
          &copy Sistem Informasi Pengelolaan Data Pensiunan. All Right Reserved 2017
          </p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->

    <script src="/js/jquery-3.1.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/selectize.min.js"></script>
    <script src="/js/custom.js"></script>
    @yield('scripts')
</body>
</html>
