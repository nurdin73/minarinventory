<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ config('minar.site_description') }}">
    <meta name="keywords" content="{{ config('minar.site_keywords') }}">
    <meta name="author" content="{{ config('minar.app_author') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ assetVersion('assets/css/style-landing.css') }}" />
    <title>{{ config('minar.site_title_acronym') }}</title>
</head>

<body>
    <!-- Start Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container-fluid ps-4 pe-4">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo.png" width="70%" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#home"> BERANDA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"> TENTANG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact"> KONTAK </a>
                        </li>
                        <li class="nav-item">
                            @guest
                                <a href="{{ route('login') }}" class="btn rounded-pill text-white ms-3 p-1 px-3">{{ __('lang.login') }}</a>
                            @endguest
                            @auth
                                <a href="{{ route('dashboard') }}" class="btn rounded-pill text-white ms-3 p-1 px-3">{{ __('lang.dashboard') }}</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navbar -->

    <!-- Start Dashboard Section -->
    <section id="home" class="pt-5">
        <div class="container-fluid hero-bg">
            <br /><br />
            <div class="row flex-row-reverse pb-5">
                <div class="col-lg-6 col-md-6 col-sm-12 pt-3 centered">
                    <img src="{{ asset('assets/images/judge.png') }}" width="80%" class="centered mb-4"
                        alt="" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 centered">
                    <div class="row space-hero left-style-text">
                        <p class="p-hero mt-3">M I N A R</p>
                        <h2 class="pb-2">
                            <b> Warranty Registration </b>
                        </h2>
                        <p class="hero-text">
                            Register your warranty to unlock the benefits.
                        </p>
                        <a href="{{ route('register') }}" target="_blank">
                            <button type="submit" class="btn rounded-pill text-white px-5">
                                {{ __('lang.register') }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Dashboard Section -->

    <!-- Start Container Section -->
    <div class="container pb-5">
        <!-- Start About Section -->
        <section id="about" class="pt-4">
            <br />
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 centered">
                    <img src="{{ asset('assets/images/about-img.png') }}" width="55%" alt="" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 centered">
                    <div class="container">
                        <div class="row">
                            <h3 style="color: #0e29ce" class="right-style-text mt-4">
                                <b> About Us </b>
                            </h3>
                            <p class="mt-5" style="text-align: justify">
                               Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis soluta architecto magni nesciunt, dolorem mollitia laborum? Qui, animi dolor deserunt quis quas saepe assumenda quod eum dolores officia. Explicabo, suscipit.
                               Odio nemo laboriosam natus dolor est quam reiciendis voluptatibus possimus, vel ducimus autem officia quia, vero vitae ipsa dignissimos quae sunt blanditiis. Labore, illo. Exercitationem atque commodi repudiandae? Omnis, nam?
                               Aliquam, distinctio magnam eos veritatis assumenda, explicabo, non necessitatibus sed commodi at delectus! Perspiciatis ab asperiores quaerat sequi laboriosam obcaecati id delectus quis harum reprehenderit? Vitae maiores architecto nihil consequatur?
                               Quo neque veniam reprehenderit doloremque sunt illum tenetur recusandae laborum, doloribus repellendus esse pariatur modi quam possimus ab illo quia aliquid ex autem. Voluptatum perspiciatis nihil nulla, non minima corrupti?
                               Sint, modi quia? Accusantium libero harum dolores, amet voluptatibus alias praesentium iusto corrupti excepturi voluptatum eum provident velit dignissimos sint tempore? Iusto nesciunt sit illo repellendus officia, ipsam culpa perspiciatis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        
    </div>
    <!-- End Container Section -->

    <!-- Start Contact Section -->
    <section id="contact" class="about-page mt-5 pb-3 pt-3">
        <h3 class="text-center py-4" style="color: rgb(95, 95, 95)">
            <b> KONTAK </b>
        </h3>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 pb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3136.017267408894!2d106.94474016755763!3d-6.213710892817903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b7c44fd0eeb%3A0x6faea368bbbc4b1f!2sState%20Administrative%20Court%20(Administrative%20Court)%20-%20Jakarta!5e0!3m2!1sen!2sid!4v1679993684657!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <b> About Us </b>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
                        nihil consequatur rem. Sunt nobis consequuntur, adipisci, quasi
                        temporibus, inventore officia excepturi sapiente iure fugiat
                        asperiores et fuga enim dignissimos. Quae.
                    </p>

                    <b> Address </b>
                    <p></p>

                    <b> E-mail </b>
                    <p></p>

                    <b> Phone </b>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer -->
    <div class="footer">{!! '&copy; ' .config('minar.site_title'). ' - ' . now()->year !!}</div>
    <!-- End Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <script>
        const li = document.querySelectorAll(".nav-item");
        const sec = document.querySelectorAll("section");

        function activeMenu() {
            let len = sec.length;
            while (--len && window.scrollY + 97 < sec[len].offsetTop) {}
            li.forEach((ltx) => ltx.classList.remove("active"));
            li[len].classList.add("active");
        }
        activeMenu();
        window.addEventListener("scroll", activeMenu);
    </script>
</body>

</html>
