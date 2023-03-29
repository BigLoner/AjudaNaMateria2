<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - Anyar Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('pap/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('pap/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('pap/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('pap/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('pap/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Anyar - v4.9.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">

            </div>
            <ul class="navbar-nav ms-auto">

                <!-- Authentication Links -->

            </ul>
        </div>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">AjudaNaMateria</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto " href="{{ route('admin.home') }}">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('admin.regras') }}">Regras</a></li>
                    <li><a href="{{ route('admin.blog') }}" class="nav-link scrollto active">Matéria</a></li>
                    @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown" style="">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <div style="color:#333"> {{ __('Logout') }}</div>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest


                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <h2>Matéria</h2>
                <i><a href="{{ route('admin.blog') }}"><button type="submit" class="btn btn-primary" >Voltar à Matéria </button></a>


            </div>

        </section><!-- End Breadcrumbs -->

        <section id="blog" class="blog">
            <div class="mt-5 container" data-aos="fade-up">

                <div class="row">
                    {{-- d-flex justify-content-between --}}
                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">

                          <div class="entry-img">
                              @if ($post->imagem)
                                  <img src="{{ asset('appimgs/posts/' . $post->imagem) }}" alt="{{ $post->titulo }}"
                                      class="img-fluid" style="object-fit: cover;object-position: center">
                              @endif
                          </div>

                          <h2 class="entry-title">
                              <a href="#">{{ $post->titulo }}</a>
                          </h2>

                          <div class="entry-meta">

                              <ul>
                                  <li class="d-flex align-items-center">
                                      <i class="bi bi-person"></i>
                                      <a href="#">{{ $post->user->name }}</a>
                                  </li>
                                  <li class="d-flex align-items-center">
                                      <i class="bi bi-clock"></i>
                                      <a href="#"><time
                                              datetime="2020-01-01">{{ $post->updated_at->diffForHumans() }}</time></a>
                                  </li>
                              </ul>
                          </div>

                          <div class="entry-content">
                              <blockquote>
                                  <p>
                                      {{ $post->destaque }}
                                  </p>
                              </blockquote>

                              <p>
                                  {{ $post->desenvolvimento }}
                              </p>
                          </div>
                      </article>




                    </div>
                </div>
            </div>

        </section>
        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contacte-nos</h4>
                            <p>
                                Rua do Parque, 2120-092 Salvaterra de Magos<br>
                                Portugal <br><br>
                                <strong>Email:</strong> AjudaNaMateria@gmail.com<br>
                            </p>

                        </div>





                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Anyar</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    <p> Modificado por: Rodrigo Teixeira e Gabriel Coelho.</p>
                </div>
            </div>
        </footer><!-- End Footer -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('pap/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('pap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('pap/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('pap/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('pap/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('pap/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('pap/assets/js/main.js') }}"></script>
</body>

</html>
