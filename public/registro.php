<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulario con estilo neón</title>

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            border: 0;
            font: 14px "Lato", Arial, sans-serif;
            min-width: 100%;
            min-height: 100%;
            color: #666;
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            gap: 40px;
            overflow: hidden;
        }

        /* Ajuste de tamaño de imágenes */
        img {
            max-width: 30%;
            height: auto;
            margin: 0 20px;
        }

        form {
            background: white;
            padding: 2rem 3rem 3rem;
            border-radius: 1rem;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            box-sizing: border-box;
            text-align: center;
            position: relative;
        }

        form h2 {
            color: #06594d;
            margin-bottom: 2rem;
            font-weight: 700;
            font-size: 1.8rem;
            font-family: "Georgia", serif;
        }

        .input-container {
            position: relative;
            width: 100%;
            margin-bottom: 1.8rem;
        }

        form input {
            border: 1px solid #ccc;
            padding: 10px 14px;
            font: 15px/24px "Lato", Arial, sans-serif;
            color: #333;
            width: 100%;
            border-radius: 6px;
            transition: all 0.3s ease;
            background: transparent;
            box-sizing: border-box;
        }

        form input:hover {
            border-color: #39ff14;
            box-shadow: 0 0 8px 2px #27B05D;
        }

        form input:focus,
        form input:active {
            outline: none;
            border-color: #ffffff;
            box-shadow: 0 0 15px 5px #29C464;
        }

        button {
            width: 100%;
            background-color: #06594d;
            color: white;
            font-weight: 700;
            font-size: 1rem;
            padding: 12px 0;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        button:hover {
            background-color: #f7b500;
            color: #06594d;
        }

        /* ------------------ GATO ASOMÁNDOSE ------------------ */

        :root {
            --black: #161616;
            --white: #fff;
            --size: 170px;
        }

        .cat {
            position: absolute;
            bottom: -60px;
            /* se asoma desde abajo */
            left: 50%;
            transform: translateX(-50%);
            height: var(--size);
            width: calc(var(--size) * 1.13);
            animation: asomar 1.5s ease-out forwards;
        }

        @keyframes asomar {
            0% {
                transform: translate(-50%, 120%);
            }

            100% {
                transform: translate(-50%, 0);
            }
        }

        .ear {
            position: absolute;
            top: -30%;
            height: 60%;
            width: 25%;
            background: var(--white);
            border: 3px solid black;
            /* ← BORDE NEGRO AÑADIDO */
            border-radius: 50%;
        }


        .ear::before,
        .ear::after {
            content: '';
            position: absolute;
            bottom: 24%;
            height: 10%;
            width: 5%;
            border-radius: 50%;
            background: var(--black);
        }

        .ear--left {
            left: -7%;
            border-radius: 70% 30% 0 0 / 100% 100% 0 0;
            transform: rotate(-15deg);
        }

        .ear--left::before,
        .ear--left::after {
            right: 10%;
        }

        .ear--left::after {
            transform: rotate(-45deg);
        }

        .ear--right {
            right: -7%;
            border-radius: 30% 70% 0 0 / 100% 100% 0 0;
            transform: rotate(15deg);
        }

        .ear--right::before,
        .ear--right::after {
            left: 10%;
        }

        .ear--right::after {
            transform: rotate(45deg);
        }

        .face {
            position: absolute;
            height: 100%;
            width: 100%;
            background: var(--black);
            border-radius: 50%;
        }

        .eye {
            position: absolute;
            top: 35%;
            height: 30%;
            width: 31%;
            background: var(--white);
            border-radius: 50% / 60% 60% 40% 40%;
        }

        .eye--left {
            left: 0;
        }

        .eye--right {
            right: 0;
        }

        .eye::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 0;
            width: 100%;
            border-radius: 0 0 50% 50% / 0 0 40% 40%;
            background: var(--black);
            animation: blink 4s infinite ease-in;
        }

        @keyframes blink {

            0%,
            90% {
                height: 0;
            }

            92.5% {
                height: 100%;
            }

            95% {
                height: 0;
            }

            97.5% {
                height: 100%;
            }

            100% {
                height: 0;
            }
        }

        .eye-pupil {
            position: absolute;
            top: 25%;
            height: 50%;
            width: 20%;
            background: var(--black);
            border-radius: 50%;
            transition: transform 0.1s linear;
        }

        .eye--left .eye-pupil {
            right: 30%;
        }

        .eye--right .eye-pupil {
            left: 30%;
        }

        .eye-pupil::after {
            content: '';
            position: absolute;
            top: 30%;
            right: -5%;
            height: 20%;
            width: 35%;
            border-radius: 50%;
            background: var(--white);
        }

        .muzzle {
            position: absolute;
            top: 60%;
            left: 50%;
            height: 6%;
            width: 10%;
            background: var(--white);
            transform: translateX(-50%);
            border-radius: 50% / 30% 30% 70% 70%;
        }
    </style>
</head>

<body>

    <img src="gato1.png" alt="gato 1">

    <form>
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

    <!-- GATO ASOMÁNDOSE -->
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
        </div>
    </div>

    <script>
        document.addEventListener("mousemove", (e) => {
            const eyes = document.querySelectorAll(".eye-pupil");

            eyes.forEach(pupil => {
                const rect = pupil.getBoundingClientRect();
                const eyeCenterX = rect.left + rect.width / 2;
                const eyeCenterY = rect.top + rect.height / 2;

                const angle = Math.atan2(e.clientY - eyeCenterY, e.clientX - eyeCenterX);
                const distance = 6;

                const x = Math.cos(angle) * distance;
                const y = Math.sin(angle) * distance;

                pupil.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>

</body>

</html>