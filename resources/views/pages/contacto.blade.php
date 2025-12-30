@extends('layouts.app')

@section('content')
<div class="tech-card p-5">
    <h1 class="mb-4">Contáctenos</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/contacto">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea name="mensaje" class="form-control" rows="4" required></textarea>
        </div>

        <button class="btn btn-primary">Enviar Mensaje 🚀</button>
    </form>
</div>
@endsection
