<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laboratorio clínico.">
    <meta name="keywords"
          content="Glaucoma, Oftalmólogo, Ojos, Vista, Retina, Cornea, Oftalmología, Catarata, Estrabismo, Uveitis, Pterigión, Trasplante">
    <meta name="author" content="Roberto Carreón">

    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate.min.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <!-- lightbox.min.css -->
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css')}}">
    <!-- magnific-popup.min.css -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css')}}">
    <!-- owl.carousel.min.css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <!-- slicknav.min.css -->
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css')}}">
    <!-- style.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- responsive.css -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">


    <title>LaboratorioRC</title>

    <!-- Fonts -->

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">


</head>
<body>
<!-- header top section -->
<div class="header_top_section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="mail_section">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                laboratorio_bioclinic@outlook.com
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="phone_section">
                            <a href="#">
                                <i class="fa fa-phone"></i>
                                +52 (465) 102-55-07
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact_section">
                            <div class="appointment_btn">
                                <a href="#" data-scroll-nav="8">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-right">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>

        </div>
    </div>
</div>

<!-- welcome_hero_area -->
<div class="welcome_hero_area">
    <div class="header_area" id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('image/Image1.jpeg') }}" alt="Logo" width="280px"
                                                  height="auto"></a>
                    </div>
                    <div class="responsive_mobile_menu"></div>
                </div>
                <div class="col-lg-10 col-md-12 text-right d-none d-md-block">
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                <li><a href="#" data-scroll-nav="0" class="active">Inicio</a></li>
                                <li><a href="#" data-scroll-nav="1">Laboratorio</a></li>
                                <li><a href="#" data-scroll-nav="2">Servicios</a></li>
                                <li><a href="#" data-scroll-nav="3">Enfermedades</a></li>
                                <li><a href="#" data-scroll-nav="4">Galeria</a></li>
                                <li><a href="#" data-scroll-nav="5">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome_hero_slider_area owl-carousel" data-scroll-index="0">
        <div class="single_welcome_slide slide_bg1 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h2>We Provide Best Medical Service</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_welcome_slide slide_bg2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h2>We Provide Best Medical Service</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_welcome_slide slide_bg3 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10">
                        <h2>We Provide Best Medical Service</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="key_informations_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="key_information_single_content">
                        <i class="fa fa-heartbeat"></i>
                        <h3>¿Tienes una emergencia?</h3>
                        <h4>(465) 102-55-07</h4>
                        <a href="tel:+3319631" class="key_btn">llamar ahora</a>
                    </div>
                    <div class="key_information_single_content">
                        <i class="fa fa-file-text"></i>
                        <h3>Haz una cita</h3>
                        <a href="#" class="key_btn">hacer una cita</a>
                    </div>
                    <div class="key_information_single_content">
                        <i class="fa fa-clock-o"></i>
                        <h3>Horario</h3>
                        <p>Lun - Vie: 9:00 a 14:00 y 15:00 a 19:00</p>
                        <p>Sab: 9:00 a 13:00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- about us area -->
<section class="section_padding about_us_area" data-scroll-index="1">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section_title">
                    <h2>Sobre la clinica</h2>
                    <div class="divider_effect_section"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_content">
                    <h3>Conoce un poco de nosotros.</h3>
                    <p>
                        Clínica la Guardia es una clínica dedicada a la atencion de personas con problemas
                        oftalmologicos, integrado por medicos y personal certificado y altamente capacitado, a un
                        precio accesible y con la tecnología mas avanzada.
                    </p>
                    <p>
                        En Clínica la Gudardia ofrecemos tratamientos medico-qururgicos ambulatorios, así como
                        información preventiva y de diagnostico de las enfermedades oftalmologicas a todas las
                        personas con problemas visuales y en riesgo.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_bg"></div>
            </div>
        </div>
    </div>
</section>

<!-- departments area -->
<section class="section_padding departments_area spt0" data-scroll-index="2">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section_title">
                    <h2>Nuestros servicios</h2>
                    <p>En Clínica La Guardia pones a tu disposición los siguientes servicios</p>
                    <div class="divider_effect_section"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_department_section">
                    <div class="department_bg bg1"></div>
                    <h3>Consulta General</h3>
                    <p>Diganostico, prevencion y tratamiento de enfermedades oculares.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_department_section">
                    <div class="department_bg bg2"></div>
                    <h3>Campimetría</h3>
                    <p>Examen medico que se utiliza para valorar el campo visual de un ojo.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_department_section">
                    <div class="department_bg bg3"></div>
                    <h3>Ultrasonido Ocular</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_department_section">
                    <div class="department_bg bg4"></div>
                    <h3>Calculo de Lente Intraocular</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_department_section">
                    <div class="department_bg bg5"></div>
                    <h3>Biometria Ocular</h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- why chooses area -->
<section class="section_padding why_chooses_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 our_single_facility_wrapper">
                <div class="section_title">
                    <h2>Enfermedades que tratamos</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-rocket"></i>
                            </div>
                            <h4>Enfermedad 1</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <h4>Enfermedad 2</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <h4>Enfermedad 3</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <h4>Enfermedad 4</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-hospital-o"></i>
                            </div>
                            <h4>Enfermedad 5</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our_single_facility">
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <h4>Enfermedad 6</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our some facts area -->
<section class="section_padding some_facts_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="single_fact">
                    <div class="icon">
                        <i class="fa fa-smile-o"></i>
                    </div>
                    <span class="fact_number">2575</span>
                    <h4>happy patients</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single_fact">
                    <div class="icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <span class="fact_number">7250</span>
                    <h4>service done</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single_fact">
                    <div class="icon">
                        <i class="fa fa-user-circle-o"></i>
                    </div>
                    <span class="fact_number">120</span>
                    <h4>our doctors</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single_fact">
                    <div class="icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <span class="fact_number">22</span>
                    <h4>our departments</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our gallery area -->
<section class="section_padding our_gallery_area" data-scroll-index="3">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section_title">
                    <h2>Works of Medi<span>Camp</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy. </p>
                    <div class="divider_effect_section"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row portfolio_items no-gutters">
            <div class="col-md-3 cat1 cat2">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_1.png" alt="img1">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_1.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat1 cat2">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_2.png" alt="img2">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_2.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat1 cat3">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_3.png" alt="img3">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_3.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat1 cat4">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_4.png" alt="img4">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_4.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat2">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_5.png" alt="img5">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_5.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat3">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_6.png" alt="img6">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_6.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat4">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_7.png" alt="img7">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_7.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 cat1 cat2 cat4">
                <div class="single_portfolio_item">
                    <img src="assets/img/gallery_8.png" alt="img8">
                    <div class="portfolio_overlay">
                        <a href="assets/img/gallery_8.png" class="image_popup" data-lightbox="image-1">
                            <i class="fa fa-link"></i>
                        </a>
                        <h3><a href="#">work title</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- appoinment and hospital video area   -->
<section class="section_padding appoinment_and_hospital_video_area spt0">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="appoinment_form_section">
                    <h3>Hacer una Cita</h3>
                    <form action="index.html">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="text" placeholder="Nombre">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="email" placeholder="Correo">
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <p class="main_input">
                                    <input type="tel" placeholder="Teléfono">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="time">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="date">
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text_msg">
                                    <textarea placeholder="Tu mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class="submit_btn" type="submit">programar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hospital_video_section bg1">
                    <a href="https://www.youtube.com/watch?v=hpeYWdkUtcE" id="video_popup"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonial area  -->
<section class="section_padding testimonial_area spt0" data-scroll-index="5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section_title">
                    <h2>Testimonios</h2>
                    <p>Estos son algunas referencias de lo que piensan nuestros clientes de nosotros.</p>
                    <div class="divider_effect_section"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial_slider_carousel owl-carousel">
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg1"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg2"></div>
                        </div>
                        <h4>Lora Geota</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg3"></div>
                        </div>
                        <h4>Alan Waltton</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg1"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg2"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg3"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg1"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg2"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                    <div class="single_testimonial_section">
                        <div class="testimonial_content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard. </p>
                            <div class="testimonial_bg bg3"></div>
                        </div>
                        <h4>Eliza Vatra</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact us area -->
<section class="section_padding contact_us_area spt0" data-scroll-index="8">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="section_title">
                    <h2>Contactanos</h2>
                    <p>
                        En Clinica La Guardia nos importa mucho tus comentarios, por eso nos ponemos a tu disposicion
                        en nuestras oficinas o por medio de nuestras redes sociales.
                    </p>
                    <div class="divider_effect_section"></div>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="contact_info_section">
                    <div class="single_contact_details">
                        <h3>Dirección</h3>
                        <p>Calle México 402A, Rincón de Romos Centro, 20400 Rincón de Romos, México</p>
                    </div>
                    <div class="single_contact_details">
                        <h3>Whatsapp</h3>
                        <p>(465) 102 5507</p>
                    </div>
                    <div class="single_contact_details">
                        <h3>Correo</h3>
                        <p>laboratorio_bioclinic@outlook.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 no-gutters">
                <div class="map_area">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.2159840617583!2d-102.32088518573275!3d22.231882550994527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86820939e2435419%3A0x662483a746b62d8a!2sAv.%20Mexico%20402A%2C%20Jos%C3%A9%20Lu%C3%ADs%20Macias%2C%2020400%20Rinc%C3%B3n%20de%20Romos%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1605380340681!5m2!1ses-419!2smx"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <div class="positoning_title">
                        <h3>Bioclinic</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  contact form area  -->
<section class="section_paddding contact_form_area">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="contact_form_title">
                    <h3>Envianos un mensaje</h3>
                    <p>En Clinica La Guardia nos importa mucho tus comentarios, por eso estamos atentos a ti por
                        diferentes medios. </p>
                    <form action="index.html">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="text" placeholder="Nombre">
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="main_input">
                                    <input type="text" placeholder="Correo">
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text_msg">
                                    <textarea placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="contact_form_btn" type="submit">enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll_up_btn">
        <a href="#" data-scroll-goto="0"><i class="fa fa-angle-up"></i></a>
    </div>
</section>

<!-- call to action area -->
<section class="call_to_action_area">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <div class="call_number_content">
                    <i class="fa fa-phone"></i>
                    <p>Numero de contacto</p>
                    <span class="phone_number">(465) 102-55-07</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer top area  -->
<div class="footer_top_area">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <a href="index.html" class="footer_logo">
                    <img src="{{asset('image/Image1.jpeg')}}" width="214px" alt="Logotipo">
                </a>
                <div class="footer_social_icons">
                    <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="" target="_blank"><i class="fa fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer area   -->
<footer class="footer_area">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <p class="footer_text">
                    <a href="">Desarrollado por</a>
                    <span>2019</span>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- jquery-2.2.4.min.js -->
<script src="{{ asset('js/jquery-2.2.4.min.js')}}"></script>
<!-- popper-1.14.3.min.js -->
<script src="{{ asset('js/popper-1.14.3.min.js')}}"></script>
<!-- bootstrap.min.js -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- owl.carousel.min.js -->
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<!-- jquery.slicknav.min.js -->
<script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
<!-- wow.min.js -->
<script src="{{ asset('js/wow.min.js')}}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
<!-- lightbox.min.js -->
<script src="{{ asset('js/lightbox.min.js')}}"></script>
<!-- magnific-popup.min.js -->
<script src="{{ asset('js/magnific-popup.min.js')}}"></script>
<!-- waypoints.min.js -->
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<!-- counterup.min.js -->
<script src="{{ asset('js/counterup.min.js')}}"></script>
<!-- isotope.pkgd.min.js -->
<script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
<!-- scrollIt.min.js -->
<script src="{{ asset('js/scrollIt.min.js')}}"></script>
<!-- map.js -->
<script src="{{ asset('js/map.js')}}"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDCLtH4LZy-UxCn30dRZIAxXVzEz0iuKw&callback=initMap"></script>
<!-- main.js -->
<script src="{{ asset('js/main.js')}}"></script>
</div>
</body>
</html>
