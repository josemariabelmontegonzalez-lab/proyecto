<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulario con estilo neón</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="registro.css">
</head>

<body>

    <img src="gato1.png" alt="gato 1">

    <form action="procesar_registro.php" method="POST">
        <h2>Registro de Usuario</h2>

        <div class="input-container">
            <input type="text" name="username" placeholder="Nombre de usuario" required />
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo electrónico" required />
        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña" required />
        </div>

        <button type="submit">Registrarse</button>
    </form>

    <img src="gato2.png" alt="gato 2">

    <div class="cat">
        <div class="ear ear--left"></div>
        <div class="ear ear--right"></div>
        <div class="face">
            <div class="eye eye--left">
                <div class="eye-pupil"></div>
            </div>
            <div class="eye eye--right">
                <div class="eye-pupil"></div>
            </div>
            <div class="muzzle"></div>
            <div class="paw paw--left"></div>
            <div class="paw paw--right"></div>

        </div>
    </div>
    <script src="registro.js"></script>
</body>

</html>