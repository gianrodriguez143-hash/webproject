// =====================================================================
// DLSJBC — shared interactivity
// =====================================================================

// --- scroll progress bar -------------------------------------------------
(function scrollProgress() {
  const bar = document.querySelector('.scroll-progress');
  if (!bar) return;
  const update = () => {
    const h = document.documentElement;
    const scrolled = h.scrollTop;
    const height = h.scrollHeight - h.clientHeight;
    bar.style.width = height > 0 ? (scrolled / height) * 100 + '%' : '0%';
  };
  document.addEventListener('scroll', update, { passive: true });
  update();
})();

// --- mobile nav toggle ----------------------------------------------------
(function navToggle() {
  const btn = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.main-nav');
  if (!btn || !nav) return;
  btn.addEventListener('click', () => {
    nav.classList.toggle('is-open');
    btn.classList.toggle('is-active');
  });
  nav.querySelectorAll('a').forEach(a =>
    a.addEventListener('click', () => nav.classList.remove('is-open'))
  );
})();

// --- highlight current page in nav ----------------------------------------
(function activeNav() {
  const path = location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.main-nav a').forEach(a => {
    const href = a.getAttribute('href');
    if (href === path || (path === '' && href === 'index.html')) {
      a.classList.add('active');
    }
  });
})();

// --- scroll reveal (IntersectionObserver fade-up) --------------------------
(function scrollReveal() {
  const items = document.querySelectorAll('.reveal');
  if (!items.length) return;
  if (!('IntersectionObserver' in window)) {
    items.forEach(el => el.classList.add('is-visible'));
    return;
  }
  const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
  items.forEach((el, i) => {
    el.style.transitionDelay = Math.min(i * 60, 300) + 'ms';
    io.observe(el);
  });
})();

// --- admissions tabs --------------------------------------------------------
(function tabs() {
  const tabButtons = document.querySelectorAll('.tab-btn');
  if (!tabButtons.length) return;
  tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.dataset.tab;
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('is-active'));
      document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('is-active'));
      btn.classList.add('is-active');
      document.getElementById(target).classList.add('is-active');
    });
  });
})();

// --- contact form (client-side only, no backend) ---------------------------
(function contactForm() {
  const form = document.querySelector('.contact-form');
  if (!form) return;
  const success = document.querySelector('.form-success');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    success.classList.add('is-shown');
    form.reset();
    success.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  });
})();

// --- articles search + category filter --------------------------------------
(function articlesFilter() {
  const searchInput = document.querySelector('.search-box input');
  const pills = document.querySelectorAll('.filter-pills .tab-btn');
  const cards = document.querySelectorAll('.news-card[data-category]');
  const noResults = document.querySelector('.no-results');
  if (!cards.length) return;

  let activeCategory = 'all';

  function applyFilters() {
    const term = (searchInput ? searchInput.value : '').trim().toLowerCase();
    let visibleCount = 0;
    cards.forEach(card => {
      const title = card.dataset.title || '';
      const category = card.dataset.category || '';
      const matchesCategory = activeCategory === 'all' || category === activeCategory;
      const matchesTerm = !term || title.includes(term);
      const show = matchesCategory && matchesTerm;
      card.style.display = show ? '' : 'none';
      if (show) visibleCount++;
    });
    if (noResults) noResults.classList.toggle('is-shown', visibleCount === 0);
  }

  if (searchInput) searchInput.addEventListener('input', applyFilters);
  pills.forEach(pill => {
    pill.addEventListener('click', () => {
      pills.forEach(p => p.classList.remove('is-active'));
      pill.classList.add('is-active');
      activeCategory = pill.dataset.category || 'all';
      applyFilters();
    });
  });
})();
