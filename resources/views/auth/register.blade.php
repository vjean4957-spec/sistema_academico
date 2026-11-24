
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de usuario</title>

    @vite(['resources/css/adminlte.css', 'resources/js/adminlte.js'])
</head>

<body class="bg-body-tertiary">

<div class="container min-vh-100 d-flex align-items-center justify-content-center">

    <div class="card shadow" style="width: 100%; max-width: 450px;">
        <div class="card-body p-4">

            <h3 class="text-center mb-3">Crear cuenta</h3>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" name="name" class="form-control"
                           value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation"
                           class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        Registrarme
                    </button>
                </div>

            </form>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Volver al inicio de sesión</a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
