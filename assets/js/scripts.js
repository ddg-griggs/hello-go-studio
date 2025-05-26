// Мобильное меню
document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.createElement('button');
  menuToggle.className = 'go-menu-toggle';
  menuToggle.innerHTML = '☰';
  menuToggle.style.display = 'none'; // Скрываем на десктопе

  const header = document.querySelector('.go-header .go-container');
  if (header) {
    header.prepend(menuToggle);

    const nav = document.querySelector('.go-navigation');
    menuToggle.addEventListener('click', function() {
      nav.style.display = nav.style.display === 'block' ? 'none' : 'block';
    });

    // Адаптивность
    window.addEventListener('resize', function() {
      if (window.innerWidth <= 768) {
        menuToggle.style.display = 'block';
        nav.style.display = 'none';
      } else {
        menuToggle.style.display = 'none';
        nav.style.display = 'block';
      }
    });
  }
});

// Плавный скролл для якорей
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
