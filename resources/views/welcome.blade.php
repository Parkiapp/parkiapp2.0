<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ParkiAPP</title>
        <link rel="shortcut icon" href="images/logo_peq.png">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="images/logo.png" alt="logo image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Busca Parqueaderos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Ofrece Parqueaderos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Conócenos</a></li>
                    </li>
                </ul>
                <button type="button" class="rounded-pill btn-rounded" onclick="window.location.href='{{ route('register') }}'">
                    Regístrate
                    <span>
                        <i class="fas fa-user"></i>
                    </span>
                </button>
            </div>
        </div>
    </nav>

    
        <section id="home" class="intro-section">
            <div class="container">
                <div class="row align-items-center text-white">
                <div class="col-md-6 intros text-start">
                    <h1 class="display-2">
                    <span class="display-2--intro">Parkiapp</span>
                    <span class="display-2--intro"><h1>Un Momento Inolvidable</h1></span>
                    <span class="display-2--description lh-base">
                        <h2>¿Parqueadero en Bogotá? <br>Nosotros lo buscamos por ti</h2>
                        Descarga la app y disfruta tu nuevo tiempo libre
                    </span>
                    </h1>
                    <button type="button" class="rounded-pill btn-rounded"  onclick="window.location.href='{{ route('dashboard') }}'"><h3>Buscar parqueadero</h3>
                    <span><i class="fas fa-arrow-right"></i></span>
                    </button>
                </div>
                <div class="col-md-6 intros text-end">
                    <div class="video-box">
                    <img src="images/arts/intro-section-illustration.png" alt="video illutration" class="img-fluid">
                    <a href="#" class="glightbox position-absolute top-50 start-50 translate-middle">
                        <span>
                        <i class="fas fa-play-circle"></i>
                        </span>
                        <span class="border-animation border-animation--border-1"></span>
                        <span class="border-animation border-animation--border-2"></span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>


        <section id="services2" class="services">
            <div class="container">
                <div class="row text-center">
                <h1 class="display-3 fw-bold">Servicios</h1>
                <div class="heading-line mb-1"></div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                    <div class="services__content">
                    <div class="icon d-block fas fa-paper-plane"></div>
                    <h3 class="display-3--title mt-1">¿Cuánto vale cada instante?</h3>
                    <p class="lh-lg">
                        En Parkiapp, valoramos tu tiempo. Por eso hemos
                        transformado la experiencia de estacionar en algo rápido,
                        fácil y seguro.
                        Con nuestra tecnología avanzada, un espacio siempre te
                        espera sin dar vueltas sin fin.
                        Imagina llegar sin estrés, con un lugar reservado a un
                        precio justo. Hacemos que estacionar sea solo el
                        comienzo de una gran experiencia, contribuyendo
                        además a una ciudad más ordenada y sostenible.
                        Descubre la libertad de moverte sin preocupaciones.
                    </p>
                    <button type="button" class="rounded-pill btn-rounded border-primary" onclick="window.location.href='{{ route('register') }}'">Crea tu cuenta como parkiador
                        <span><i class="fas fa-arrow-right"></i></span>
                    </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                    <div class="services__pic">
                    <img src="images/services/service-1.png" alt="marketing illustration" class="img-fluid">
                    </div>
                </div>
                </div>
            </div>
        </section>


        <section id="campanies2" class="testimonials">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="container">
                <div class="row text-center text-white">
                <h1 class="display-3 fw-bold"><h1>Reservar un parqueadero o administrarlo es muy sencillo con Parkiapp</h1></h1>
                <hr style="width: 100px; height: 3px; " class="mx-auto">
                <p class="lead pt-1">Nuestra aplicación para parqueaderos te permite obtener los siguientes beneficios</p>
                </div>
                
                <div class="row text-white">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-0">
                        <div class="services__pic">
                            <img src="images/arts/1.png" alt="marketing illustration" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-0 text-end">
                        <div class="services__pic">
                        <img src="images/arts/2.png" alt="marketing illustration" class="img-fluid">
                        </div>
                    </div>
                    </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

        </section>


        <section id="campanies3" class="campanies">
            <div class="container">
            <div class="row text-center">
                <h1 class="fw-bold lead mb-3"><h1>Precios</h1></h1>
                <div class="heading-line mb-5"></div>
            </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <img src="images/campanies/campany-1a.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/campanies/campany-2a.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/campanies/campany-3a.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="images/campanies/campany-4a.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
                </div>
            </div>
            </div>
            <br>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
                        <button type="button" class="rounded-pill btn-rounded" onclick="window.location.href='{{ route('dashboard') }}'"><h3>Buscar parqueadero</h3>
                        <span><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                </div>
            </div>
        </section>
    

        <section id="campanies" class="campanies">
            <div class="container">
            <div class="row text-center">
                <h1 class="fw-bold lead mb-3"><h1>¡Conoce nuestras empresas aliadas y los beneficios que tú
                    también puedes obtener!</h1></h1>
                <div class="heading-line mb-5"></div>
            </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
                </div>
                </div>
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
                </div>
                </div>
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
                </div>
                </div>
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
                </div>
                </div>
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
                </div>
                </div>
                <div class="col-md-4 col-lg-2">
                <div class="campanies__logo-box shadow-sm">
                    <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
                </div>
                </div>
            </div>
            </div>
        </section>
    

        {{-- <section id="services" class="services">
        <div class="container">
            <div class="row text-center">
            <h1 class="display-3 fw-bold">Our Services</h1>
            <div class="heading-line mb-1"></div>
            </div>
        <!-- START THE DESCRIPTION CONTENT  -->
            <div class="row pt-2 pb-2 mt-0 mb-3">
            <div class="col-md-6 border-right">
                <div class="bg-white p-3">
                <h2 class="fw-bold text-capitalize text-center">
                    Our Services Range From Initial Design To Deployment Anywhere Anytime
                </h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 text-start">
                <p class="fw-light">
                    Lorem ipsum dolor sit amet consectetur architecto magni, 
                    dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias. 
                    Tempore ducimus molestiae in dolore enim.
                </p>
                </div>
            </div>
            </div>
        </div>
        
        <!-- START THE CONTENT FOR THE SERVICES  -->
        <div class="container">
            <!-- START THE MARKETING CONTENT  -->
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content">
                <div class="icon d-block fas fa-paper-plane"></div>
                <h3 class="display-3--title mt-1">Marketing</h3>
                <p class="lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
                    doloremque autem quibusdam blanditiis harum alias hic accusantium 
                    maxime atque ratione magni repellat?
                </p>
                <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
                    <span><i class="fas fa-arrow-right"></i></span>
                </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                <div class="services__pic">
                <img src="images/services/service-1.png" alt="marketing illustration" class="img-fluid">
                </div>
            </div>
            </div>
            <!-- START THE WEB DEVELOPMENT CONTENT  -->
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                <div class="services__pic">
                <img src="images/services/service-2.png" alt="web development illustration" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content">
                <div class="icon d-block fas fa-code"></div>
                <h3 class="display-3--title mt-1">web development</h3>
                <p class="lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
                    doloremque autem quibusdam blanditiis harum alias hic accusantium 
                    maxime atque ratione magni repellat?
                </p>
                <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
                    <span><i class="fas fa-arrow-right"></i></span>
                </button>
                </div>
            </div>
            </div>
            <!-- START THE CLOUD HOSTING CONTENT  -->
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content">
                <div class="icon d-block fas fa-cloud-upload-alt"></div>
                <h3 class="display-3--title mt-1">cloud hosting</h3>
                <p class="lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
                    doloremque autem quibusdam blanditiis harum alias hic accusantium 
                    maxime atque ratione magni repellat?
                </p>
                <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
                    <span><i class="fas fa-arrow-right"></i></span>
                </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
                <div class="services__pic">
                <img src="images/services/service-3.png" alt="cloud hosting illustration" class="img-fluid">
                </div>
            </div>
            </div>
        </div>
        </section> --}}
        

        {{-- <section id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <div class="container">
            <div class="row text-center text-white">
            <h1 class="display-3 fw-bold">Testimonials</h1>
            <hr style="width: 100px; height: 3px; " class="mx-auto">
            <p class="lead pt-1">what our clients are saying</p>
            </div>
        
            <!-- START THE CAROUSEL CONTENT  -->
            <div class="row align-items-center">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <!-- CAROUSEL ITEM 1 -->
                <div class="carousel-item active">
                    <!-- testimonials card  -->
                    <div class="testimonials__card">
                    <p class="lh-lg">
                        <i class="fas fa-quote-left"></i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                        <i class="fas fa-quote-right"></i>
                        <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                    </p>
                    </div>
                    <!-- client picture  -->
                    <div class="testimonials__picture">
                    <img src="images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
                    </div>
                    <!-- client name & role  -->
                    <div class="testimonials__name">
                    <h3>Patrick Muriungi</h3>
                    <p class="fw-light">CEO & founder</p>
                    </div>
                </div>     
                <!-- CAROUSEL ITEM 2 -->
                <div class="carousel-item">
                    <!-- testimonials card  -->
                    <div class="testimonials__card">
                    <p class="lh-lg">
                        <i class="fas fa-quote-left"></i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                        <i class="fas fa-quote-right"></i>
                        <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                    </p>
                    </div>
                    <!-- client picture  -->
                    <div class="testimonials__picture">
                    <img src="images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
                    </div>
                    <!-- client name & role  -->
                    <div class="testimonials__name">
                    <h3>Joy Marete</h3>
                    <p class="fw-light">Finance Manager</p>
                    </div>
                </div>     
                <!-- CAROUSEL ITEM 3 -->
                <div class="carousel-item">
                    <!-- testimonials card  -->
                    <div class="testimonials__card">
                    <p class="lh-lg">
                        <i class="fas fa-quote-left"></i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                        <i class="fas fa-quote-right"></i>
                        <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                    </p>
                    </div>
                    <!-- client picture  -->
                    <div class="testimonials__picture">
                    <img src="images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
                    </div>
                    <!-- client name & role  -->
                    <div class="testimonials__name">
                    <h3>ClaireBelle Zawadi</h3>
                    <p class="fw-light">Global brand manager</p>
                    </div>
                </div>     
                <!-- CAROUSEL ITEM 4 -->
                <div class="carousel-item">
                    <!-- testimonials card  -->
                    <div class="testimonials__card">
                    <p class="lh-lg">
                        <i class="fas fa-quote-left"></i>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                        <i class="fas fa-quote-right"></i>
                        <div class="ratings p-1">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        </div>
                    </p>
                    </div>
                    <!-- client picture  -->
                    <div class="testimonials__picture">
                    <img src="images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
                    </div>
                    <!-- client name & role  -->
                    <div class="testimonials__name">
                    <h3>Uhuru Kenyatta</h3>
                    <p class="fw-light">C.E.O & Founder</p>
                    </div>
                </div>     
                </div>
                <div class="text-center">
                <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                </button>
                <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                </button>
                </div>
            </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section> --}}
    

        {{-- <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">faq</h1>
            <div class="heading-line"></div>
            <p class="lead">frequently asked questions, get knowledge befere hand</p>
            </div>
            <div class="row mt-5">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the main features?
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        do i have to pay again after trial
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    How can I get started after trial?
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item shadow mb-3">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Can I be refunded if am not satisfied?
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section> --}}
    

        <section id="contact" class="get-started">
        <div class="container">
            <div class="row text-center">
            <h1 class="display-3 fw-bold text-capitalize">REGÍSTRATE</h1>
            <div class="heading-line"></div>
            <p class="lh-lg">
                REGÍSTRATE COMO PARKIOFERENTE
            </p>
            </div>
        
            <div class="row text-white">
            <div class="col-12 col-lg-6 gradient shadow p-3">
                <div class="cta-info w-100">
                <h4 class="display-4 fw-bold"><h2>Transforma tu parqueadero en ingresos fáciles y rápidos</h2></h4>
                <p class="lh-lg">
                    ¿Tienes un espacio de parqueo sin usar en tu edificio o
                    residencia? Con ParkiApp, puedes empezar a ganar dinero
                    alquilando tu parqueadero de forma segura y sin
                    complicaciones. Convierte esos espacios libres en ingresos
                    recurrentes que beneficien a la comunidad y a los propietarios.
                </p>
                <ul class="cta-info__list">
                    <li>¿Listo para ganar con tus
                        parqueaderos?</li>
                    <li>¡Publica tu espacio y empieza
                        hoy!</li>
                </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 bg-white shadow p-3">
                <div class="form w-100 pb-2">
                <h4 class="display-3--title mb-5">REGÍSTRATE COMO PARKIOFERENTE</h4>
                <form action="#" class="row">
                    <div class="col-lg-12 col-md mb-3">
                    <input type="text" placeholder="Nombre completo" id="inputFirstName2" class="shadow form-control form-control-lg" autocomplete="off">
                    </div>
                    <div class="col-lg-12 mb-3">
                    <input type="email" placeholder="Correo electrónico" id="inputEmail2" class="shadow form-control form-control-lg" autocomplete="off">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <input type="password" placeholder="Contraseña" id="inputPass2" class="shadow form-control form-control-lg" autocomplete="off">
                        </div>
                    <div class="text-center d-grid mt-1">
                    <button type="button" class="btn btn-primary rounded-pill pt-3 pb-3" onclick="window.location.href='{{ route('register') }}'">
                        Registrarte
                        <i class="fas fa-paper-plane"></i>
                    </button>   
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </section>
    

        <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                    <path d="M15 7a2 2 0 0 1 2 2" />
                    <path d="M15 3a6 6 0 0 1 6 6" />
                </svg>
                </div>
                <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">+57 321xxxxxxx</a>
                <p class="contact-box__info--subtitle">  Lunes-Domingo 9am-6pm</p>
                </div>
            </div>  

            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <polyline points="3 9 12 15 21 9 12 3 3 9" />
                    <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
                    <line x1="3" y1="19" x2="9" y2="13" />
                    <line x1="15" y1="13" x2="21" y2="19" />
                </svg>
                </div>
                <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">info@parkiapp.com</a>
                <p class="contact-box__info--subtitle">Soporte en línea</p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
                <div class="contact-box__icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="18" y1="6" x2="18" y2="6.01" />
                    <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                    <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                    <line x1="9" y1="4" x2="9" y2="17" />
                    <line x1="15" y1="15" x2="15" y2="20" />
                </svg>
                </div>
                <div class="contact-box__info">
                <a href="#" class="contact-box__info--title">Bogotá, Colombia</a>
                <p class="contact-box__info--subtitle">Carrera, Bogotá D.C.</p>
                </div>
            </div>
            </div>
        </div>
        
        <div class="footer-sm" style="background-color: #212121;">
            <div class="container">
            <div class="row py-4 text-center text-white">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    Conéctate con nosotros en las redes sociales
                </div>
                <div class="col-lg-7 col-md-6">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            </div>
        </div>
        
        <div class="footer-bottom pt-4 pb-0">
            <div class="container">
            <div class="row text-center text-white">
                <div class="col-12">
                <div class="footer-bottom__copyright">
                    &COPY; Copyright 2024 <a href="#"></a> | Creado por <a href="/" target="_blank">ParkiAPP</a><br><br>
                </div>
                </div>
            </div>
            </div>
        </div>
        </footer>
    
        <a href="#" class="shadow btn-primary rounded-circle back-to-top">
        <i class="fas fa-chevron-up"></i>
        </a>
    
        <script src="assets/vendors/js/glightbox.min.js"></script>
    
        <script type="text/javascript">
          const lightbox = GLightbox({
                    'touchNavigation': true,
                    'href': 'https://www.youtube.com/watch?v=CyGn-tsFvsI',
                    'type': 'video',
                    'source': 'youtube', //vimeo, youtube or local
                    'width': 900,
                    'autoPlayVideos': 'true',
            });
        
        </script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
