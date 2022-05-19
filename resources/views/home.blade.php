<!doctype html>
<html lang="en">


<!-- Mirrored from finxer.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:22:50 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mida microfinance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <!-- ==== Place favicon.ico in the root directory ==== -->

    <!-- ==== CSS here ==== -->
    <link rel="stylesheet" href="site/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="site/assets/css/aos.css">
    <link rel="stylesheet" href="site/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="site/assets/css/progresscircle.css">
    <link rel="stylesheet" href="site/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="site/assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="site/assets/css/nice-select.css">
    <link rel="stylesheet" href="site/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="site/assets/css/meanmenu.css">
    <link rel="stylesheet" href="site/assets/css/main.css">
</head>

<body>

    <!--=======-** Peloaders Start **-=======-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--=======-** Peloaders End **-=======-->
    <!-- site wrapper -->
    <div class="wrapper-site">
        <div class="wrapper-site-overlay"></div>

        <!--=======-** Header Start **-=======-->
        <header class="header-area transparent-header">
            <div class="header-top d-none d-lg-block">
                <div class="container header-top-bg">
                    <div class="header-top-bg">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="header-top-left">
                                    <ul>
                                        <li><a href="#"> <img src="site/assets/img/header/chat.png" alt="imgimg"> Need
                                                Free Consultation?</a></li>
                                        <li><a href="#">Book Schedule Now</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-4">
                                <div class="header-top-right">
                                    <div class="header-top-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="header-lang-wrap">
                                        <select>
                                            <option selected="selected" value="default" hidden="">ENG</option>
                                            <option value="#">Bangla</option>
                                            <option value="#">Arabic</option>
                                            <option value="#">Hindi</option>
                                            <option value="#">Spanish</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sticky-header" class="header-menu">
                <div class="container">
                    <div class="header-bg">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12">
                                <div class=" d-flex align-items-center">
                                    <a href="index-2.html">
                                        <img src="/AdminAssets/images/logo.png" alt="imgimg" style=" width: 50%;">
                                    </a>
                                </div>

                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-8 d-flex align-items-center justify-content-end">
                                <div class="main-menu">

                                    <nav id="mobile-nav">
                                        <ul>

                                            <li class="menu-item-has-children"><a href="#top">Accueil</a>

                                            </li>
                                            <li class="menu-item-has-children"><a href="#nous">A propos de nous</a>

                                            </li>
                                            <li class="menu-item-has-children"><a href="#service">Nos services</a>

                                            </li>
                                            @if (!Auth::user())
                                                <li class="menu-item-has-children"><a
                                                        href="{{ route('login') }}">Connexion</a>
                                                </li>
                                            @else
                                                <li class="menu-item-has-children">
                                                    <a href="{{ route('logout') }}">
                                                        <form action="{{ route('logout') }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger">Deconnection</button>
                                                        </form>
                                                    </a>
                                                </li>
                                            @endif
                                            <li class="menu-item-has-children">
                                                @if (Auth::user())
                                                    @if (Auth::user()->type == 'admin')
                                                        <a href="{{ route('client.index') }}">Administration Panel</a>
                                                    @else
                                                        <a href="{{ route('client.index') }}">Panel de Gestion de mon
                                                            compte</a>
                                                    @endif
                                                @endif

                                            </li>

                                        </ul>
                                    </nav>
                                </div>

                            </div>
                            <div class="col-xl-3 col-lg-2 col-md-7">
                                <div class="header-contact-right">
                                    <div class="phone-icon d-none d-xl-block">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="phone-number d-none d-xl-block ">
                                        <span>Service client</span>
                                        <p>
                                            <a href="tel:+228 56245788">+22856245788</a>
                                        </p>
                                    </div>
                                    <div class="header-contact-btn  d-none d-xl-block">
                                        <a href="contact.html" class="btn btn-primary">contact us</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=======-** Header End **-=======-->
        <main>
            <!--=======-** Slider Start **-=======-->
            <section class="slider-area  d-flex align-items-center slider-bg" data-aos="fade-up">
                <div class="container position-relative">
                    <img class="slider-shape-01 animate-y-axis-slider d-none d-md-block"
                        src="site/assets/img/slider/slider-shape-01.png" alt="img">
                    <img class="slider-shape-02 animate-y-axis-slider" src="site/assets/img/slider/slider-shape-02.png"
                        alt="img">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                            <div class="slider-content">
                                <span class="slider-content__subtitle">Mida microfinance</span>
                                <h2 class="slider-content__title">une microfinance par vous et pour vous</h2>
                                <p class="slider-content__desc">Nous vous assurons les meuilleurs services et les
                                    credits à des tarifs uniques</p>

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="banner-img">
                                <img class="d-none d-lg-block" src="site/assets/images/img3.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Slider End **-=======-->

            <!--=======-** About Start **-=======-->
            <section class="about-area pt-100 pb-65 md-pt-40 md-pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="about-left mb-30" data-aos="fade-up">
                                <div class="about-left__main-thumb">
                                    <img src="site/assets/img/about/about-main.jpg" alt="img">
                                    <a href="https://www.youtube.com/watch?v=om4qTKMuPPs"
                                        class="about-left____main-thumb play-btn popup_video animate-y-axis"><i
                                            class="fas fa-play"></i></a>
                                </div>
                                <div class="about-left__experience-wrap">
                                    <div class="about-left__content">
                                        <h3>25</h3>
                                        <p><span>+</span>Years of experience we just achived</p>
                                    </div>
                                    <img src="site/assets/img/about/about-small.jpg" alt="img"
                                        class="about-left__small-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12" id="nous">
                            <div class="about-right mb-30 pt-60 md-pt-20" data-aos="fade-up">
                                <div class="section-title-wrap mb-25">
                                    <span class="section-title-wrap__subtitle">// about agency</span>
                                    <h2 class="section-title-wrap__title">Professional Business Guidance Agency</h2>
                                </div>

                                <div class="about-rigt__deatils mb-45">
                                    <p class="about-right__desc desc-heilight">25+Contrary to popular belief, Lorem
                                        Ipsum is not simply random text
                                        roots in a piece of classical Latin literature from 45 BC</p>
                                    <p class="about-right__desc">25+Contrary to popular belief, Lorem Ipsum is not
                                        simply random text
                                        roots in a piece of classical Latin literature from 45 BC.Lorem ipsum
                                        lipsum as it is sometimes known, is dummy text used in laying</p>
                                </div>

                                <div class="about-right__bottom">
                                    <a href="contact.html" class="finxer-btn finxer-btn-black">Get Started <i
                                            class="fas fa-arrow-right"></i></a>
                                    <div class="about-right__ceo">
                                        <div class="about-right__img">
                                            <img src="site/assets/img/about/about-ceo.jpg" alt="img">
                                        </div>
                                        <div class="about-right__ceo-text">
                                            <h5>Mehedii Mohammad</h5>
                                            <span>Ceo & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** About End **-=======-->

            <!--=======-** Skill Start **-=======-->
            <section class="section skill-area pt-100 pb-80 md-pt-60 md-pb-60">
                <div class="container position-relative">
                    <img class="skill-shape animate-zoom-in-out" src="site/assets/img/skill/skill-shape.png"
                        alt="imgskill-shape">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="skill-text mb-30" data-aos="fade-right">
                                <div class="section-title-wrap mb-30">
                                    <span class="section-title-wrap__subtitle">// Our Skillsets</span>
                                    <h2 class="section-title-wrap__title">Don,T Miss Updates!</h2>
                                    <p>25+Contrary to popular belief, Lorem Ipsum is not simply random textroots
                                        lipsum as it is sometimes known, is dummy text used in laying</p>
                                </div>
                                <div class="skill-text__cta">
                                    <i class="flaticon-phone-call"></i>
                                    <span>
                                        <a href="tel:+91705-2101-786">+91 705-2101-786</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="skill-warp mb-30" data-aos="fade-up">
                                <div class="skill-warp__single-skill">
                                    <div class="skill-box">
                                        <div class="circlechart" data-percentage="90"></div>
                                        <h2>90 <span>%</span></h2>
                                    </div>
                                    <h4>Problem Solving</h4>
                                </div>
                                <div class="skill-warp__single-skill skill-bg-img">
                                    <div class="skill-box">
                                        <div class="circlechart" data-percentage="80"></div>
                                        <h2>80 <span>%</span></h2>
                                    </div>
                                    <h4>Business Growth</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Skill End **-=======-->

            <!--=======-** Services Start **-=======-->
            <section class="service-area service-bg pt-100 pb-70 md-pt-70 md-pb-40" id="service">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title-wrap text-center mb-45" data-aos="fade-right">
                                <span class="section-title-wrap__subtitle">// Our Service Area</span>
                                <h2 class="section-title-wrap__title">Our Service Solution</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">02</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-analytics"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3> Retirement Planing</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">01</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-bank-1"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3>Banking solutions</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">03</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3>Mutual Funds</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">04</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-money"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3>Investment Plan</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">05</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-taxes"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3>Taxes Planing</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="service-single text-center mb-30">
                                <span class="service-single__number">06</span>
                                <div class="service-single__icon-box mb-25">
                                    <i class="flaticon-strategy"></i>
                                </div>
                                <div class="service-single__content">
                                    <h3>Digital Strategy</h3>
                                    <p class="mb-30">over 1 million+ homes for sale available
                                        on the website, we can match you with
                                        house you will want to call home.</p>
                                </div>
                                <div class="service-single__plus-icon">
                                    <a href="service-details.html"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Services End **-=======-->

            <!--=======-** Choose Us Start **-======-->
            <section class="choose-area pb-220 md-pb-180" data-aos="fade-up">
                <div class="choose-area__bgimg d-none d-lg-block">
                    <a href="https://www.youtube.com/watch?v=om4qTKMuPPs" class="choose-play-btn popup_video"><i
                            class="fas fa-play round-animated-2"></i></a>
                    <img src="site/assets/img/choose/choose-bg.jpg" alt="img">
                </div>
                <img class="choose-area__shape-red d-none d-lg-block animate-y-axis"
                    src="site/assets/img/choose/choose-shap-red.png" alt="img">
                <img class="choose-area__shape-white d-none d-lg-block animate-y-axis"
                    src="site/assets/img/choose/choose-shap-white.png" alt="img">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="section-title-wrap pt-120 mb-50 md-pt-80 ">
                                <span class="section-title-wrap__subtitle">// Why choose us</span>
                                <h2 class="section-title-wrap__title white-color mb-30">How Your Business Going Witn
                                    Us.</h2>
                                <p class="white-color">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text
                                    roots in a piece of classical Latin literature from 45 BC</p>
                            </div>
                            <div class="choose-wrap">
                                <div class="choose-wrap__single d-flex pb-15 mb-35 choose-border">
                                    <div class="choose-wrap__icon-box mr-25">
                                        <i class="fas fa-headphones"></i>
                                    </div>
                                    <div class="choose-wrap__content">
                                        <h3 class="white-color">Helpdesk Support</h3>
                                        <p class="white-color">Lorem ipsum, or lipsum as it is sometimes known, is
                                            dummy
                                            text used in laying out print, graphic or web.</p>
                                    </div>
                                </div>
                                <div class="choose-wrap__single d-flex">
                                    <div class="choose-wrap__icon-box mr-25">
                                        <i class="far fa-lightbulb"></i>
                                    </div>
                                    <div class="choose-wrap__content">
                                        <h3 class="white-color">Online Support</h3>
                                        <p class="white-color">Lorem ipsum, or lipsum as it is sometimes known, is
                                            dummy
                                            text used in laying out print, graphic or web.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Choose Us End **-======-->

            <!--=======-** Brand Start **-======-->
            <div class="brand-area">
                <div class="container padding-lf-ri">
                    <div class="brand-pa-lr">
                        <div class="row ">
                            <div class="brand-active owl-carousel">
                                <div class="single-brand">
                                    <img src="site/assets/img/brand/brand-01.png" alt="img">
                                </div>
                                <div class="single-brand">
                                    <img src="site/assets/img/brand/brand-02.png" alt="img">
                                </div>
                                <div class="single-brand">
                                    <img src="site/assets/img/brand/brand-03.png" alt="img">
                                </div>
                                <div class="single-brand">
                                    <img src="site/assets/img/brand/brand-04.png" alt="img">
                                </div>
                                <div class="single-brand">
                                    <img src="site/assets/img/brand/brand-01.png" alt="img">
                                </div>
                                <div class="single-brand brand-border-none">
                                    <img src="site/assets/img/brand/brand-02.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=======-** Brand End **-======-->

            <!--=======-** Case study Start **-======-->
            <section class="case-study-area pt-70 pb-70 md-pt-40 md-pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title-wrap text-center mb-45" data-aos="fade-right">
                                <span class="section-title-wrap__subtitle">// Case Study</span>
                                <h2 class="section-title-wrap__title">Our Case Study</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <div class="case-study mb-30">
                                <div class="case-study__thumb">
                                    <img src="site/assets/img/case-study/case-stydy-big-01.jpg" alt="img">
                                </div>
                                <div class="case-study__text">
                                    <h3 class="case-study__text-title">
                                        <a href="case-study-details.html">Data Research Analysis</a>
                                    </h3>
                                    <span>Cloud Computing</span>
                                    <a class="image-popup" href="site/assets/img/case-study/case-stydy-big-01.jpg">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <div class="case-study mb-30">
                                <div class="case-study__thumb">
                                    <img src="site/assets/img/case-study/case-stydy-big-02.jpg" alt="img">
                                </div>
                                <div class="case-study__text">
                                    <h3 class="case-study__text-title">
                                        <a href="case-study-details.html">Data Research Analysis</a>
                                    </h3>
                                    <span>Cloud Computing</span>
                                    <a class="image-popup" href="site/assets/img/case-study/case-stydy-big-02.jpg">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-study mb-30">
                                <div class="case-study__thumb">
                                    <img src="site/assets/img/case-study/case-stydy-03.jpg" alt="img">
                                </div>
                                <div class="case-study__text">
                                    <h3 class="case-study__text-title">
                                        <a href="case-study-details.html">Data Research Analysis</a>
                                    </h3>
                                    <span>Cloud Computing</span>
                                    <a class="image-popup" href="site/assets/img/case-study/case-stydy-03.jpg">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-study mb-30">
                                <div class="case-study__thumb">
                                    <img src="site/assets/img/case-study/case-stydy-03.jpg" alt="img">
                                </div>
                                <div class="case-study__text">
                                    <h3 class="case-study__text-title">
                                        <a href="case-study-detail.html">Data Research Analysis</a>
                                    </h3>
                                    <span>Cloud Computing</span>
                                    <a class="image-popup" href="site/assets/img/case-study/case-stydy-03.jpg">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="case-study mb-30">
                                <div class="case-study__thumb">
                                    <img src="site/assets/img/case-study/case-stydy-02.jpg" alt="img">
                                </div>
                                <div class="case-study__text">
                                    <h3 class="case-study__text-title">
                                        <a href="case-study-details.html">Data Research Analysis</a>
                                    </h3>
                                    <span>Cloud Computing</span>
                                    <a class="image-popup" href="site/assets/img/case-study/case-stydy-02.jpg">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="case-study mb-30">
                                    <div class="case-study__thumb">
                                        <img src="site/assets/img/case-study/case-stydy-01.jpg" alt="img">
                                    </div>
                                    <div class="case-study__text">
                                        <h3 class="case-study__text-title"><a href="#">Data Research Analysis</a></h3>
                                        <span>Cloud Computing</span>
                                        <a class="image-popup" href="site/assets/img/case-study/case-stydy-01.jpg">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->

                    </div>
                </div>
            </section>
            <!--=======-** Case study End **-======-->

            <!--=======-** Contact Us Start **-======-->
            <section class="contact-area pb-90 md-pt-60" data-aos="fade-up">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.00977781974!2d90.34928576871451!3d23.780777744581084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1639400108134!5m2!1sen!2sbd"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-1"></div>
                        <div class="col-xl-7 col-lg-6 col-md-9">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="section-title-wrap mb-40 pt-90 md-pt-10">
                                        <span class="section-title-wrap__subtitle">// Contact us</span>
                                        <h2 class="section-title-wrap__title">Contact With Us</h2>
                                    </div>
                                </div>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-box mb-50">
                                            <i class="flaticon-user-1"></i>
                                            <input class="contact-box__contact-home" type="text"
                                                placeholder="Your Full Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-box mb-50">
                                            <i class="flaticon-email"></i>
                                            <input class="contact-box__contact-home" type="email"
                                                placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-box mb-50">
                                            <select class="contact-box__contact-home select">
                                                <option value="">Subject</option>
                                                <option value="">Subject 1</option>
                                                <option value="">Subject 2</option>
                                                <option value="">Subject 3</option>
                                                <option value="">Subject 4</option>
                                                <option value="">Subject 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-box mb-50">
                                            <i class="flaticon-chat-1"></i>
                                            <textarea class="contact-box__contact-home text-area" name="text" cols="30" rows="10"
                                                placeholder="Write Your Messege"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <button class="finxer-btn finxer-btn-black contact-btn">Conform us <i
                                                class="fas fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Contact Us End **-======-->

            <!--=======-** questions Start **-=======-->
            <section class="questions-area pt-100 pb-150 md-pt-70 md-pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="questions-img-area mb-30" data-aos="fade-up">
                                <div class="questions-img-area__images">
                                    <img class="big-img" src="site/assets/img/questions/questions-big.png"
                                        alt="img">
                                    <img class="small-img" src="site/assets/img/questions/questions-small.png"
                                        alt="img">
                                    <img class="questions-Shapes animate-y-axis"
                                        src="site/assets/img/questions/questions-Shapes.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="ask-question-wrap" data-aos="fade-up">
                                <div class="section-title-wrap mb-40">
                                    <span class="section-title-wrap__subtitle">// ASk Questions</span>
                                    <h2 class="section-title-wrap__title">How Your Business Going Witn Us.</h2>
                                </div>
                                <div class="collapse-wrappper">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h2 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        What is investment banking?
                                                    </a>
                                                </h2>
                                            </div>

                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinven
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    Nemo
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h2 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Hat is the typical job title hierarchy or ladder?
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinven
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    Nemo
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h2 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Walk me through the three financial statements?
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapseThree" class="collapse"
                                                aria-labelledby="headingThree" data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinven
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    Nemo
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h2 class="mb-0">
                                                    <a href="#" class="btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                        How do you calculate the WACC?
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinven
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                                    Nemo

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** questions End **-=======-->

            <!--=======-** Team End **-=======-->
            <section class="team-area position-relative pt-100 pb-70 md-pt-70 md-pb-40">
                <img class="team-shape-red-lb d-none d-lg-block animate-y-axis"
                    src="site/assets/img/team/team-shape-red-lb.png" alt="img">
                <img class="team-shape-red-rt d-none d-lg-block animate-y-axis"
                    src="site/assets/img/team/team-shape-red-rt.png" alt="img">
                <img class="team-shape-rt-soft d-none d-lg-block animate-y-axis"
                    src="site/assets/img/team/team-shape-rt-soft.png" alt="img">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title-wrap text-center mb-40" data-aos="fade-right">
                                <span class="section-title-wrap__subtitle">// Our Expert Team</span>
                                <h2 class="section-title-wrap__title">Our Expert Member</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row position-relative" data-aos="fade-up">
                        <img class="team-shape-left d-none d-md-block animate-x-axis"
                            src="site/assets/img/team/team-shape-left.png" alt="img">
                        <img class="team-shape-right d-none d-md-block animate-x-axis"
                            src="site/assets/img/team/team-shape-right.png" alt="img">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team mb-30">
                                <div class="team__thumb mb-15">
                                    <a href="team-detils.html">
                                        <img src="site/assets/img/team/team-01.jpg" alt="img">
                                    </a>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <span>ACCOUNT MANAGER</span>
                                    <h3><a href="team-detils.html">Miguel Anders</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team mb-30">
                                <div class="team__thumb mb-15">
                                    <a href="team-detils.html">
                                        <img src="site/assets/img/team/team-02.jpg" alt="img">
                                    </a>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <span>Escutive MANAGER</span>
                                    <h3><a href="team-detils.html">Thomas Joe</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team mb-30">
                                <div class="team__thumb mb-15">
                                    <a href="team-detils.html">
                                        <img src="site/assets/img/team/team-03.jpg" alt="img">
                                    </a>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <span>support Manager</span>
                                    <h3><a href="team-detils.html">Harry Jack </a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="team mb-30">
                                <div class="team__thumb mb-15">
                                    <a href="team-detils.html">
                                        <img src="site/assets/img/team/team-04.jpg" alt="img">
                                    </a>
                                    <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team__content">
                                    <span>project MANAGER</span>
                                    <h3><a href="team-detils.html">Philip Larson</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Team End **-=======-->

            <!--=======-** Testimonials End **-=======-->
            <section class="testimonials-area testimonials-bg pt-100 pb-110 md-pt-70 md-pb-70" data-aos="fade-up">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title-wrap text-center mb-40">
                                <span class="section-title-wrap__subtitle">// Clients Feedback</span>
                                <h2 class="section-title-wrap__title">What People Say</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-10">
                            <div class="testimonials-active owl-carousel">
                                <div class="testimonials">
                                    <div class="testimonials__content text-center">
                                        <img src="site/assets/img/testimonials/testimonials-client.png" alt="img">
                                        <p> <span class="mr-15"><i class="fas fa-quote-left"></i></span>
                                            Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam
                                            voluptatem quia voluptas sit aspernatur <span class="ml-15"> <i
                                                    class="fas fa-quote-right"></i></span></p>
                                        <div class="author">
                                            <h4>Mehedii Mohammad</h4>
                                            <span>Ceo & Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials__content text-center">
                                        <img src="site/assets/img/testimonials/testimonials-client.png" alt="img">
                                        <p> <span class="mr-15"><i class="fas fa-quote-left"></i></span>
                                            Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam
                                            voluptatem quia voluptas sit aspernatur <span class="ml-15"> <i
                                                    class="fas fa-quote-right"></i></span></p>
                                        <div class="author">
                                            <h4>Mehedii Mohammad</h4>
                                            <span>Ceo & Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials__content text-center">
                                        <img src="site/assets/img/testimonials/testimonials-client.png" alt="img">
                                        <p> <span class="mr-15"><i class="fas fa-quote-left"></i></span>
                                            Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam
                                            voluptatem quia voluptas sit aspernatur <span class="ml-15"> <i
                                                    class="fas fa-quote-right"></i></span></p>
                                        <div class="author">
                                            <h4>Mehedii Mohammad</h4>
                                            <span>Ceo & Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonials">
                                    <div class="testimonials__content text-center">
                                        <img src="site/assets/img/testimonials/testimonials-client.png" alt="img">
                                        <p> <span class="mr-15"><i class="fas fa-quote-left"></i></span>
                                            Sedut perspiciatis unde omniiste natus errorsit voluptatem accusant
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ilinventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam
                                            voluptatem quia voluptas sit aspernatur <span class="ml-15"> <i
                                                    class="fas fa-quote-right"></i></span></p>
                                        <div class="author">
                                            <h4>Mehedii Mohammad</h4>
                                            <span>Ceo & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Testimonials End **-=======-->

            <!--=======-** Newsletter Start **-=======-->
            <section class="newsletter-area pt-40">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-5" data-aos="fade-right">
                            <div class="newsletter-img">
                                <img src="site/assets/img/newsletter/newsletter-img.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="newsletter-text mb-30 mt-30" data-aos="fade-left">
                                <h2>We Delivered Project
                                    agency & Financial To
                                    Grow Your Business</h2>
                                <div class="newsletter-text__phone">
                                    <i class="flaticon-phone-call"></i>
                                    <span>
                                        <a href="tel:+91705-2101-786">+91 705-2101-786</a>
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Newsletter End **-=======-->

            <!--=======-** Blog Start **-=======-->
            <section class="blog-area pt-100 pb-70 md-pt-70 md-pb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-title-wrap text-center mb-40" data-aos="fade-right">
                                <span class="section-title-wrap__subtitle">// Leatest Blogs</span>
                                <h2 class="section-title-wrap__title">News & Blogs</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-aos="fade-up">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <article>
                                <div class="blog-box mb-30">
                                    <div class="blog-box__img mb-20">
                                        <a href="blog-single.html"><img src="site/assets/img/blog/blog-01.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="blog-box__content">
                                        <div class="blog-category">
                                            <ul>
                                                <li><a href="#">business</a></li>
                                                <li><a href="#">business</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta">
                                            <span><a href="#"><i class="fas fa-user"></i> Callum</a></span>
                                            <span><a href="#"><i class="fas fa-calendar-alt"></i> 02 Apr
                                                    2021</a></span>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="blog-single.html">Pure is the most healthy
                                                most nourishing </a>
                                        </h4>
                                        <div class="read-more">
                                            <a href="blog-single.html">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <article>
                                <div class="blog-box mb-30">
                                    <div class="blog-box__img mb-20">
                                        <a href="blog-single.html"><img src="site/assets/img/blog/blog-02.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="blog-box__content">
                                        <div class="blog-category">
                                            <ul>
                                                <li><a href="#">business</a></li>
                                                <li><a href="#">business</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta">
                                            <span><a href="#"><i class="fas fa-user"></i> Reece</a></span>
                                            <span><a href="#"><i class="fas fa-calendar-alt"></i> 05 Mar
                                                    2021</a></span>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="blog-single.html">Ipsum is dolor a sit amet coetur adipisi velit.
                                            </a>
                                        </h4>
                                        <div class="read-more">
                                            <a href="blog-single.html">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <article>
                                <div class="blog-box mb-30">
                                    <div class="blog-box__img mb-20">
                                        <a href="blog-single.html"><img src="site/assets/img/blog/blog-03.jpg"
                                                alt="img"></a>
                                    </div>
                                    <div class="blog-box__content">
                                        <div class="blog-category">
                                            <ul>
                                                <li><a href="#">business</a></li>
                                                <li><a href="#">business</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog-meta">
                                            <span><a href="#"><i class="fas fa-user"></i> James</a></span>
                                            <span><a href="#"><i class="fas fa-calendar-alt"></i> 22 May
                                                    2021</a></span>
                                        </div>
                                        <h4 class="blog-title">
                                            <a href="blog-single.html">Healthy is the most for and in our life </a>
                                        </h4>
                                        <div class="read-more">
                                            <a href="blog-single.html">Read More <i
                                                    class="fas fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!--=======-** Blog End **-=======-->
        </main>

        <!--=======-** Footer Start **-======-->
        <footer>
            <div class="footer-area footer-bg">
                <div class="container">
                    <div class="footer-border mb-100 pb-40 md-mb-70 md-pb-40">
                        <div class="row ast-align-items-center pt-70 md-pt-50 ">
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <div class="footer-top-text">
                                    <h2 class="footer-top-text__title">Start <span>Journey</span> To Better Business
                                    </h2>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="footer-top-btn">
                                    <a href="contact.html" class="finxer-btn btn-bg-red ">Get Started <i
                                            class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-30">
                                <h4 class="footer-widget__title">About Us.</h4>
                                <p>orporate clients and leisure travelers has
                                    been relying on Groundlink for dependable
                                    safe, and professional chauffeured car
                                    service in major cities across World.</p>
                                <div class="footer-widget__blog-wrap">
                                    <a href="#"><img src="site/assets/img/footer/footer-blog.jpg" alt="img"></a>
                                    <div class="blog-content">
                                        <a href="blog-single.html">Best Smell of Americano
                                            Coffee Trins</a>
                                        <span>DECEMBER 30 - 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="footer-widget mb-30">
                                <h4 class="footer-widget__title">Useful Links</h4>
                                <div class="footer-widget__userful-link">
                                    <ul>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">News</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="#">Room Details</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="contact.html">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6">
                            <div class="footer-widget mb-30">
                                <h4 class="footer-widget__title">Help?</h4>
                                <div class="footer-widget__userful-link">
                                    <ul>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="#">Term & conditions</a></li>
                                        <li><a href="#">Reporting</a></li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Support Policy</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget fotter-ml mb-30">
                                <h4 class="footer-widget__title">Newsletter</h4>
                                <p>Sedut perspiciatis unde omniiste natus
                                    errorsit voluptatem accusant <br>
                                    doloremque laudantium, totam rem aperiam,
                                    veritatis et qua</p>
                                <div class="footer-subcribe mb-20">
                                    <form action="https://finxer.netlify.app/form.php">
                                        <input type="email" placeholder="Enter Your Email">
                                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                                    </form>
                                </div>
                                <div class="footer-widget__social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-border-top">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-3 col-md-4">
                                    <div class="footer-bottom__logo pb-10">
                                        <a href="index-2.html">
                                            <img src="site/assets/img/footer/footer-Logo.png" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-5 col-md-8">
                                    <div class="footer-bottom__copyright-text pb-10">
                                        <p>COPY RIGHT@ EXAMPLE 2021.DESIGN BY <span><a href="#">themestok</a></span></p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="footer-bottom__menu pb-10">
                                        <ul>
                                            <li><a href="#">Terms of Use</a></li>
                                            <li>|</li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=======-** Footer End **-======-->

    </div>
    <!--==== wrapper site End ====-->

    <!--=======-** Side Bar Menu Start **-=======-->
    <div class="sidebar-menu-area d-flex justify-content-start align-items-end flex-column d-none d-lg-block">
        <!--==== close button ====-->
        <button class="btn-close" type="button"><i class="fas fa-times"></i></button>

        <!--==== logo ====-->
        <div class="sidebar-logo">
            <a href="index-2.html">
                <img src="site/assets/img/logo/Logo.png" alt="imgimg">
            </a>
        </div>
        <div class="sidebar-desc">
            <p>Lorem ipsum dolor, sit amet concte adiisi elit. Neque veniam nemo ipsam rerum harum sapiente, Lorem ipsum
                dolor sit amet consectetur. delectus inventore repellat of the .</p>
        </div>
        <div class="sidebar-thumb mb-40">
            <img src="site/assets/img/sidebar/sidebar01.jpg" alt="img">
        </div>
        <!--==== Side Bar Footer ====-->
        <div class="sidebar-address mb-10">
            <h3>contacts</h3>
            <ul>
                <li>
                    <div class="footer-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="footer-address-info">
                        <p> F295+VX Dundee, United Kingdom</p>
                    </div>
                </li>
                <li>
                    <div class="footer-icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <div class="footer-address-info">
                        <p>
                            <a href="tel:+1(347)927-3964">+1 (347) 927-3964</a>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="footer-icon">
                        <i class="flaticon-email"></i>
                    </div>
                    <div class="footer-address-info">
                        <p> <a href="mailto:themestok@gmail.com">themestok@gmail.com</a></p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- social icons -->
        <div class="sidebar-footer">
            <div class="sidebar-footer__footer-social">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--=======-** Side Bar Menu End **-=======-->

    <!-- ||=======-**JS Start **-=======|| -->
    <script src="site/assets/js/modernizr-3.5.0.min.js"></script>
    <script src="site/assets/js/jquery-3.6.0.min.js"></script>
    <script src="site/assets/js/waypoints.min.js"></script>
    <script src="site/assets/js/bootstrap.min.js"></script>
    <script src="site/assets/js/jquery.nice-select.min.js"></script>
    <script src="site/assets/js/progresscircle.js"></script>
    <script src="site/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="site/assets/js/owl.carousel.min.js"></script>
    <script src="site/assets/js/jquery.meanmenu.min.js"></script>
    <script src="site/assets/js/skill.bars.jquery.js"></script>
    <script src="site/assets/js/aos.js"></script>
    <script src="site/assets/js/jquery.scrollUp.min.js"></script>
    <script src="site/assets/js/main.js"></script>
    <!-- ||=======-**JS End **-=======|| -->

</body>

<!-- Mirrored from finxer.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 22:24:06 GMT -->

</html>
