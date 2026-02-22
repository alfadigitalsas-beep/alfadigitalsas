@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">
@endpush

@section('content')
<div class="about-shell">
    <section class="about-hero">
        <p class="about-eyebrow">SOBRE NOSOTROS</p>
        <h1>Equipo de desarrollo orientado a resultados de negocio</h1>
        <p>
            Alfa Digital Solutions S.A.S es una empresa colombiana enfocada en disenar e implementar
            soluciones tecnologicas para organizaciones que buscan control, productividad y crecimiento.
        </p>
    </section>

    <section class="about-grid about-story">
        <article class="about-card">
            <h2>Quienes somos</h2>
            <p>
                Integramos talento en desarrollo de software, analisis de procesos y acompanamiento operativo
                para entregar plataformas utiles, seguras y sostenibles.
            </p>
            <p>
                Nuestro enfoque combina comprension del negocio con ejecucion tecnica para generar impacto real.
            </p>
        </article>

        <article class="about-card">
            <h2>Nuestra propuesta</h2>
            <ul>
                <li>Soluciones a medida alineadas al modelo de cada empresa</li>
                <li>Implementacion por fases con priorizacion de valor</li>
                <li>Documentacion, transferencia y soporte continuo</li>
            </ul>
        </article>
    </section>

    <section class="about-mv">
        <article class="mv-card">
            <h2>Mision</h2>
            <p>
                Impulsar la transformacion digital de empresas mediante tecnologia practica,
                confiable y enfocada en resultados medibles.
            </p>
        </article>
        <article class="mv-card">
            <h2>Vision</h2>
            <p>
                Ser una firma referente en soluciones de software empresarial en Colombia,
                reconocida por calidad tecnica, cercania y cumplimiento.
            </p>
        </article>
    </section>

    <section class="about-values">
        <div class="section-head">
            <p>Principios</p>
            <h2>Como trabajamos con nuestros clientes</h2>
        </div>

        <div class="value-grid">
            <article class="value-card">
                <h3>Transparencia</h3>
                <p>Comunicacion clara de alcance, tiempos, costos y riesgos.</p>
            </article>
            <article class="value-card">
                <h3>Rigor tecnico</h3>
                <p>Buenas practicas de desarrollo, pruebas y seguridad desde el inicio.</p>
            </article>
            <article class="value-card">
                <h3>Compromiso</h3>
                <p>Trabajo responsable con seguimiento constante a los objetivos del proyecto.</p>
            </article>
            <article class="value-card">
                <h3>Mejora continua</h3>
                <p>Iteramos sobre datos y feedback para optimizar cada solucion desplegada.</p>
            </article>
        </div>
    </section>

    <section class="about-team">
        <div class="section-head">
            <p>Liderazgo</p>
            <h2>Direccion de la compania</h2>
        </div>

        <div class="leaders">
            <div class="leader-item">Cesar Herrera</div>
            <div class="leader-item">Andres Ortega</div>
            <div class="leader-item">Edinson Rosero</div>
        </div>

        <p class="team-note">
            Nuestro equipo trabaja con una meta comun: convertir la tecnologia en una ventaja competitiva real
            para cada cliente.
        </p>
    </section>

    <section class="about-cta">
        <h2>Construyamos la siguiente etapa digital de tu empresa</h2>
        <a class="btn btn-primary btn-lg" href="{{ url('/contacto') }}">Hablar con un asesor</a>
    </section>
</div>
@endsection
