<!-- SIDEBAR DERECHA -->
<aside class="lg:col-span-4">
  <div class="sticky top-24 space-y-8">

    <!-- LOGIN -->
    <section class="bg-white rounded-2xl shadow-lg p-6 border border-emerald-100">
      <h2 class="playful-font text-xl text-emerald-900 mb-4">Área de miembros</h2>
      <button class="w-full rounded-full bg-yellow-400 hover:bg-yellow-500 text-emerald-900 font-semibold py-3 transition">
        Iniciar sesión
      </button>
    </section>

    <!-- ENTRADAS RECIENTES -->
    <section class="bg-white rounded-2xl shadow-lg p-6 border border-emerald-100">
      <h2 class="playful-font text-xl text-emerald-900 mb-4">Entradas recientes</h2>
      <ul class="space-y-3 text-sm">
        <li>
          <a href="#" class="block text-emerald-700 hover:text-emerald-900 hover:underline">
            ¡Felices Fiestas!
          </a>
        </li>
        <li>
          <a href="#" class="block text-emerald-700 hover:text-emerald-900 hover:underline">
            Islantilla en Ruta – Otoño 2025
          </a>
        </li>
        <li>
          <a href="#" class="block text-emerald-700 hover:text-emerald-900 hover:underline">
            Vuelven las Escuelas Deportivas
          </a>
        </li>
        <li>
          <a href="#" class="block text-emerald-700 hover:text-emerald-900 hover:underline">
            Programación Verano 2025
          </a>
        </li>
      </ul>
    </section>

    <!-- Redes Sociales -->
    <section class="bg-white rounded-2xl shadow-lg p-6 border border-emerald-100">
      <h2 class="playful-font text-xl text-emerald-900 mb-4">Síguenos</h2>
      <div class="flex flex-col gap-4">
        <a href="https://www.facebook.com" class="flex items-center space-x-3" target="_blank">
          <div class="w-8 h-8 bg-teal-700 rounded-full flex items-center justify-center">
            <img src="media/iconos/facebook.png" alt="Facebook" class="w-4 h-4">
          </div>
          <span class="text-teal-700 font-semibold">Facebook</span>
        </a>
        <a href="https://www.instagram.com" class="flex items-center space-x-3" target="_blank">
          <div class="w-8 h-8 bg-teal-700 rounded-full flex items-center justify-center">
            <img src="media/iconos/instagram.png" alt="Instagram" class="w-4 h-4">
          </div>
          <span class="text-teal-700 font-semibold">Instagram</span>
        </a>
        <a href="https://twitter.com" class="flex items-center space-x-3" target="_blank">
          <div class="w-8 h-8 bg-teal-700 rounded-full flex items-center justify-center">
            <img src="media/iconos/twitter.png" alt="Twitter" class="w-4 h-4">
          </div>
          <span class="text-teal-700 font-semibold">Twitter</span>
        </a>
        <a href="https://www.tiktok.com" class="flex items-center space-x-3" target="_blank">
          <div class="w-8 h-8 bg-teal-700 rounded-full flex items-center justify-center">
            <img src="media/iconos/tik-tok.png" alt="TikTok" class="w-4 h-4">
          </div>
          <span class="text-teal-700 font-semibold">TikTok</span>
        </a>
      </div>
    </section>

    <!-- CALENDARIO -->
    <section class="bg-white rounded-2xl shadow-lg p-6 border border-emerald-100">
      <h2 class="playful-font text-xl text-emerald-900 mb-4">Calendario</h2>
      <div id="sidebar-calendar" class="rounded-xl border border-emerald-200 overflow-hidden text-sm"></div>
    </section>
    <script>
      // simple calendar generator with daily refresh
      (function() {
        const container = document.getElementById('sidebar-calendar');
        function renderCalendar() {
          const today = new Date();
          const month = today.getMonth();
          const year = today.getFullYear();
          const firstDay = new Date(year, month, 1).getDay();
          const daysInMonth = new Date(year, month + 1, 0).getDate();
          const weekDays = ['D','L','M','X','J','V','S'];
          let html = '<div class="grid grid-cols-7 text-center text-xs font-semibold bg-emerald-50 text-emerald-800">';
          weekDays.forEach(d=> html += `<div class="py-2">${d}</div>`);
          html += '</div><div class="grid grid-cols-7 text-center">';
          // empty slots
          for(let i=0;i<firstDay;i++) html += '<div class="py-3 text-gray-400"></div>';
          for(let d=1; d<=daysInMonth; d++){
            const isToday = d===today.getDate();
            html += `<div class="py-3 transition-colors duration-300 ${isToday?'rounded-full bg-emerald-500 text-white font-semibold':'hover:bg-emerald-100'}">${d}</div>`;
          }
          html += '</div>';
          container.innerHTML = html;
        }
        renderCalendar();
        // rerender when day changes (check every minute)
        setInterval(() => {
          const now = new Date();
          if (now.getHours() === 0 && now.getMinutes() === 0) {
            renderCalendar();
          }
        }, 60000);
      })();
    </script>

  </div>
</aside>