@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endpush

@section('content')
<section class="contact-page py-4 py-lg-5">
    <div class="contact-hero tech-card shadow-sm fade-up">
        <div class="row g-4 g-xl-5 align-items-stretch">
            <div class="col-lg-7">
                <div class="contact-form-wrap h-100 fade-up delay-1">
                    <p class="kicker mb-2">Hablemos de tu proyecto</p>
                    <h1 class="mb-3">Contacto Comercial</h1>
                    <p class="lead-text mb-4">
                        Te ayudamos a elegir el software ideal para tu negocio. Completa el formulario
                        y en minutos te enviamos informacion por WhatsApp o correo.
                    </p>

                    <form id="contactForm" class="contact-form" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="nombre">Nombre completo</label>
                                <input type="text" id="nombre" class="form-control" placeholder="Ej: Carlos Perez" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="correo">Correo (opcional)</label>
                                <input type="email" id="correo" class="form-control" placeholder="Ej: tuempresa@gmail.com">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="telefono">Telefono (opcional)</label>
                                <input type="text" id="telefono" class="form-control" placeholder="Ej: 3001234567">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="software">Software de interes</label>
                                <select id="software" class="form-select" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="inventario">Inventario y alquiler</option>
                                    <option value="celulares">Ventas y reparacion de celulares</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="plan">Plan</label>
                                <select id="plan" class="form-select" required disabled>
                                    <option value="">Selecciona primero un software</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label" for="mensaje">Mensaje adicional</label>
                                <textarea
                                    id="mensaje"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Ej: Quiero una demo y conocer tiempos de implementacion."
                                ></textarea>
                            </div>

                            <div class="col-12 pt-2 d-grid gap-2">
                                <button type="button" id="btnPreviewWhatsapp" class="btn btn-send w-100">
                                    <i class="fa-brands fa-whatsapp me-2"></i>Enviar por WhatsApp
                                </button>
                                <button type="button" id="btnSendMail" class="btn btn-mail w-100">
                                    <i class="fa-solid fa-envelope me-2"></i>Enviar por Correo
                                </button>
                                <div id="statusAlert" class="alert d-none mb-0 mt-2" role="alert"></div>
                                <p class="response-note mb-0 mt-2">Tiempo promedio de respuesta: menos de 30 minutos en horario laboral.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <aside class="contact-side h-100 fade-up delay-2">
                    <h3 class="mb-3">Canales directos</h3>
                    <p class="mb-4 side-text">
                        Si prefieres contacto inmediato, usa cualquiera de estos medios.
                    </p>

                    <div class="contact-list">
                        <a class="contact-item" href="https://wa.me/573132560420" target="_blank" rel="noopener noreferrer">
                            <span class="icon-circle"><i class="fa-brands fa-whatsapp"></i></span>
                            <span>
                                <small>WhatsApp</small>
                                <strong>+57 313 256 0420</strong>
                            </span>
                        </a>

                        <a class="contact-item" href="mailto:alfadijital.sas@gmail.com">
                            <span class="icon-circle"><i class="fa-solid fa-envelope"></i></span>
                            <span>
                                <small>Correo</small>
                                <strong>alfadijital.sas@gmail.com</strong>
                            </span>
                        </a>

                        <a class="contact-item" href="tel:+573132560420">
                            <span class="icon-circle"><i class="fa-solid fa-phone"></i></span>
                            <span>
                                <small>Telefono</small>
                                <strong>(+57) 313 256 0420</strong>
                            </span>
                        </a>
                    </div>

                    <div class="mini-info mt-4">
                        <p class="mb-2"><i class="fa-regular fa-clock me-2"></i>Lunes a viernes: 8:00 am - 6:00 pm</p>
                        <p class="mb-0"><i class="fa-solid fa-location-dot me-2"></i>Puerto Asis, Putumayo - Colombia</p>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="whatsappPreviewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar mensaje de WhatsApp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p class="small text-muted mb-2">Se enviara este mensaje:</p>
                <pre id="previewWhatsappText" class="preview-text mb-0"></pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Editar</button>
                <button type="button" id="btnConfirmWhatsapp" class="btn btn-success">Abrir WhatsApp</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const PLANES = {
            inventario: [
                'Plan Mensual - $280.000 / mes',
                'Compra Total - $10.000.000 + hosting'
            ],
            celulares: [
                'Plan Basico - $30.000 / mes',
                'Plan Profesional - $50.000 / mes',
                'Compra Total - $2.000.000 (pago unico)'
            ]
        };

        const softwareSelect = document.getElementById('software');
        const planSelect = document.getElementById('plan');
        const form = document.getElementById('contactForm');
        const previewText = document.getElementById('previewWhatsappText');
        const statusAlert = document.getElementById('statusAlert');
        let previewModal = null;

        function showStatus(type, message) {
            statusAlert.className = 'alert alert-' + type + ' mb-0 mt-2';
            statusAlert.textContent = message;
        }

        function getPreviewModal() {
            if (!window.bootstrap) {
                showStatus('danger', 'Error: no cargo Bootstrap JS. Recarga la pagina (Ctrl + F5).');
                return null;
            }

            if (!previewModal) {
                previewModal = new bootstrap.Modal(document.getElementById('whatsappPreviewModal'));
            }

            return previewModal;
        }

        function actualizarPlanes() {
            const software = softwareSelect.value;
            const planes = PLANES[software] || [];

            planSelect.innerHTML = '';

            if (!planes.length) {
                planSelect.disabled = true;
                planSelect.innerHTML = '<option value="">Selecciona primero un software</option>';
                return;
            }

            planSelect.disabled = false;
            planSelect.innerHTML = '<option value="">Selecciona un plan</option>';

            planes.forEach((plan) => {
                const option = document.createElement('option');
                option.value = plan;
                option.textContent = plan;
                planSelect.appendChild(option);
            });
        }

        function construirDatosMensaje() {
            const nombre = document.getElementById('nombre').value.trim();
            const correo = document.getElementById('correo').value.trim();
            const telefono = document.getElementById('telefono').value.trim();
            const software = softwareSelect.value;
            const plan = planSelect.value;
            const mensaje = document.getElementById('mensaje').value.trim();

            if (!nombre || !software || !plan) {
                form.reportValidity();
                showStatus('warning', 'Completa nombre, software y plan para continuar.');
                return null;
            }

            const softwareTexto = software === 'inventario'
                ? 'Inventario y alquiler'
                : 'Ventas y reparacion de celulares';

            const texto = [
                'Hola, quiero informacion comercial.',
                'Nombre: ' + nombre,
                'Software: ' + softwareTexto,
                'Plan: ' + plan,
                'Correo: ' + (correo || 'No especificado'),
                'Telefono: ' + (telefono || 'No especificado'),
                'Mensaje: ' + (mensaje || 'Quiero conocer detalles y una demo.')
            ].join('\n');

            return { texto, nombre, softwareTexto, plan, correo, telefono, mensaje };
        }

        function previsualizarWhatsapp() {
            const data = construirDatosMensaje();
            if (!data) {
                return;
            }

            const modal = getPreviewModal();
            if (!modal) {
                return;
            }

            previewText.textContent = data.texto;
            modal.show();
        }

        function enviarWhatsAppFinal() {
            const data = construirDatosMensaje();
            if (!data) {
                return;
            }

            const url = 'https://wa.me/573132560420?text=' + encodeURIComponent(data.texto);
            const modal = getPreviewModal();
            if (modal) {
                modal.hide();
            }

            const win = window.open(url, '_blank');
            if (win) {
                showStatus('success', 'Se abrio WhatsApp. Revisa y confirma el envio en la app.');
            } else {
                showStatus('danger', 'No se pudo abrir WhatsApp. Permite ventanas emergentes y vuelve a intentar.');
            }
        }

        function enviarCorreo() {
            const data = construirDatosMensaje();
            if (!data) {
                return;
            }

            const subject = 'Solicitud comercial - ' + data.plan;
            const body = [
                'Hola Alfa Digital,',
                '',
                'Quiero mas informacion comercial.',
                'Nombre: ' + data.nombre,
                'Software: ' + data.softwareTexto,
                'Plan: ' + data.plan,
                'Correo: ' + (data.correo || 'No especificado'),
                'Telefono: ' + (data.telefono || 'No especificado'),
                'Mensaje: ' + (data.mensaje || 'Quiero conocer detalles y una demo.')
            ].join('\n');

            const mailtoUrl = 'mailto:alfadijital.sas@gmail.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
            showStatus('info', 'Se abrira tu cliente de correo para confirmar el envio.');
            window.location.href = mailtoUrl;
        }

        softwareSelect.addEventListener('change', actualizarPlanes);
        document.getElementById('btnPreviewWhatsapp').addEventListener('click', previsualizarWhatsapp);
        document.getElementById('btnConfirmWhatsapp').addEventListener('click', enviarWhatsAppFinal);
        document.getElementById('btnSendMail').addEventListener('click', enviarCorreo);
        actualizarPlanes();
    });
</script>
@endsection
