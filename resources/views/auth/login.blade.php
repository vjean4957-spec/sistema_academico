
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión</title>

    @vite(['resources/css/adminlte.css', 'resources/js/adminlte.js'])
</head>

<body class="bg-body-tertiary">

<div class="container min-vh-100 d-flex align-items-center justify-content-center">

    <div class="card shadow" style="width: 100%; max-width: 420px;">
        <div class="card-body p-4">

            <h3 class="text-center mb-2">Sistema Académico</h3>
            <p class="text-center text-secondary">Ingrese sus credenciales</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password"
                           class="form-control" required>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="remember"
                           class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">
                        Recordarme
                    </label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        Iniciar sesión
                    </button>
                </div>
            </form>

            <div class="text-center mt-3">
                <a href="{{ route('register') }}">Crear una cuenta</a>
            </div>

        </div>
    </div>

</div>

</body>
</html>
