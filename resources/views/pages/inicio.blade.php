@extends('layouts.app')

    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    @endpush

@section('content')

<!-- CARRUSEL -->
<div id="heroCarousel" class="carousel slide carousel-fade tech-carousel" data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('img/logos/carrucel3.jpg') }}" class="d-block w-100" alt="Software">
            <div class="carousel-caption">
                <h1>Soluciones Tecnológicas</h1>
                <p>Desarrollo de software a la medida</p>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item">
            <img src="{{ asset('img/logos/carrucel2.jpg') }}" class="d-block w-100" alt="Mantenimiento">
            <div class="carousel-caption">
                <h1>Mantenimiento Profesional</h1>
                <p>Equipos rápidos, seguros y estables</p>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item">
            <img src="{{ asset('img/logos/carrucel1.jpg') }}" class="d-block w-100" alt="Asesorías">
            <div class="carousel-caption">
                <h1>Asesoría Tecnológica</h1>
                <p>Decisiones inteligentes para tu negocio</p>
            </div>
        </div>

    </div>

    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- SERVICIOS -->
<section class="services">
    <h2 class="metodologia-title">
            Desarrollo de Software a Medida en Puerto Asis
        </h2>
    <br>
    <span>Somos una empresa de software en <b>Puerto Asis</b> con 1 años de experiencia,
         que nos hemos consolidado como un referente en el medio y donde
         tenemos un profundo conocimiento del entorno empresarial local,
         donde hemos llevado con nuestro equipo de desarrolladores diversos proyectos exitosos.
    </span>
    <br>

    
</section>
<!-- METODOLOGÍA -->
<section class="metodologia">
    <div class="container">

        <h2 class="metodologia-title">
            Incorporamos las mejores tendencias y metodologías <br>
            para ofrecer soluciones de software a la medida
        </h2>

        <div class="row g-4 mt-4">

            <div class="col-md-4">
                <div class="metodo-card">
                    <div class="metodo-icon">💡</div>
                    <h5>Concepción y Planificación Estratégica</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metodo-card destacado">
                    <div class="metodo-icon">&lt;/&gt;</div>
                    <h5>Desarrollo y pruebas</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metodo-card">
                    <div class="metodo-icon">⚙️</div>
                    <h5>Operación y Soporte</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metodo-card">
                    <div class="metodo-icon">🎨</div>
                    <h5>Diseño y prototipado</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metodo-card">
                    <div class="metodo-icon">☁️</div>
                    <h5>Implementación y lanzamiento</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="metodo-card">
                    <div class="metodo-icon">👍</div>
                    <h5>Mejora Continua</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DESARROLLO SOFTWARE A MEDIDA -->
<section class="software-medida">
    <div class="container">
        <div class="row align-items-center">

            <!-- TEXTO -->
            <div class="col-lg-6 text-white">
                <h2 class="software-title">
                    Nuestros Servicios de Desarrollo <br>
                    de Software a medida
                </h2>

                <ul class="software-list">
                    <li>Desarrollo de aplicaciones web personalizadas</li>
                    <li>Aplicaciones móviles para iOS y Android</li>
                    <li>Mantenimiento y soporte de software</li>
                    <li>Consultoría en tecnología y transformación digital</li>
                </ul>

                <a href="/contacto" class="btn btn-success btn-lg mt-3">
                    💬 Hablemos
                </a>
            </div>

            <!-- IMAGEN -->
            <div class="col-lg-6 text-center mt-4 mt-lg-0">
                <img 
                    src="{{ asset('img/logos/serv1.jpg') }}" 
                    class="software-img"
                    alt="Desarrollo de Software">
            </div>

        </div>
    </div>
</section>

<!-- TECNOLOGÍAS -->
<section class="tecnologias">
    <div class="container">
        <div class="row align-items-center">

            <!-- IMAGEN -->
            <div class="col-lg-5 text-center mb-4 mb-lg-0">
                <img
                    src="{{ asset('img/logos/serv2.jpg') }}"
                    alt="Tecnologías"
                    class="tecnologias-img"
                >
            </div>

            <!-- CONTENIDO -->
            <div class="col-lg-7">
                <h2 class="tecnologias-title">
                    Tecnologías que <br> Utilizamos
                </h2>

                <ul class="tech-list">
                    <li><b>Frontend:</b> React, Angular, Vue.js</li>
                    <li><b>Backend:</b> Node.js, Python, Java</li>
                    <li><b>Bases de datos:</b> MySQL, PostgreSQL, MongoDB</li>
                    <li><b>Cloud:</b> AWS, Google Cloud, Azure</li>
                    <li><b>DevOps:</b> Docker, Kubernetes, Jenkins</li>
                </ul>

                <!-- BARRAS -->
                <div class="tech-bars">
                    <div class="tech-bar">
                        <span>HTML5</span>
                        <div class="progress">
                            <div class="progress-fill" style="width:100%">100%</div>
                        </div>
                    </div>

                    <div class="tech-bar">
                        <span>CSS3</span>
                        <div class="progress">
                            <div class="progress-fill" style="width:100%">100%</div>
                        </div>
                    </div>

                    <div class="tech-bar">
                        <span>Git</span>
                        <div class="progress">
                            <div class="progress-fill" style="width:100%">100%</div>
                        </div>
                    </div>

                    <div class="tech-bar">
                        <span>JIRA</span>
                        <div class="progress">
                            <div class="progress-fill" style="width:100%">100%</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- PREFERIRNOS -->
<section id="portfolio" class="bg-white">
    <div class="container" id="porqueelegirnos">
        <div class="section-content">
            <!-- Section Title -->
            <div class="title-wrap">
                <h2 class="metodologia-title">
                    ¿Por  <b>qué</b> Elegirnos?
                </h2>               
                <ul class="personali" style="padding-top: 40px;list-style-type: none;">
                    <li class="testi-desc mb-0"><i class="lnr lnr-checkmark-circle fs-18"></i> Más de 10 años de Experiencia en una amplia gama de proyectos, desde aplicaciones móviles hasta soluciones web personalizadas en el mercado de Latam</li>
                    <li class="testi-desc mb-0"><i class="lnr lnr-checkmark-circle fs-18"></i> Equipo de desarrolladores con certificaciones en las últimas tecnologías y herramientas para ofrecer soluciones de vanguardia.</li>
                    <li class="testi-desc mb-0"><i class="lnr lnr-checkmark-circle fs-18"></i> Nos mantenemos al día con las últimas tendencias tecnológicas y metodologías emergentes para ofrecer soluciones avanzadas que no solo cumplen con los estándares actuales, sino que también anticipan las necesidades futuras</li>
                    <li class="testi-desc mb-0"><i class="lnr lnr-checkmark-circle fs-18"></i> Cada proyecto que desarrollamos pasa por rigurosos controles de calidad para garantizar que cumplimos con los más altos estándares.</li>
                    <li class="testi-desc mb-0"><i class="lnr lnr-checkmark-circle fs-18"></i>  Nos dedicamos a desarrollar soluciones a medida que se alinean con las necesidades específicas de cada cliente. Desde la fase de planificación hasta la ejecución, nuestro equipo trabaja en estrecha colaboración con los clientes </li>
                </ul>            
            </div>
            <!-- End of Section Title -->

        </div>
    </div>
</section>

<!-- CTA DEVOPS -->
<section class="cta-devops">
    <div class="container text-center">
        <h2 class="cta-title">
            Expertos en DevOps: Acelerando el Ciclo de Vida del Software
        </h2>

        <p class="cta-text">
            Somos líderes en la implementación de prácticas DevOps,
            revolucionando la forma en que las empresas desarrollan,
            despliegan y mantienen su software.
        </p>

        <a href="/contacto" class="btn btn-success btn-lg cta-btn">
            💬 Hablemos
        </a>
    </div>
</section>

@endsection
