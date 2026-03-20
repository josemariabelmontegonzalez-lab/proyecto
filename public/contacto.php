<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/index.css">

    <script>
        if (sessionStorage.getItem('loaderShown')) {
            document.documentElement.style.visibility = 'hidden';
            setTimeout(() => {
                document.documentElement.style.visibility = '';
            }, 50);
        }
    </script>

    <style>
        #loader-overlay {
            position: fixed;
            inset: 0;
            background: #f0faf8;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <?php

    require_once __DIR__ . "/componentes/loader.php";

    ?>

    <?php

    require_once __DIR__ . "/componentes/header.php";

    ?>
    <div class="max-w-7xl mx-auto px-6 py-12 flex gap-10">
        <!-- Contenido principal con horario + formulario -->
        <div class="flex-1 flex flex-col">
            <div class="mb-8">
                <h2 class="playful-font text-2xl text-emerald-900 mb-4">Horarios de llamada</h2>
                <p class="text-gray-600 mb-4">Estamos disponibles para atenderte en los siguientes horarios:</p>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Lunes a Viernes:</strong> 10:00 AM - 14:00 PM</p>
                    <p><strong>Sábado:</strong> 12:00 AM - 14:00 PM</p>
                    <p><strong>Domingo:</strong> Cerrado</p>
                </div>
            </div>
            <!-- Formulario de contacto -->
            <div class="flex-1">
                <h2 class="playful-font text-2xl text-emerald-900 mb-4">Contáctanos</h2>
                <p class="text-gray-600 mb-6">¿Tienes dudas, sugerencias o quieres enviarnos un mensaje? Completa el siguiente formulario.</p>
                <form action="control/control_form.php" method="post" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="nombre"> <strong>Nombre:</strong></label>
                        <input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre aqui." required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="email"> <strong>Email:</strong></label>
                        <input type="email" name="email" id="email" required placeholder="Correo electrónico."
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="mensaje"> <strong>Mensaje:</strong></label>
                        <textarea name="mensaje" id="mensaje" rows="4" required maxlength="250" placeholder="Escribe tu mensaje aqui:"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
        <!-- Sidebar a la derecha -->
        <?php require_once __DIR__ . "/componentes/sidebar.php"; ?>
    </div>

    <?php

    require_once __DIR__ . "/componentes/footer.php";

    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>