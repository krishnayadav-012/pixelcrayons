
document.querySelectorAll(".append-btn-more").forEach((btn) => {
  btn.addEventListener("click", function () {
    const grid = this.closest(".compliance-section__grid");

    grid.classList.toggle("active");
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector("#home-tpl-logoslide");
  if (slider) {
    new Glide(slider, {
      type: "carousel",
      autoplay: 6000,
      animationDuration: 6000,
      animationTimingFunc: "linear",
      perView: 1,
      gap: 30,
      hoverpause: false
    }).mount();
  }
});

// Progress Slider with hover pause/resume support
// Progress Slider with simple hover pause
function initProgressSlider(selector, duration = 4000) {
    const section = document.querySelector(selector);

    if (!section) return;

    const items = section.querySelectorAll('.ai-item');

    if (!items.length) return;

    let current = 0;
    let timer = null;
    let isPaused = false;

    const resetItems = () => {

        items.forEach(item => {

            item.classList.remove('active');

            const progress = item.querySelector('.progress');

            if (progress) {

                progress.style.transition = 'none';
                progress.style.width = '0%';

            }

        });

    };

    const startProgress = (index) => {

        clearTimeout(timer);

        resetItems();

        const activeItem = items[index];

        if (!activeItem) return;

        activeItem.classList.add('active');

        const progress = activeItem.querySelector('.progress');

        if (progress) {

            requestAnimationFrame(() => {

                progress.style.transition = `width ${duration}ms linear`;
                progress.style.width = '100%';

            });

        }

        timer = setTimeout(() => {

            // Don't move if paused
            if (isPaused) return;

            current = (current + 1) % items.length;

            startProgress(current);

        }, duration);

    };

    items.forEach((item, index) => {

        item.addEventListener('click', () => {

            current = index;

            startProgress(current);

        });

        // Pause animation on hover
        item.addEventListener('mouseenter', () => {

            isPaused = true;

            const progress = item.querySelector('.progress');

            if (progress) {

                const computedWidth = window.getComputedStyle(progress).width;

                progress.style.transition = 'none';
                progress.style.width = computedWidth;

            }

            clearTimeout(timer);

        });

        // Restart current slide on leave
        item.addEventListener('mouseleave', () => {

            isPaused = false;

            startProgress(current);

        });

    });
    startProgress(current);
}
// Init sliders
initProgressSlider('.fintech-delivery');
initProgressSlider('.we-embed');

// vertical-tabing
(function () {
    var section = document.querySelector('.vertical-tabs');
    if (!section) return;
 
    var tabBtns = section.querySelectorAll('.vertical-tabs__tab-btn');
    var panels  = section.querySelectorAll('.vertical-tabs__panel');
 
    tabBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = btn.getAttribute('data-services-tab');
 
        tabBtns.forEach(function (b) { b.classList.remove('active'); });
        panels.forEach(function (p)  { p.classList.remove('active'); });
 
        btn.classList.add('active');
 
        var activePanel = section.querySelector('#services-panel-' + target);
        if (activePanel) activePanel.classList.add('active');
      });
    });
  })();



//   `````````````````````````````````````````````````
// slidr box cta
if (document.getElementById("box-grids")) {
  const slides = document.querySelectorAll('.slide-boxes .box');
  let index = 0;

  setInterval(() => {
    slides[index].classList.remove('active');

    index++;
    if (index >= slides.length) index = 0;

    slides[index].classList.add('active');
  }, 2000);
}


    // review-card

    const cards = document.querySelectorAll(".review-card");
    if (cards.length !== 0){
      let current = 0;
      function updateCards() {
        cards.forEach(card => {
          card.classList.remove("active", "next", "last");
        });

        const total = cards.length;

        cards[current].classList.add("active");
        cards[(current + 1) % total].classList.add("next");
        cards[(current + 2) % total].classList.add("last");

        current = (current + 1) % total;
      }

      // Initial state
      updateCards();

      // Auto rotate every 2 seconds
      setInterval(updateCards, 2000);
    }
    




    // faq section
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {
      const button = item.querySelector(".faq-question");

      button.addEventListener("click", () => {
        const isActive = item.classList.contains("active");

        // close all
        faqItems.forEach(i => i.classList.remove("active"));

        // open clicked if it was closed
        if (!isActive) {
          item.classList.add("active");
        }
      });
    });

// elm-expand-tlb
if (document.getElementById("elm-expand-tlb")) {
  const elmExpandTlBtn = document.getElementById("elm-expand-tlb");
  elmExpandTlBtn.addEventListener("click", function() {
    const parent = this.closest(".add-lists-icon");
    parent.classList.toggle("expanded");
    this.classList.toggle("active");
  });
}

// Timeline Section used in Brand page
(function() {
  // ─── GUARD 1: Required section must exist ───────────────────────────────
  // All logic is scoped to .how-it-works. If the section isn't on this page,
  // the script exits immediately — zero impact on any other section or page.
  const section = document.querySelector('.how-it-works');
  if (!section) return;

  // ─── GUARD 2: Required elements must live inside the section ────────────
  // IDs and class selectors are queried from `section`, not from document,
  // so they can never accidentally match elements in other sections.
  const scrollEl = section.querySelector('#timelineScroll');
  const progressEl = section.querySelector('#timelineProgress');
  const items = Array.from(section.querySelectorAll('.timeline-item'));
  const total = items.length;

  // ─── GUARD 3: Bail if any required element is missing ───────────────────
  if (!scrollEl || !progressEl || total === 0) return;

  let currentStep = -1; // which step is currently active
  let animating = false; // lock while smooth-scroll is in flight
  let autoTimer = null; // interval handle

  // ── helpers ──────────────────────────────────────────────────────────────

  // Returns progress-bar height % so the bar tip aligns to the bubble centre.
  function pctForStep(index) {
    // GUARD: index must be within bounds
    if (index < 0 || index >= total) return 0;

    const bubble = items[index].querySelector('.step-bubble');
    if (!bubble) return 0;

    const panelRect = scrollEl.getBoundingClientRect();
    const bubbleRect = bubble.getBoundingClientRect();

    const bubbleCentre = bubbleRect.top - panelRect.top +
      scrollEl.scrollTop +
      bubbleRect.height / 2;

    const totalTrack = scrollEl.scrollHeight - 40; // matches CSS top:20 + bottom:20
    const filled = bubbleCentre - 20;
    return Math.min(100, Math.max(0, (filled / totalTrack) * 100));
  }

  // Activate all steps up to and including `index`.
  // Only touches elements that are children of `section`.
  function activateUpTo(index) {
    items.forEach((item, i) => {
      item.classList.toggle('active', i <= index);
    });
    progressEl.style.height = pctForStep(index) + '%';
  }

  // Smoothly scroll the panel (scoped to scrollEl only — never window).
  function scrollToStep(index) {
    if (index < 0 || index >= total) return;
    const target = items[index].offsetTop - 40;
    scrollEl.scrollTo({
      top: Math.max(0, target),
      behavior: 'smooth'
    });
  }

  // ── entrance: staggered fade-in for items inside the section ─────────────
  items.forEach((item, i) => {
    setTimeout(() => item.classList.add('visible'), 100 + 80 * i);
  });

  // ── auto-advance ──────────────────────────────────────────────────────────
  function advance() {
    if (animating) return;
    const next = currentStep + 1;

    if (next >= total) {
      // Reached the last step — stop. Never restarts.
      clearInterval(autoTimer);
      autoTimer = null;
      return;
    }

    animating = true;
    currentStep = next;

    activateUpTo(currentStep); // highlight bubble + grow bar
    scrollToStep(currentStep); // scroll panel (not window)

    // Release lock after smooth-scroll settles (~600 ms)
    setTimeout(() => {
      animating = false;
    }, 650);
  }

  // Kick off after paint (600 ms), then every 1.8 s
  setTimeout(() => {
    advance();
    autoTimer = setInterval(advance, 1800);
  }, 600);

  // ── manual scroll sync (only after auto finishes) ─────────────────────────
  // Listener is attached to scrollEl only — never to window or document,
  // so it cannot interfere with any other section's scroll behaviour.
  scrollEl.addEventListener('scroll', function() {
    if (autoTimer !== null) return; // hands off while auto is running

    const panelTop = scrollEl.getBoundingClientRect().top;
    const panelH = scrollEl.clientHeight;
    let activeIndex = -1;

    items.forEach((item, i) => {
      const rect = item.getBoundingClientRect();
      if (rect.top + rect.height / 2 - panelTop < panelH * 0.65) {
        activeIndex = i;
      }
    });

    if (activeIndex >= 0) {
      items.forEach((item, i) => item.classList.toggle('active', i <= activeIndex));
      progressEl.style.height = pctForStep(activeIndex) + '%';
    }
  }, {
    passive: true
  });

  const toggleButtons = document.querySelectorAll('#timelineScroll .toggle-btn');
  if( !toggleButtons.length ) return;
  toggleButtons.forEach(button => {
    button.addEventListener('click', function() {
      const mainParent = this.closest('#timelineScroll');
      const container = this.closest('.toggle-container');
      if (!mainParent || !container) return;

      const tabTarget = this.getAttribute('data-tab');

      // 1. Switch active class on buttons to trigger the blue style change
      container.querySelectorAll('.toggle-btn').forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      // 2. Switch the class on the main parent wrapper
      mainParent.classList.remove('active-pixelcrayons', 'active-typical');
      mainParent.classList.add(`active-${tabTarget}`);
    });
  });


})();

const weHelpSection = document.querySelector(".we-help-part");

if (weHelpSection) {

  const accordionItems = weHelpSection.querySelectorAll(".accordion-item");

  accordionItems.forEach(item => {
    const header = item.querySelector(".accordion-header");

    header.addEventListener("click", () => {

      if (item.classList.contains("active")) return;

      accordionItems.forEach(acc => {
        acc.classList.remove("active");
      });

      item.classList.add("active");
    });
  });

}

(function() {
const seoPathSection = document.querySelector(".seo-path-section");
if (!seoPathSection) return;

const seoPathTimeline   = seoPathSection.querySelector(".seo-path-timeline");
const seoPathItems      = seoPathTimeline.querySelectorAll(".timeline-item");
const seoPathProgress   = seoPathTimeline.querySelector(".timeline-progress");

function updateSeoPathTimeline() {
  console.log("Updating SEO Path Timeline...");
  const triggerPoint = window.innerHeight * 0.45;

  let activeIndex = 0;

  seoPathItems.forEach((item, index) => {
    const itemRect = item.getBoundingClientRect();

    if (itemRect.top <= triggerPoint) {
      activeIndex = index;
    }
  });

  seoPathItems.forEach((item, index) => {
    item.classList.toggle("active", index <= activeIndex);
  });

  const activeItem = seoPathItems[activeIndex];
  const activeNumber = activeItem.querySelector(".timeline-number");

  const timelineLineRect =
    seoPathTimeline.querySelector(".timeline-line").getBoundingClientRect();

  const activeNumberRect = activeNumber.getBoundingClientRect();

  const progressHeight =
    activeNumberRect.top +
    activeNumberRect.height / 2 -
    timelineLineRect.top;

  seoPathProgress.style.height = `${progressHeight}px`;
}

updateSeoPathTimeline();

window.addEventListener("scroll", updateSeoPathTimeline, {
  passive: true,
});

window.addEventListener("resize", updateSeoPathTimeline);
})();


document.addEventListener('DOMContentLoaded', function() {
if( document.getElementById('elm-dual-accordian') ){
  document.querySelectorAll('.agency-brand-tabs').forEach((section) => {

    section.querySelectorAll('.accordion').forEach((accordion) => {

      const items = accordion.querySelectorAll('.accordion-item');

      items.forEach((item) => {

        const btn = item.querySelector('.accordion-header');

        if (!btn) return;

        btn.addEventListener('click', () => {

          const isActive = item.classList.contains('active');

          items.forEach((el) => {
            el.classList.remove('active');
          });

          if (!isActive) {
            item.classList.add('active');
          }
        });
      });

    });

  });
}
});

// const weHelpSection = document.getElementById("the-situation");
// if (weHelpSection) {
//   const accordionItems = weHelpSection.querySelectorAll(".accordion-item");
//   accordionItems.forEach(item => {
//     const header = item.querySelector(".accordion-header");

//     header.addEventListener("click", () => {
//       if (item.classList.contains("active")) return;

//       accordionItems.forEach(acc => {
//         acc.classList.remove("active");
//       });

//       item.classList.add("active");
//     });
//   });
// }


// build slider
    (function() {
      function initFintechSlider() {
        const section = document.querySelector('.fintech-section');
        if (!section) return;

        const slider = section.querySelector('.cards');
        const prevBtn = section.querySelector('.glider-prev');
        const nextBtn = section.querySelector('.glider-next');
        const dots = section.querySelector('.glider-dots');

        if (!slider) return;

        // Destroy existing instance if re-initializing
        if (slider._glider) {
          slider._glider.destroy();
        }

        const glider = new Glider(slider, {
          slidesToShow: 1,
          slidesToScroll: 1,
          "dots": true,
          draggable: true,
          scrollLock: true,
          scrollLockDelay: 150,
          resizeLock: true,
          arrows: {
            prev: prevBtn || null,
            next: nextBtn || null
          },
          dots: dots,
        });

        // AUTOPLAY
        let autoplayInterval;
        const autoplayDelay = 3000; // 3 seconds

        function startAutoplay() {
          stopAutoplay();

          autoplayInterval = setInterval(() => {
            const totalSlides = slider.querySelectorAll('.slide-card').length;
            const currentIndex = glider.slide || 0;
            const nextIndex = (currentIndex + 1) % totalSlides;

            glider.scrollItem(nextIndex);
          }, autoplayDelay);
        }

        function stopAutoplay() {
          clearInterval(autoplayInterval);
        }

        // Pause on hover/drag, resume on leave
        slider.addEventListener('mouseenter', stopAutoplay);
        slider.addEventListener('mouseleave', startAutoplay);
        slider.addEventListener('glider-drag-start', stopAutoplay);
        slider.addEventListener('glider-drag-end', startAutoplay);

        // Arrow click — reset autoplay timer
        [prevBtn, nextBtn].forEach(btn => {
          if (btn) {
            btn.addEventListener('click', () => {
              stopAutoplay();
              startAutoplay();
            });
          }
        });

        // Start autoplay
        startAutoplay();
      }

      if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFintechSlider);
      } else {
        initFintechSlider();
      }

    })();

(function() {
  const buttons = document.querySelectorAll('.production-tech button');
  const logoLists = document.querySelectorAll('.logos-part ul');

  function showTab(key) {
  logoLists.forEach(ul => {
    ul.classList.toggle('active', ul.getAttribute('data-tab') === key);
  });
  }

  buttons.forEach(btn => {
  btn.addEventListener('click', () => {
    buttons.forEach(b => b.setAttribute('data-active', 'false'));
    btn.setAttribute('data-active', 'true');

    const key = btn.textContent.trim()
      .replace(/&amp;/g, '&')
      .replace(/\u00a0/g, ' ');
    showTab(key);
  });
  });

  // Load first tab by default
  if (buttons.length > 0) {
  buttons[0].setAttribute('data-active', 'true');
  const defaultKey = buttons[0].textContent.trim()
    .replace(/&amp;/g, '&')
    .replace(/\u00a0/g, ' ');
    showTab(defaultKey);
  }
})();