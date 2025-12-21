document.addEventListener('DOMContentLoaded', () => {
  const observerOptions = {
    threshold: 0.3,
    rootMargin: '0px 0px -100px 0px'
  };

  const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  const timelineCards = document.querySelectorAll('.timeline-card');

  timelineCards.forEach(card => {
    card.style.opacity = '0';
    card.style.transform = 'translateY(30px)';
    card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    animateOnScroll.observe(card);
  });

  timelineCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
    });
  });
});
document.addEventListener('DOMContentLoaded', () => {
  const statNumbers = document.querySelectorAll('.stat-number');

  const animateNumber = (element, target) => {
    const duration = 1500;
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      element.textContent = Math.floor(current);
    }, 16);
  };

  const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
        const targetNumber = parseInt(entry.target.textContent);
        entry.target.classList.add('animated');
        animateNumber(entry.target, targetNumber);
      }
    });
  }, observerOptions);

  statNumbers.forEach(number => {
    observer.observe(number);
  });

  const statCards = document.querySelectorAll('.stat-card');

  statCards.forEach((card, index) => {
    card.addEventListener('mouseenter', () => {
      card.style.transform = 'translateY(-8px) scale(1.02)';
    });

    card.addEventListener('mouseleave', () => {
      card.style.transform = 'translateY(0) scale(1)';
    });
  });
});
