<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php

    require_once __DIR__ . "/componentes/header.php";

    ?>

    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 lg:grid-cols-12 gap-10">
        <main class="lg:col-span-8">

            <?php

        require_once __DIR__ . "/componentes/form.php";

        ?>

        </main>

        <?php

        require_once __DIR__ . "/componentes/sidebar.php";

        ?>

    </div>


    <?php

    require_once __DIR__ . "/componentes/footer.php";

    ?>

</body>

</html>