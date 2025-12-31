@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="tech-card p-5 shadow rounded">

        <h1 class="mb-3">📞 Contáctenos</h1>
        <p class="text-muted mb-4">
            Escríbenos y te respondemos más rápido que un “hola, ¿estás ahí?” 😄
        </p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row g-4">
            <!-- FORMULARIO -->
            <div class="col-md-6">
                <form onsubmit="enviarWhatsApp(event)">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" id="correo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea id="mensaje" class="form-control" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                        📲 Enviar por WhatsApp
                    </button>
                </form>
            </div>

            <!-- INFO -->
            <div class="col-md-6">
                <div class="bg-light p-4 rounded h-100">
                    <h5>Contacto directo</h5>
                    <p class="mb-2">
                        📱 <strong>WhatsApp:</strong><br>
                        +57 3132560420
                    </p>

                    <p class="mb-2">
                        📧 <strong>Correo:</strong><br>
                        alfadijital.sas@gmail.com
                    </p>

                    <p class="mb-0">
                        🕘 <strong>Horario:</strong><br>
                        Lun–Vie | 8:00 am – 6:00 pm
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function enviarWhatsApp(e) {
    e.preventDefault();

    let nombre = document.getElementById('Nombre').value;
    let correo = document.getElementById('Correo').value;
    let mensaje = document.getElementById('Mensaje').value;

    let texto = `Hola, soy ${nombre}
Correo: ${correo}
Mensaje: ${mensaje}`;

    let url = `https://wa.me/573132560420?text=${encodeURIComponent(texto)}`;
    window.open(url, '_blank');
}
</script>
@endsection
