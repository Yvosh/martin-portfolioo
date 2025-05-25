document.addEventListener("DOMContentLoaded", function () {
  const frontText = "FRONT-END";
  const devText = "DEVELOPER";
  const frontTarget = document.getElementById("typed-front");
  const devTarget = document.getElementById("typed-dev");
  const cursor = document.getElementById("cursor");

  let frontIndex = 0;
  let devIndex = 0;

  function typeFront() {
    if (frontIndex < frontText.length) {
      frontTarget.textContent += frontText.charAt(frontIndex);
      frontIndex++;
      setTimeout(typeFront, 120);
    } else {
      // Move cursor to after DEV text container before typing starts
      if (cursor.parentNode !== devTarget.parentNode) {
        frontTarget.parentNode.removeChild(cursor);
        devTarget.parentNode.insertBefore(cursor, devTarget.nextSibling);

        // Add the big class to enlarge cursor
        cursor.classList.add("big");
      }
      setTimeout(typeDev, 300);
    }
  }

  function typeDev() {
    if (devIndex < devText.length) {
      devTarget.textContent += devText.charAt(devIndex);
      devIndex++;
      setTimeout(typeDev, 120);
    }
  }

  typeFront();
});

const navToggle = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links a");

navToggle?.addEventListener("click", () => {
  const expanded = navToggle.getAttribute("aria-expanded") === "true" || false;
  navToggle.setAttribute("aria-expanded", !expanded);
  navLinks.classList.toggle("hidden");
});

links.forEach((link) => {
  link.addEventListener("click", () => {
    navToggle?.setAttribute("aria-expanded", false);
    navLinks.classList.add("hidden");
  });
});

function updateActiveLink() {
  const scrollPos = window.scrollY + window.innerHeight / 3;

  // First, remove the "active" class from all links
  links.forEach((link) => {
    link.classList.remove("active");
  });
  // Then, check which section is currently in view and add "active" class to the corresponding link
  links.forEach((link) => {
    const section = document.querySelector(link.getAttribute("href"));
    if (
      section &&
      section.offsetTop <= scrollPos &&
      section.offsetTop + section.offsetHeight > scrollPos
    ) {
      link.classList.add("active");
    }
  });
}
window.addEventListener("scroll", updateActiveLink);
window.addEventListener("load", updateActiveLink);

// Close menu when clicking a nav link
links.forEach((link) => {
  link.addEventListener("click", () => {
    navToggle.setAttribute("aria-expanded", false);
    navLinks.classList.add("hidden");
  });
});

links.forEach((link) => {
  link.addEventListener("click", function () {
    // Remove active styles from all links
    links.forEach((l) => l.classList.remove("font-bold", "after:w-full"));

    // Add active styles to the clicked link
    this.classList.add("font-bold", "after:w-full");

    // Optional: close the mobile nav after clicking a link
    navLinks.classList.add("hidden");
    navToggle.setAttribute("aria-expanded", false);
  });
});

function toggleMore() {
  const moreSection = document.getElementById("more-experience");
  const btn = event.target;

  if (moreSection.classList.contains("hidden")) {
    moreSection.classList.remove("hidden");
    btn.textContent = "See Less";
    btn.setAttribute("aria-expanded", "true");
  } else {
    moreSection.classList.add("hidden");
    btn.textContent = "See More";
    btn.setAttribute("aria-expanded", "false");
  }
}

function openPreview() {
  document.getElementById("resumeModal").classList.remove("hidden");
}

function closePreview() {
  document.getElementById("resumeModal").classList.add("hidden");
}

const toggleButton = document.getElementById("toggleProjects");
const hiddenCards = document.querySelectorAll(".project-card.hidden");
let isExpanded = false;

toggleButton.addEventListener("click", () => {
  hiddenCards.forEach((card) => card.classList.toggle("hidden"));
  isExpanded = !isExpanded;
  toggleButton.textContent = isExpanded
    ? "Show Less Projects"
    : "Show More Projects";
});

const modal = document.getElementById("modal");
const modalContent = document.getElementById("modalContent");
const closeModal = document.getElementById("closeModal");

// Skill data object — just data, no DOM stuff here
const skillData = {
  skill1: {
    title: "Years of Experience",
    description:
      "I have 1+ years of experience from school projects and freelance commissions, using React, Tailwind CSS, JavaScript, HTML, and CSS for front-end development. On the back end, I work with PHP and MySQL, and I’m currently learning Laravel and Blade.",
  },
  skill2: {
    title: "Projects Completed",
    description:
      "I have successfully completed 8 projects, including both school assignments and commissioned work — ranging from small websites to more complex web applications.",
  },
  skill3: {
    title: "Happy Clients",
    description:
      "I have 2 happy clients who are satisfied with the quality and timeliness of my work.",
  },
};

document.addEventListener("DOMContentLoaded", () => {
  const skill4 = document.getElementById("skill4");
  const modal = document.getElementById("modals");
  const closeModal = document.getElementById("closeModals");

  skill4.addEventListener("click", () => {
    modal.classList.remove("hidden");
    modal.classList.add("flex");
    document.body.style.overflow = "hidden"; // prevent background scroll
  });

  closeModal.addEventListener("click", () => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
    document.body.style.overflow = ""; // restore scroll
  });

  // Optional: Close modal by clicking outside content
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.add("hidden");
      modal.classList.remove("flex");
      document.body.style.overflow = "";
    }
  });
});

// Close modal on clicking outside modal content
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    closeModal.click();
  }
});

// Close modal on pressing Escape key
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal.click();
  }
});

document.querySelectorAll(".skill-box").forEach((box) => {
  box.addEventListener("click", () => {
    const data = skillData[box.id];
    modalContent.innerHTML = `<h2 class="text-2xl font-bold mb-4">${data.title}</h2><p>${data.description}</p>`;
    modal.classList.remove("hidden");
  });
});

closeModal.addEventListener("click", () => {
  modal.classList.add("hidden");
});

modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.classList.add("hidden");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".fade-up");

  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.1,
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible"); // Add visible class when in view
      } else {
        entry.target.classList.remove("visible"); // Remove visible class when out of view
      }
    });
  }, options);

  sections.forEach((section) => {
    observer.observe(section); // Observe each section
  });
});
