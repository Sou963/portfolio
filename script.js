// ================================
// CURSOR
// ================================
const cursor = document.getElementById("cursor");
const trail = document.getElementById("cursor-trail");

if (cursor && trail) {
  document.addEventListener("mousemove", (e) => {
    cursor.style.left = e.clientX + "px";
    cursor.style.top = e.clientY + "px";
    setTimeout(() => {
      trail.style.left = e.clientX + "px";
      trail.style.top = e.clientY + "px";
    }, 80);
  });

  document.querySelectorAll("a, button, .project-card, .tag").forEach((el) => {
    el.addEventListener("mouseenter", () => {
      cursor.style.transform = "translate(-50%, -50%) scale(2)";
      trail.style.opacity = "0.2";
    });
    el.addEventListener("mouseleave", () => {
      cursor.style.transform = "translate(-50%, -50%) scale(1)";
      trail.style.opacity = "0.5";
    });
  });
}

// ================================
// NAVBAR SCROLL
// ================================
const navbar = document.getElementById("navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// ================================
// MOBILE NAV
// ================================
const navToggle = document.getElementById("navToggle");
const navLinks = document.getElementById("navLinks");

navToggle?.addEventListener("click", () => {
  navLinks.classList.toggle("open");
});

// Close nav on link click (mobile)
navLinks?.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", () => navLinks.classList.remove("open"));
});

// ================================
// DARK / LIGHT THEME
// ================================
const themeToggle = document.getElementById("themeToggle");

// Start in light mode
let isDark = false;
document.documentElement.setAttribute("data-theme", "light");
if (themeToggle) themeToggle.innerHTML = '<i class="fa-solid fa-moon"></i>';

themeToggle?.addEventListener("click", () => {
  isDark = !isDark;
  document.documentElement.setAttribute(
    "data-theme",
    isDark ? "dark" : "light"
  );
  themeToggle.innerHTML = isDark
    ? '<i class="fa-solid fa-sun"></i>'
    : '<i class="fa-solid fa-moon"></i>';
});

// ================================
// TYPED TEXT
// ================================
const phrases = [
  "Web Developer",
  "App Developer",
  "React Specialist",
  "Flutter Developer",
  "Full Stack Builder",
];

let phraseIdx = 0;
let charIdx = 0;
let deleting = false;
const typedEl = document.getElementById("typedText");

function typeEffect() {
  if (!typedEl) return;
  const current = phrases[phraseIdx];

  if (!deleting) {
    typedEl.textContent = current.substring(0, charIdx + 1);
    charIdx++;
    if (charIdx === current.length) {
      deleting = true;
      setTimeout(typeEffect, 1800);
      return;
    }
  } else {
    typedEl.textContent = current.substring(0, charIdx - 1);
    charIdx--;
    if (charIdx === 0) {
      deleting = false;
      phraseIdx = (phraseIdx + 1) % phrases.length;
    }
  }

  setTimeout(typeEffect, deleting ? 60 : 90);
}

typeEffect();

// ================================
// SCROLL REVEAL
// ================================
const revealEls = document.querySelectorAll(".reveal");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add("visible");
        }, i * 80);
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.1 }
);

revealEls.forEach((el) => observer.observe(el));

// ================================
// ACTIVE NAV LINK HIGHLIGHT
// ================================
const sections = document.querySelectorAll("section[id]");
const allNavLinks = document.querySelectorAll(".nav-link");

window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    if (window.scrollY >= section.offsetTop - 150) {
      current = section.getAttribute("id");
    }
  });

  allNavLinks.forEach((link) => {
    link.style.color = "";
    if (link.getAttribute("href") === "#" + current) {
      link.style.color = "var(--accent)";
    }
  });
});
