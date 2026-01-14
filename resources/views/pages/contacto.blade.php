@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="tech-card p-5 shadow rounded">

        <h1 class="mb-3">📞 Contáctenos</h1>
        <p class="text-muted mb-4">
            Escríbenos y te asesoramos sin compromiso (sin letra chiquita 😄).
        </p>

        <div class="row g-4">

            <!-- FORMULARIO -->
            <div class="col-md-6">
                <form onsubmit="enviarWhatsApp(event)">

                    <!-- NOMBRE -->
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>

                    <!-- CORREO -->
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" id="correo" class="form-control">
                    </div>

                    <!-- SOFTWARE -->
                    <div class="mb-3">
                        <label class="form-label">Software de interés</label>
                        <select id="software" class="form-select" required onchange="actualizarPlanes()">
                            <option value="">Seleccione un software</option>
                            <option value="inventario">Inventarios y Alquiler</option>
                            <option value="celulares">Ventas y Reparación de Celulares</option>
                        </select>
                    </div>

                    <!-- PLAN (DINÁMICO) -->
                    <div class="mb-3">
                        <label class="form-label">Plan</label>
                        <select id="plan" class="form-select" required>
                            <option value="">Seleccione primero un software</option>
                        </select>
                    </div>

                    <!-- MENSAJE -->
                    <div class="mb-3">
                        <label class="form-label">Mensaje adicional</label>
                        <textarea
                            id="mensaje"
                            class="form-control"
                            rows="4"
                            placeholder="Ej: Quiero una demo o conocer tiempos de implementación."
                        ></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">
                         Enviar por WhatsApp
                    </button>
                </form>
            </div>

            <!-- INFO -->
            <div class="col-md-6">
                <div class="bg-light p-4 rounded h-100">
                    <h5>Contacto directo</h5>
                    <p class="mb-2">
                        📱 <strong>WhatsApp:</strong><br>
                        +57 313 256 0420
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

{{-- SCRIPTS --}}
<script>
    function actualizarPlanes() {
        const software = document.getElementById('software').value;
        const planSelect = document.getElementById('plan');

        planSelect.innerHTML = '<option value="">Seleccione un plan</option>';

        // INVENTARIO Y ALQUILER
        if (software === 'inventario') {
            planSelect.innerHTML += `
                <option value="Plan Estándar - $280.000/mes">
                    Plan Estándar – $280.000 / mes
                </option>
                <option value="Plan Premium - $350.000/mes">
                    Plan Premium – $350.000 / mes
                </option>
                <option value="Compra Total - $10.000.000 + hosting">
                    Compra Total – $10.000.000 (pago único)
                </option>
            `;
        }

        // VENTAS Y REPARACIÓN DE CELULARES
        if (software === 'celulares') {
            planSelect.innerHTML += `
                <option value="Plan Básico - $30.000/mes">
                    Plan Básico – $30.000 / mes
                </option>
                <option value="Plan Profesional - $50.000/mes">
                    Plan Profesional – $50.000 / mes
                </option>
                <option value="Compra Total - $2.000.000">
                    Compra Total – $2.000.000 (pago único)
                </option>
            `;
        }
    }

    function enviarWhatsApp(e) {
        e.preventDefault();

        const nombre   = document.getElementById('nombre').value;
        const correo   = document.getElementById('correo').value;
        const software = document.getElementById('software').value;
        const plan     = document.getElementById('plan').value;
        const mensaje  = document.getElementById('mensaje').value;

        const softwareTexto = software === 'inventario'
            ? 'Inventarios y Alquiler'
            : 'Ventas y Reparación de Celulares';

        let texto =
    `Hola 👋
    Mi nombre es ${nombre}

    📦 Software: ${softwareTexto}
    💼 Plan: ${plan}
    📧 Correo: ${correo}

    📝 Mensaje:
    ${mensaje || 'Deseo más información.'}`;

        const url = `https://wa.me/573132560420?text=${encodeURIComponent(texto)}`;
        window.open(url, '_blank');
    }
</script>
@endsection
