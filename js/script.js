// Typing effect removed - no longer needed in optimized hero section
document.addEventListener('DOMContentLoaded', () => {
  // Script mantido para compatibilidade, mas efeito de digitação removido
});

// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Reading Progress Bar
window.addEventListener('scroll', () => {
  const progressBar = document.getElementById('progressBar');
  if (progressBar) {
    const totalHeight = document.documentElement.scrollHeight - document.documentElement
      .clientHeight;
    const progress = (window.scrollY / totalHeight) * 100;
    progressBar.style.width = progress + '%';
  }
});

// O código do formulário de contato foi removido pois agora é gerenciado por um serviço externo.

// =================================================================== 
// MOBILE MENU FUNCTIONALITY
// ===================================================================

// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', () => {
  const mobileMenuBtn = document.getElementById('mobileMenuBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuClose = document.getElementById('mobileMenuClose');
  const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

  // Open mobile menu
  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.add('active');
      document.body.style.overflow = 'hidden'; // Prevent body scroll
    });
  }

  // Close mobile menu
  if (mobileMenuClose) {
    mobileMenuClose.addEventListener('click', () => {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = 'auto'; // Restore body scroll
    });
  }

  // Close menu when clicking on links
  mobileMenuLinks.forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = 'auto'; // Restore body scroll
    });
  });

  // Close menu when clicking outside
  mobileMenu.addEventListener('click', (e) => {
    if (e.target === mobileMenu) {
      mobileMenu.classList.remove('active');
      document.body.style.overflow = 'auto'; // Restore body scroll
    }
  });
});

// Testimonial Carousel
document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('testimonial-track');
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');

  if (track) {
    let currentIndex = 0;

    const getItemsVisible = () => window.innerWidth >= 768 ? 3 : 1;
    const getTotalItems = () => track.children.length;

    function updateCarousel() {
      const itemsVisible = getItemsVisible();
      const totalItems = getTotalItems();
      const itemWidth = track.parentElement.clientWidth / itemsVisible;

      const newTransform = -(currentIndex * itemWidth);
      track.style.transform = `translateX(${newTransform}px)`;

      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex >= totalItems - itemsVisible;
    }

    nextBtn.addEventListener('click', () => {
      const itemsVisible = getItemsVisible();
      const totalItems = getTotalItems();
      if (currentIndex < totalItems - itemsVisible) {
        currentIndex++;
        updateCarousel();
      }
    });

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    window.addEventListener('resize', () => {
      // Adjust index if it becomes out of bounds on resize
      const itemsVisible = getItemsVisible();
      const totalItems = getTotalItems();
      if (currentIndex > totalItems - itemsVisible) {
        currentIndex = totalItems - itemsVisible;
      }
      updateCarousel();
    });

    // Initial setup
    updateCarousel();
  }
});