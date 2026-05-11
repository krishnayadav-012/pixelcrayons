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



 const section = document.querySelector(".fintech-delivery");

        if (section) {

            const items = section.querySelectorAll(".ai-item");

            let current = 0;
            let duration = 4000;
            let timer;

            function startProgress(index) {

                clearTimeout(timer);

                items.forEach(item => {

                    item.classList.remove("active");

                    let bar = item.querySelector(".progress");

                    if (bar) {
                        bar.style.transition = "none";
                        bar.style.width = "0%";
                    }

                });

                let activeItem = items[index];

                if (!activeItem) return;

                activeItem.classList.add("active");

                let progress = activeItem.querySelector(".progress");

                setTimeout(() => {
                    if (progress) {
                        progress.style.transition = `width ${duration}ms linear`;
                        progress.style.width = "100%";
                    }
                }, 50);

                timer = setTimeout(() => {

                    current++;

                    if (current >= items.length) {
                        current = 0;
                    }

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


