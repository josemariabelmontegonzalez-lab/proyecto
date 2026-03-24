const overlay = document.getElementById('loader-overlay');

function ocultarLoader() {
  if (!overlay) return;
  overlay.classList.add('hidden');
  sessionStorage.setItem('loaderShown', 'true');
  setTimeout(() => overlay.remove(), 2000);
}

const maxTimer = setTimeout(ocultarLoader, 5000);

if (!overlay) {
} else if (sessionStorage.getItem('loaderShown')) {
  overlay.style.display = 'none';
} else {
  setTimeout(() => {
    clearTimeout(maxTimer);
    ocultarLoader();
  }, 2400);

  // Huellas decorativas
  const pawPositions = [
    { top: '8%', left: '5%', rotate: '-15deg' },
    { top: '15%', left: '88%', rotate: '20deg' },
    { top: '38%', left: '2%', rotate: '10deg' },
    { top: '42%', left: '92%', rotate: '-25deg' },
    { top: '65%', left: '6%', rotate: '30deg' },
    { top: '70%', left: '90%', rotate: '-10deg' },
    { top: '82%', left: '4%', rotate: '5deg' },
    { top: '80%', left: '85%', rotate: '15deg' },
  ];

  pawPositions.forEach(p => {
    const el = document.createElement('div');
    el.className = 'loader-paw';
    el.style.cssText = `top:${p.top}; left:${p.left}; transform:rotate(${p.rotate})`;
    el.textContent = '🐾';
    overlay.appendChild(el);
  });

  // Lottie con ruta directa
  lottie.loadAnimation({
    container: document.getElementById('lottie-main'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'animacion/gato_cargando.json'
  });
}