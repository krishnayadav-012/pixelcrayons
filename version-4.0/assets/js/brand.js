// 
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


// progress line section fintech delivery



//  const section = document.querySelector(".fintech-delivery");

//         if (section) {

//             const items = section.querySelectorAll(".ai-item");

//             let current = 0;
//             let duration = 4000;
//             let timer;

//             function startProgress(index) {

//                 clearTimeout(timer);

//                 items.forEach(item => {

//                     item.classList.remove("active");

//                     let bar = item.querySelector(".progress");

//                     if (bar) {
//                         bar.style.transition = "none";
//                         bar.style.width = "0%";
//                     }

//                 });

//                 let activeItem = items[index];

//                 if (!activeItem) return;

//                 activeItem.classList.add("active");

//                 let progress = activeItem.querySelector(".progress");

//                 setTimeout(() => {
//                     if (progress) {
//                         progress.style.transition = `width ${duration}ms linear`;
//                         progress.style.width = "100%";
//                     }
//                 }, 50);

//                 timer = setTimeout(() => {

//                     current++;

//                     if (current >= items.length) {
//                         current = 0;
//                     }

//                     startProgress(current);

//                 }, duration);

//             }

//             items.forEach((item, index) => {

//                 item.addEventListener("click", () => {

//                     current = index;
//                     startProgress(current);

//                 });

//             });

//             startProgress(0);
//         }




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

    // feedback section```````````````````````````````````````````````````````
    if (document.getElementById("box-grids")) {
      const glider = new Glider(document.querySelector('.testimonial-cards.glider'), {
        slidesToShow: 1,
        draggable: true,
        dots: '#dots',
        scrollLock: true,
        centerMode: true,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            duration: 0.5
          }
        }]
      });

      const avatars = [
        'assets/images/home-images/client-menu-1.png',
        'assets/images/home-images/client-menu-2.png',
        'assets/images/home-images/client-menu-3.png',
        'assets/images/home-images/client-menu-4.png',
        'assets/images/home-images/client-menu-5.png',
      ];
      const dots = document.querySelectorAll('.glider-dot');
      dots.forEach((dot, index) => {
        if (avatars[index]) {
          dot.style.backgroundImage = `url(${avatars[index]})`;
          dot.innerText = ''; // Clear the default dot text
        }
      });
    }


    // review-card

    const cards = document.querySelectorAll(".review-card");
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


    const popup = document.getElementById("contentPopup");
    const iframe = document.getElementById("testimonoial-video");
    const closeBtn = document.querySelector(".close");

    // Use querySelectorAll to target EVERY play button
    const playBtns = document.querySelectorAll(".play-btn");

    playBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        const videoSrc = btn.dataset.video; // get THIS card's video URL
        popup.style.display = "block";
        iframe.src = videoSrc; // load the correct video
      });
    });

    // CLOSE POPUP + STOP
    closeBtn.addEventListener("click", () => {
      popup.style.display = "none";
      iframe.src = ""; // stop video
    });
















(function () {
  function initAiList(list) {
    const items = list.querySelectorAll(".ai-item");
    if (!items.length) return;
 
    const duration = parseInt(list.dataset.duration, 10) || 4000;
    let current = 0;
    let timer = null;
 
    function startProgress(index) {
      clearTimeout(timer);
 
      items.forEach((item) => {
        item.classList.remove("active");
        const bar = item.querySelector(".progress");
        if (bar) {
          bar.style.transition = "none";
          bar.style.width = "0%";
        }
      });
 
      const activeItem = items[index];
      if (!activeItem) return;
 
      activeItem.classList.add("active");
 
      const progress = activeItem.querySelector(".progress");
 
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          if (progress) {
            progress.style.transition = `width ${duration}ms linear`;
            progress.style.width = "100%";
          }
        });
      });
 
      timer = setTimeout(() => {
        current = (index + 1) % items.length;
        startProgress(current);
      }, duration);
    }
 
    items.forEach((item, index) => {
      item.addEventListener("click", () => {
        current = index;
        startProgress(current);
      });
    });
 
    startProgress(0);
  }
 
  function init() {
    document.querySelectorAll(".ai-list").forEach(initAiList);
  }
 
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();