@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endpush

@section('content')
<div class="premium-home">
    <section class="premium-hero">
        <div class="hero-orb hero-orb-a" aria-hidden="true"></div>
        <div class="hero-orb hero-orb-b" aria-hidden="true"></div>

        <div class="premium-grid">
            <div class="premium-copy">
                <p class="kicker">ALFA DIGITAL SOLUTIONS S.A.S</p>
                <h1>Software empresarial de alto impacto para venta y alquiler</h1>
                <p class="subtitle">
                    Desarrollamos y comercializamos soluciones listas para operar, con arquitectura robusta,
                    interfaz profesional y soporte continuo. Tu negocio obtiene control, trazabilidad y escalabilidad.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/contacto') }}" class="btn btn-primary btn-lg">Solicitar demo</a>
                    <a href="{{ url('/nosotros') }}" class="btn btn-outline-light btn-lg">Ver compania</a>
                </div>

                <div class="trust-badges">
                    <span><i class="fa-solid fa-check"></i> Implementacion guiada</span>
                    <span><i class="fa-solid fa-check"></i> Licencia y alquiler</span>
                    <span><i class="fa-solid fa-check"></i> Soporte tecnico</span>
                </div>
            </div>

            <aside class="hero-card">
                <h2>Ventaja competitiva</h2>
                <ul>
                    <li><i class="fa-solid fa-chart-line"></i> Reportes y trazabilidad en tiempo real</li>
                    <li><i class="fa-solid fa-lock"></i> Seguridad y control por roles</li>
                    <li><i class="fa-solid fa-cloud-arrow-up"></i> Escalable para crecimiento empresarial</li>
                    <li><i class="fa-solid fa-headset"></i> Acompanamiento operativo post-entrega</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="software-showcase">
        <div class="section-head">
            <p>CATALOGO DE SOFTWARE</p>
            <h2>Soluciones que puedes vender o alquilar</h2>
            <span class="section-note">Puedes agregar mas softwares duplicando una tarjeta en esta seccion.</span>
        </div>

        <div class="software-grid">
            <article class="software-card">
                <div class="software-image-wrap">
                    <img src="{{ asset('img/img_alquiler/inventario.png') }}" alt="Software de inventario y alquiler">
                    <span class="tag tag-rent">Alquiler / Licencia</span>
                </div>
                <div class="software-body">
                    <h3>Software de Inventario y Alquiler</h3>
                    <p>Gestion de inventario, contratos, disponibilidad de equipos y control de movimientos.</p>
                    <ul>
                        <li>Control de entradas y salidas</li>
                        <li>Seguimiento de estado de equipos</li>
                        <li>Panel administrativo centralizado</li>
                    </ul>
                </div>
            </article>

            <article class="software-card">
                <div class="software-image-wrap">
                    <img src="{{ asset('img/img_ventas/new_venta.png') }}" alt="Software de ventas y facturacion">
                    <span class="tag tag-sale">Venta / Licencia</span>
                </div>
                <div class="software-body">
                    <h3>Software de Ventas y Facturacion</h3>
                    <p>Registro de ventas, clientes, productos y movimientos para operacion comercial diaria.</p>
                    <ul>
                        <li>Modulo de nueva venta</li>
                        <li>Gestion de clientes y productos</li>
                        <li>Historico y analitica de transacciones</li>
                    </ul>
                </div>
            </article>

            <article class="software-card">
                <div class="software-image-wrap">
                    <img src="{{ asset('img/img_ventas/manj_reparacion.png') }}" alt="Software de reparaciones y garantia">
                    <span class="tag tag-hybrid">Venta + Servicio</span>
                </div>
                <div class="software-body">
                    <h3>Software de Reparaciones y Garantias</h3>
                    <p>Flujo completo de ordenes de servicio, garantias, estado tecnico y entrega al cliente.</p>
                    <ul>
                        <li>Trazabilidad por ticket</li>
                        <li>Control de garantia y repuestos</li>
                        <li>Historial tecnico por cliente</li>
                    </ul>
                </div>
            </article>
        </div>

        <div class="screens-row">
            <img src="{{ asset('img/img_ventas/reg_producto.png') }}" alt="Pantalla de registro de producto">
            <img src="{{ asset('img/img_ventas/lis_cliente.png') }}" alt="Pantalla de clientes">
            <img src="{{ asset('img/img_alquiler/lis_alquiler.png') }}" alt="Pantalla de alquileres">
            <img src="{{ asset('img/img_ventas/movimiento.png') }}" alt="Pantalla de movimientos">
        </div>
    </section>

    <section class="execution-model">
        <div class="section-head">
            <p>MODELO DE EJECUCION</p>
            <h2>Implementacion profesional por etapas</h2>
        </div>

        <div class="steps">
            <article>
                <span>01</span>
                <h3>Diagnostico</h3>
                <p>Levantamos necesidades, alcance y prioridad funcional.</p>
            </article>
            <article>
                <span>02</span>
                <h3>Configuracion</h3>
                <p>Ajustamos tu software, usuarios y estructura operativa.</p>
            </article>
            <article>
                <span>03</span>
                <h3>Capacitacion</h3>
                <p>Entrenamos al equipo para uso efectivo del sistema.</p>
            </article>
            <article>
                <span>04</span>
                <h3>Soporte</h3>
                <p>Acompanamiento para evolucion continua y estabilidad.</p>
            </article>
        </div>
    </section>

    <section class="premium-cta">
        <div>
            <p class="cta-kicker">PRESENTACION COMERCIAL</p>
            <h2>Convierte tu operacion en una plataforma tecnologica de alto nivel</h2>
            <p>Agenda una reunion y te mostramos el software ideal para tu modelo de negocio.</p>
        </div>
        <a href="{{ url('/contacto') }}" class="btn btn-light btn-lg">Hablar con un asesor</a>
    </section>
</div>
@endsection
