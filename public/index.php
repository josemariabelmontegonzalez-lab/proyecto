<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/index.css">
</head>

<body class="bg-neutral-50 text-neutral-800">

    <?php

    require_once __DIR__ . "/componentes/header.php";

    ?>

    <!-- Hero Section -->
    <section class="hero-bg text-white py-20 md:py-28">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl playful-font font-bold mb-6 leading-tight animate-fade-in">Bienvenido a la Unión Gatuna, refugio dedicado a los gatos.</h2>
            <p class="text-xl md:text-2xl mb-10 max-w-3xl mx-auto leading-relaxed opacity-95">Descubre nuestra historia, como trabajamos y nuestros pequeños amigos felinos.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <button
                    class="bg-amber-400 hover:bg-amber-500 text-teal-900 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <i class="fas fa-search mr-2"></i>Conoce a Nuestros Gatos.
                </button>
                <button
                    class="bg-white hover:bg-neutral-100 text-teal-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <i class="fas fa-user-plus mr-2"></i>Suscribete aquí.
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl playful-font font-bold text-center mb-16 text-teal-700">¿Quiénes somos?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div
                    class="feature-card bg-white p-8 rounded-2xl border border-amber-100 hover:border-teal-300 shadow-lg">
                    <div
                        class="w-20 h-20 bg-teal-100 rounded-full flex items-center justify-center mb-6 mx-auto shadow-md">
                        <i class="fas fa-archive text-3xl text-teal-600"></i>
                    </div>
                    <h3 class="text-2xl playful-font font-semibold mb-4 text-teal-700 text-center">Nuestra Historia
                    </h3>
                    <p class="text-neutral-600 text-center leading-relaxed">Accede a nuestra Web para descubrir nuestra historia, y conoce como trabajamos.</p>
                    <div class="mt-6 flex justify-center">
                        <img src="https://images.unsplash.com/photo-1724072294032-8f3f50745471?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxoaXN0b3JpY2FsJTIwYXJjaGl2ZXMlMjBkb2N1bWVudHMlMjBvbGQlMjBib29rcyUyMGxpYnJhcnl8ZW58MHwwfHx8MTc1OTc2NjUzM3ww&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=LEqRC0Q7b9I"
                            alt="Historical Archives" class="w-full h-48 object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Feature 2 -->
                <div
                    class="feature-card bg-white p-8 rounded-2xl border border-amber-100 hover:border-teal-300 shadow-lg">
                    <div
                        class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mb-6 mx-auto shadow-md">
                        <i class="fas fa-theater-masks text-3xl text-amber-600"></i>
                    </div>
                    <h3 class="text-2xl playful-font font-semibold mb-4 text-teal-700 text-center">Visita nuestras instalaciones
                    </h3>
                    <p class="text-neutral-600 text-center leading-relaxed">Visita nuestras instalaciones y conoce a nuestros pequeños amigos gatunos.</p>
                    <div class="mt-6 flex justify-center">
                        <img src="https://images.unsplash.com/photo-1758818035036-5c6a3faf9996?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxoaXN0b3JpY2FsJTIwcmVlbmFjdG1lbnQlMjBjb3N0dW1lJTIwcGVyaW9kJTIwZHJlc3N8ZW58MHwwfHx8MTc1OTc2NjUzN3ww&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=En0ak_Iwp1I"
                            alt="Living History" class="w-full h-48 object-cover rounded-lg shadow-md">
                    </div>
                </div>

                <!-- Feature 3 -->
                <div
                    class="feature-card bg-white p-8 rounded-2xl border border-amber-100 hover:border-teal-300 shadow-lg">
                    <div
                        class="w-20 h-20 bg-emerald-100 rounded-full flex items-center justify-center mb-6 mx-auto shadow-md">
                        <i class="fas fa-landmark text-3xl text-emerald-600"></i>
                    </div>
                    <h3 class="text-2xl playful-font font-semibold mb-4 text-teal-700 text-center">Conoce la historia de nuestros residentes.</h3>
                    <p class="text-neutral-600 text-center leading-relaxed">Conoce la historia de cada uno de nuestros gato en el refugio y descubre como puedes ayudarlos.</p>
                    <div class="mt-6 flex justify-center">
                        <img src="https://images.unsplash.com/photo-1758626215340-3903d066e3d2?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxhbnRpcXVlJTIwYXJ0aWZhY3RzJTIwbXVzZXVtJTIwZGlzcGxheXxlbnwwfDB8fHwxNzU5NzY2NTQxfDA&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=MUtjMT0y2ys"
                            alt="Museum Artifacts" class="w-full h-48 object-cover rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="relative py-24 bg-gradient-to-br from-teal-800 via-teal-700 to-emerald-700 text-white overflow-hidden">
        <div class="relative z-10 container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Texto -->
                <div>
                    <h2 class="text-4xl md:text-5xl playful-font font-bold mb-6 leading-tight">
                        Tu ayuda cambia vidas
                    </h2>

                    <p class="text-lg md:text-xl text-teal-100 mb-10 leading-relaxed max-w-xl">
                        Cada donación nos permite rescatar, alimentar y ofrecer atención veterinaria
                        a nuestros gatos. Gracias a personas solidarias podemos darles una segunda oportunidad real.
                    </p>

                    <div class="flex flex-wrap gap-6">
                        <button class="bg-amber-400 hover:bg-amber-500 text-teal-900 px-10 py-4 rounded-full font-semibold shadow-2xl transition-all duration-300 transform hover:scale-105">
                            Donar ahora
                        </button>

                        <button class="border-2 border-white/70 hover:bg-white hover:text-teal-800 px-10 py-4 rounded-full font-semibold transition-all duration-300">
                            Saber más
                        </button>
                    </div>
                </div>

                <!-- Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                    <!-- Rescatados -->
                    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-white/20 hover:scale-105 transition">
                        <div class="w-12 h-12 mb-6 text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-2">+80</h3>
                        <p class="text-teal-100">Gatos rescatados</p>
                    </div>

                    <!-- Veterinaria -->
                    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-white/20 hover:scale-105 transition">
                        <div class="w-12 h-12 mb-6 text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-2">100%</h3>
                        <p class="text-teal-100">Atención veterinaria</p>
                    </div>

                    <!-- Refugio -->
                    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-white/20 hover:scale-105 transition">
                        <div class="w-12 h-12 mb-6 text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 10l9-7 9 7v10a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V10z" />
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold mb-2">24/7</h3>
                        <p class="text-teal-100">Refugio y cuidados</p>
                    </div>

                    <!-- Donantes -->
                    <div class="bg-white/10 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-white/20 hover:scale-105 transition">
                        <div class="w-12 h-12 mb-6 text-amber-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="w-12 h-12">
                                <path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 10-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z" />
                            </svg>

                        </div>
                        <h3 class="text-3xl font-bold mb-2">Gracias</h3>
                        <p class="text-teal-100">A cada donante</p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- Upcoming Events -->
    <section class="py-20 bg-teal-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl playful-font font-bold text-center mb-16 text-teal-700">Futuros Eventos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event 1 -->
                <div
                    class="event-card bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1745816698779-4b43418cf432?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHx2aWN0b3JpYW4lMjB0ZWElMjBwYXJ0eSUyMGVsZWdhbnQlMjBzZXR0aW5nfGVufDB8MHx8fDE3NTk3NjY1NDR8MA&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=jKHqXRUiPj8"
                            alt="Victorian Tea Party"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="bg-teal-100 text-teal-700 px-4 py-2 rounded-full text-sm font-semibold shadow-sm">
                                <i class="fas fa-calendar-alt mr-2"></i>15 de Junio
                            </span>
                            <span
                                class="bg-amber-100 text-amber-700 px-3 py-1 rounded-full text-xs font-semibold">Limitado</span>
                        </div>
                        <h3 class="text-xl playful-font font-semibold mb-3 text-teal-700">Visita a la sala de gatos</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Adentrate en nuestras instalaciones y conoce a nuestros gatos en el refugio.</p>
                        <button
                            class="w-full bg-teal-600 hover:bg-teal-700 text-white px-4 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-info-circle mr-2"></i>Más detalles.
                        </button>
                    </div>
                </div>

                <!-- Event 2 -->
                <div
                    class="event-card bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1759150584482-6eaa3a23dab1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxoaXN0b3JpY2FsJTIwd2Fsa2luZyUyMHRvdXIlMjBhcmNoaXRlY3R1cmV8ZW58MHwwfHx8MTc1OTc2NjU0OXww&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=0S8ErFIxqVY"
                            alt="Historical Walking Tour"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="bg-teal-100 text-teal-700 px-4 py-2 rounded-full text-sm font-semibold shadow-sm">
                                <i class="fas fa-calendar-alt mr-2"></i>22 de Junio.
                            </span>
                            <span
                                class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">Evento Gratuito</span>
                        </div>
                        <h3 class="text-xl playful-font font-semibold mb-3 text-teal-700">Tour Completo por la Reserva</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Accede a un Tour completo por la reserva con ayuda de nuestros ayudantes, que ofrecerán información y una guía completa por nuestras instalaciones.</p>
                        <button
                            class="w-full bg-teal-600 hover:bg-teal-700 text-white px-4 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-info-circle mr-2"></i>Más detalles
                        </button>
                    </div>
                </div>

                <!-- Event 3 -->
                <div
                    class="event-card bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1758797851668-bb40a878113d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w4MDcxMzN8MHwxfHNlYXJjaHwxfHxhbnRpcXVlJTIwYXBwcmFpc2FsJTIwdmludGFnZSUyMGl0ZW1zfGVufDB8MHx8fDE3NTk3NjY1NTJ8MA&ixlib=rb-4.1.0&q=80&w=400&utm_source=TailFlux&photo_id=F19gCY-G3Hw"
                            alt="Antique Appraisal"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span
                                class="bg-teal-100 text-teal-700 px-4 py-2 rounded-full text-sm font-semibold shadow-sm">
                                <i class="fas fa-calendar-alt mr-2"></i> 8 de Agosto
                            </span>
                            <span
                                class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Evento Especial Limitado</span>
                        </div>
                        <h3 class="text-xl playful-font font-semibold mb-3 text-teal-700">Visita especial voluntaria</h3>
                        <p class="text-neutral-600 mb-4 leading-relaxed">Reserva tu plaza y visita nuestra reserva principal, conoce a nuestro personal, y a nuestros gatitos, y además ofrecemos plazas para voluntarios.</p>
                        <button
                            class="w-full bg-teal-600 hover:bg-teal-700 text-white px-4 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-info-circle mr-2"></i>Más detalles
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
                <button
                    class="bg-amber-400 hover:bg-amber-500 text-teal-900 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-calendar-check mr-2"></i>Ver todos los eventos
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <!--   <section class="py-20 bg-amber-50">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl playful-font font-bold mb-6 text-teal-700">Mantente conectado con nosotros</h2>
                <p class="text-neutral-600 mb-10 text-lg max-w-2xl mx-auto leading-relaxed">Inicia sesión para recibir actualizaciones, notificaciones y contenido exclusivo.</p>
                <div class="max-w-md mx-auto flex shadow-lg rounded-lg overflow-hidden">
                    <input type="email" placeholder="Ingrese su correo electrónico"
                        class="flex-1 px-6 py-4 border-0 focus:outline-none focus:ring-2 focus:ring-teal-400 text-lg">
                    <button
                        class="bg-teal-600 hover:bg-teal-700 text-white px-8 py-4 font-semibold transition-all duration-300 transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-2"></i>Subscríbete
                    </button>
                </div>
                <p class="text-sm text-neutral-500 mt-4">Respetamos tu privacidad. Puedes darte de baja en cualquier momento.</p>
            </div>
        </div>
    </section> -->

    <?php

    require_once __DIR__ . "/componentes/footer.php";

    ?>
</body>

</html>