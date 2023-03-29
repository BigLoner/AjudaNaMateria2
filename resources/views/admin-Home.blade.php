<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Anyar Bootstrap Template - Index</title>
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
    @livewireStyles
</head>

<body>



    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">AjudaNaMateria@gmail.com</a>
            </div>

        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- <h1 class="logo"><a href="http://127.0.0.1:8000/">AjudaNaMatéria</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#" class="logo"><img src="{{ asset('pap/assets/img/logoedit.png') }}" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Inicio</a></li>
                    <li><a class="nav-link scrollto" href="regras">Regras</a></li>
                    <li><a href="blog">Matéria</a></li>
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
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Bem vindo a <span>AjudaNaMatéria</span></h2>
                    <p class="animate__animated animate__fadeInUp">O site que te ajuda a estudar, resolver exercícios e
                        esclarece as tuas dúvidas.</p>
                    <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Saiba
                        mais!</a>
                </div>
            </div>


        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Icon Boxes Section ======= -->
        <section id="icon-boxes" class="icon-boxes">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title">Moderadores</h4>
                            <p class="description">Os Moderadores irão cuidar da informação que é tratada e dos
                                utilizadores que poderão vir a desrespeitar as regras do site.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title">Professores</h4>
                            <p class="description">Os Professores vão ter a permissão de editar a informação tratada
                                pelos alunos, serão tratados com o devido respeito e ajudarão no que poderem nos seus
                                tempos livres, poderão também carregar fichas de exercícios para os alunos aplicarem os
                                seus conhecimentos e verem assim se conseguiram tirar as dúvidas que tinham.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title">Alunos</h4>
                            <p class="description">Os alunos poderão publicar as suas perguntas e respostas nos
                                respetivos tópicos, podem também comentar as publicações dos outros alunos para os
                                ajudar.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"> <a href="Regras"></a><i class="bx bx-layer"></i></div>
                            <a href="Regras">
                                <h4 class="title">Regras</h4>
                            </a>
                            <p class="description">As regras serão apresentadas aqui, se tiver alguma dúvida esta é a
                                chance de esclarecer, clique no titulo para saber mais.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Icon Boxes Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sobre</h2>
                    <p>Bem vindos ao site “AjudaNaMateria”! Este site foi criado por Gabriel Coelho e Rodrigo Teixeira,
                        dois alunos da Escola Básica e Secundária de Salvaterra de Magos com a ajuda do professor
                        António Andrade. Esta ideia foi criada para o projeto PAP onde teremos de apresentar o nosso
                        projeto que seria a criação deste site.</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Este site consiste em ajudar os alunos na sua vida escolar, seja a responder dúvidas ou a
                            ajudar a estudar com fichas e respostas dos professores.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Ajuda-te nos teus estudos com mais acesso a várias
                                matérias!</li>
                            <li><i class="ri-check-double-line"></i> Tens muitas fichas para resolver e treinar para os
                                testes!</li>
                            <li><i class="ri-check-double-line"></i> Se tiveres alguma dúvida podes sempre falar com um
                                membro ou professor!</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            O objetivo seria comunicação com vários professores que estão dispostos a ajudar e outros
                            alunos que também podem responder ás dúvidas enquanto também as colocam. O nosso site tem a
                            característica de não se limitar a só uma pessoa, podem ser pessoas diferentes tendo uma
                            opinião de vários professores e membros de várias disciplinas.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= F/Q ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-5 align-items-stretch position-relative"
                        style='background-image: url("{{ asset('pap/assets/img/FQ.jpg') }}");' data-aos="fade-right">

                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch"
                        data-aos="fade-left">

                        <div class="content">
                            <h3>F/Q <strong>Perguntas e resposta sobre o site</strong></h3>
                            <p>
                                Aqui tem algumas perguntas e respostas comuns.
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-bs-toggle="collapse" class="collapsed"
                                        data-bs-target="#accordion-list-1"><span>01</span> É preciso pagar para aceder
                                        ao site? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Este site é completamente grátis, não vamos cobrar nada porque esse não é o
                                            nosso objetivo.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> É preciso criar conta? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Para aceder á parte do blog vai ser preciso criar conta, só assim podemos
                                            controlar e manter a ordem no nosso site sem haver usuários que possam
                                            pertubar as pessoas.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="300">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Como posso falar com os moderadores quando
                                        estiver com problemas? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Iremos disponibilizar o nosso email para qualquer dúvida ou ajuda que
                                            podemos dar se alguém precisar de colocar alguma questão. Também podem
                                            perguntar a outros membros se precisarem de algo.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End F/Q -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Serviços</h2>
                    <p>O que este site pode oferecer? Bom nesta parte podemos explicar um pouco melhor do que se trata
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4>Fichas de matéria</a></h4>
                            <p>Poderão ter acesso a fichas que professores ou outros membros possam deixar nos seus
                                topics para estudar</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4>Esclarecer dúvidas</a></h4>
                            <p>Aqui poderás encontrar as respostas que desejas sobre o que procuras, fala com os outros
                                membros ou professores para ficares esclarecido</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h4>Falar com outras pessoas</a></h4>
                            <p>Podes falar com várias pessoas que te podem ajudar no teu conhecimento e talvez possas
                                ganhar um novo amigo</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-brightness-high"></i>
                            <h4>Criar tópicos</a></h4>
                            <p>Podes criar tópicos sobre as matérias que queres ajuda ou ajudar outras pessoas </p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-calendar4-week"></i>
                            <h4>Conselhos</a></h4>
                            <p>Nos comentários podes receber conselhos de outras pessoas em relação aos tópicos
                                publicados, á muitas formas de aprender só tens de achar a tua!</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4>Ajudar outras pessoas</a></h4>
                            <p>Gostas de ajudar outras pessoas nos estudos? Então estás num bom caminho! Neste site tens
                                a chance de ajudar outros membros com as suas questões e também pode ser ajudado se
                                precisares. </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Escola onde foi feito</h3>
                        <p> Aqui vamos deixar o site da escola em que foi feito o nosso trabalho, se alguém estiver
                            interessado em explorar como é o nosso ambiente.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="https://site.ae-salvaterra.pt/">Clique Aqui!</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Equipa</h2>
                    <p>Aqui estão apresentadas as pessoas que realizaram e ajudaram na criação deste projeto </p>
                </div>

                <div class="row">

                    <div class="col-lg-5.1" data-aos="fade-up" data-aos-delay="100">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{asset('pap/assets/img/team/Team-1.png')}}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Rodrigo Teixeira</h4>
                                <span>Criador do Site</span>
                                <p>Encarregado do código feito no site</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5.1 mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{asset('pap/assets/img/team/Team-2.png')}}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Gabriel Coelho</h4>
                                <span>Criador do site</span>
                                <p>Encarregado da base de dados e das imagens colocadas no site</p>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->

        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contacte-nos</h2>
                </div>

                <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                    <div class="col-lg-5">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localização:</h4>
                                <p>Rua do Parque, 2120-092 Salvaterra de Magos</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>AjudaNaMateria@gmail.com</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nome" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Assunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Carregando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">A sua mensagem foi enviada, obrigado!</div>
                            </div>
                            <div class="text-center"><button type="submit">Envie a mensagem</button></div>
                        </form>

                    </div>

                </div>

            </div>
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
    <script src="{{ asset('pap/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('pap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pap/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('pap/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('pap/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('pap/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('pap/assets/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>
