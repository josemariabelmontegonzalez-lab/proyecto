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

        const passwordInput = document.querySelector('input[name="password"]');
        const cat = document.querySelector('.cat');
        passwordInput.addEventListener('focus', () => {
            cat.classList.add('cover-eyes');
        });
        passwordInput.addEventListener('blur', () => {
            cat.classList.remove('cover-eyes');
        });