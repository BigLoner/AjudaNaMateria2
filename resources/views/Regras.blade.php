<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Anyar Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('pap/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('pap/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('pap/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('pap/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('pap/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Anyar - v4.9.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Top Bar ======= -->





    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="http://127.0.0.1:8000/">AjudaNaMatéria</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Inicio</a></li>
                    <li><a class="nav-link scrollto active" href="Regras">Regras</a></li>
                    <li><a href="Blog">Matéria</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                <div class="cta d-none d-md-block">

                </div>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->



    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Regras</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">

                    <ul>
                        <li><i class="ri-check-double-line"></i>Respeitar todos os membros do site.</li>
                        <li><i class="ri-check-double-line"></i>Não enviar ficheiros sobre o que não é pretendido. </li>
                        <li><i class="ri-check-double-line"></i>Não usar vocabulário inapropriado como por exemplo
                            palavrões.</li>
                        <li><i class="ri-check-double-line"></i>Os comentários devem ser moderados, por isso pedimos que
                            não acha “spam”.</li>
                        <li><i class="ri-check-double-line"></i>Qualquer post que seja feito é pedido que seja de acordo
                            com o site, por exemplo posts sobre jogos não serão permitidos (a não ser que esses jogos
                            sejam sobre educação).</li>
                        <li><i class="ri-check-double-line"></i>Não criar discussões desnecessárias.</li>
                        <li><i class="ri-check-double-line"></i>Não falar sobre temas que nada têm haver com o site como
                            religião e política.</li>

                    </ul>
                </div>
            </div>
    </section><!-- End About Us Section -->






    <!-- ======= Contact Section =======
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                <div class="col-lg-5">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>Ajuda</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>

                    </form>

                </div>

            </div>

        </div> -->
    </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('pap/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('pap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('pap/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('pap/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('pap/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('pap/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('pap/assets/js/main.js')}}"></script>
'
</body>

</html>
