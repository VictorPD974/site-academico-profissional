document.addEventListener('DOMContentLoaded', () => {
    // --- LÓGICA DO MODO ESCURO ---
    const themeToggleBtn = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    
    // Recupera tema salvo ou preferência do sistema
    const savedTheme = localStorage.getItem('theme');
    const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const currentTheme = savedTheme || (systemPrefersDark ? 'dark' : 'light');

    function applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
        document.documentElement.setAttribute('data-bs-theme', theme);
        localStorage.setItem('theme', theme);
        if (themeIcon) {
            themeIcon.textContent = theme === 'dark' ? '☀️' : '🌙';
        }
    }

    // Aplica o tema imediatamente ao carregar
    applyTheme(currentTheme);

    // Evento de clique no botão
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', (e) => {
            e.preventDefault();
            const activeTheme = document.documentElement.getAttribute('data-theme') || 'light';
            const newTheme = activeTheme === 'dark' ? 'light' : 'dark';
            applyTheme(newTheme);
        });
    }

    // --- LÓGICA DO MENU MOBILE ---
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('open');
        });
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('testimonialTrack');
    const prevBtn = document.getElementById('testimonialPrev');
    const nextBtn = document.getElementById('testimonialNext');

    if (track && prevBtn && nextBtn) {
        // Quantidade de pixels para rolar ao clicar na seta
        const getScrollAmount = () => {
            const card = track.querySelector('.testimonial-card');
            return card ? card.offsetWidth + 20 : 320;
        };

        // Eventos dos botões
        nextBtn.addEventListener('click', () => {
            track.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            track.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
        });

        // Rotação automática (Carrossel infinito a cada 5 segundos)
        let autoplay = setInterval(() => {
            if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 10) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            }
        }, 5000);

        // Pausa o carrossel se o utilizador passar o rato ou interagir com o ecrã
        track.addEventListener('mouseenter', () => clearInterval(autoplay));
        track.addEventListener('touchstart', () => clearInterval(autoplay));
    }
});