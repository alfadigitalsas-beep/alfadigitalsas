@extends('layouts.app')

@section('content')
<h1 class="mb-4 text-center">Nuestros Servicios</h1>

<div class="row g-4">
    <div class="col-md-3">
        <div class="tech-card p-4 text-center">
            <h5>💻 Desarrollo de Software</h5>
            <p>Sistemas a medida según tus necesidades.</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="tech-card p-4 text-center">
            <h5>📦 Alquiler de Software</h5>
            <p>Soluciones listas para usar, sin complicaciones.</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="tech-card p-4 text-center">
            <h5>🛠️ Mantenimiento</h5>
            <p>Soporte técnico y optimización de equipos.</p>
        </div>
    </div>

    <div class="col-md-3">
        <div class="tech-card p-4 text-center">
            <h5>📊 Asesorías</h5>
            <p>Te ayudamos a tomar mejores decisiones tecnológicas.</p>
        </div>
    </div>
</div>
@endsection
