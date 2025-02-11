//New Menu Script Added From Here 17-02-23//

function isMobileDevice(){
  var check = false;
  (function(a){
      if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
}

function vmRestDefault(){
  let allArrow = document.querySelectorAll(".arrow-btn");
  if( allArrow ){
      [].forEach.call(allArrow, function(el) {
          el.classList.remove("rot");
      });    
  }
  
  let allMM = document.querySelectorAll(".menu-mega");
  if( allMM ){
      [].forEach.call(allMM, function(el) {
          el.classList.remove("m-active");
      });    
  }
}

function vmRestHireDefault(){
  let allArrow = document.querySelectorAll(".hr-arrow-btn");
  if( allArrow ){
      [].forEach.call(allArrow, function(el) {
          el.classList.remove("rot");
      });
  }
  
  let allMM = document.querySelectorAll(".hr-menu-mega");
  if( allMM ){
      [].forEach.call(allMM, function(el){
          el.classList.remove("m-active");
      });
  }
}

function vmRestSubDefault(){
  let allArrow = document.querySelectorAll(".list-item .arrow-btn");
  if( allArrow ){
      [].forEach.call(allArrow, function(el) {
          el.classList.remove("rot");
      });    
  }

  let allsevenfive = document.querySelectorAll(".width-75");
  if( allsevenfive ){
      [].forEach.call(allsevenfive, function(el) {
          el.style.display = "none";
      });    
  }    
}

(function(){
  if( isMobileDevice() ){
      let deskOnly = document.querySelectorAll(".od-row");
      deskOnly.forEach(function(elm){
          elm.innerHTML = "";
      });
      document.body.classList.add('vc-is-mobile');    
      document.addEventListener('click', event => {
          const hMenu = document.getElementsByClassName("hamberger-menu")[0];
          if(event.target.classList.contains('arrow-btn')){
              if( event.target.nextElementSibling ){
                  if( event.target.classList.contains('rot') ){
                      event.target.classList.remove("rot");
                      event.target.nextElementSibling.classList.remove("m-active");
                  }else{
                      vmRestDefault();
                      event.target.classList.add("rot");
                      event.target.nextElementSibling.classList.add("m-active");    
                  }                    
              }else{
                  let inArrow = event.target.dataset.tget;
                  if( (inArrow !== "") && document.getElementById(inArrow) ){
                      if( event.target.classList.contains('rot') ){
                          event.target.classList.remove("rot");
                          document.getElementById(inArrow).style.display = "none";
                      }else{
                          vmRestSubDefault();
                          event.target.classList.add("rot");
                          document.getElementById(inArrow).style.display = "block";
                          //hMenu.style.zIndex = "0";
                      }
                  }                    
              }
          }

          if(event.target.classList.contains('hr-arrow-btn')){
              let hrLinkRow = event.target.parentElement.nextElementSibling;
              if( hrLinkRow ){
                  if( event.target.classList.contains('rot') ){
                      event.target.classList.remove("rot");
                      hrLinkRow.classList.remove("m-active");
                  }else{
                      vmRestHireDefault();
                      event.target.classList.add("rot");
                      hrLinkRow.classList.add("m-active");    
                  }
              }                
          }

          if(event.target.classList.contains('mback')){
              vmRestSubDefault();                
              //hMenu.style.zIndex = "999";
          }
      });
  }else{
      let tabs = document.getElementsByClassName("text-column");
      for (j = 0; j < tabs.length; j++) {
      tabs[j].addEventListener("mouseover", clickTab);
      }

      function clickTab(e) {
      var tabID = e.currentTarget.id;
      var inSection = e.currentTarget.getAttribute("data-section");
      var pageID = tabID.replace("a", "b");
      var pages = document.getElementById(inSection).getElementsByClassName("header-menu");
      var intabs = document.getElementById(inSection).getElementsByClassName("text-column");
      for (i = 0; i < pages.length; i++) {
      intabs[i].classList.remove("active");
      pages[i].classList.remove("active");
      }
      e.currentTarget.classList.add("active");
      let pActive = "mrow mrow-" + e.currentTarget.getAttribute("data-mrow");
      let masCol = document.getElementsByClassName(pActive).item(0);
      if (masCol) {
      masCol.classList.add("active");
      }
      var currentPage = document.querySelector("#" + pageID);
      currentPage.classList.add("active");
      }
  }
})();

//New Menu Script Ended Here//

// header
if(document.querySelector(".header-two")) {
  var lastScrollTop = 0;    
  window.addEventListener("scroll", function () {
      window.pageYOffset > 10 ? 
      document.querySelector(".header-two").classList.add("header-bg") : 
      document.querySelector(".header-two").classList.remove("header-bg");
      let scrollST = window.pageYOffset || document.documentElement.scrollTop;
  
      if( scrollST > lastScrollTop ){
          document.querySelector(".header-two").classList.remove("sc-up");
          document.querySelector(".header-two").classList.add("sc-down");        
      }else{
          document.querySelector(".header-two").classList.remove("sc-down");
          document.querySelector(".header-two").classList.add("sc-up");
      }
      lastScrollTop = scrollST <= 0 ? 0 : scrollST; // For Mobile or negative scrolling
  });
  
  
  }



// header
window.addEventListener("scroll", function () {
  window.pageYOffset > 10 ? document.querySelector(".header-two").classList.add("header-bg") : document.querySelector(".header-two").classList.remove("header-bg");
});
// menu
var tabs = document.getElementsByClassName("text-column");
for (j = 0; j < tabs.length; j++) {
  tabs[j].addEventListener("mouseover", clickTab);
}
function clickTab(e) {
  var tabID = e.currentTarget.id;
  var inSection = e.currentTarget.getAttribute("data-section");
  var pageID = tabID.replace("a", "b");
  var pages = document.getElementById(inSection).getElementsByClassName("header-menu");
  var intabs = document.getElementById(inSection).getElementsByClassName("text-column");
  for (i = 0; i < pages.length; i++) {
      intabs[i].classList.remove("active");
      pages[i].classList.remove("active");
  }
  e.currentTarget.classList.add("active");
  let pActive = "mrow mrow-" + e.currentTarget.getAttribute("data-mrow");
  let masCol = document.getElementsByClassName(pActive).item(0);
  if (masCol) {
      masCol.classList.add("active");
  }
  var currentPage = document.querySelector("#" + pageID);
  currentPage.classList.add("active");
}
document.addEventListener("DOMContentLoaded", function () {
  var faqContainers = document.getElementsByClassName("hamberger-menu");
  var faqToggle = document.getElementsByClassName("mob-nav")[0];
  for (var i = 0; i < faqContainers.length; i++) {
      faqContainers[i].addEventListener("click", function () {
          faqToggle.classList.toggle("active");
      });
  }
});


function submenu() {
  var x = document.getElementById("dropdownmwrap");
  var y = document.getElementById("dropdownmwrap1");
  if (x.style.display === "block") {
      x.style.display = "none";
      y.style.display = "block";
  } else {
      x.style.display = "block";
      y.style.display = "none";
  }
}
function submenuback() {
  var x = document.getElementById("dropdownmwrap");
  var y = document.getElementById("dropdownmwrap1");
  x.style.display = "none";
  y.style.display = "block";
}

function innermenu(e, id){
var sm = document.getElementById(id);
e.classList.toggle('active');
if (sm.style.display === "block") {
  sm.style.display = "none";
} else {
  sm.style.display = "block";
}
}
document.querySelector('.hamberger-menu').onclick = function (e) {
var nav = document.querySelector('.hamberger-menu');
nav.classList.toggle('open-close');
e.preventDefault();
}

// glider case-studies
var cases =  document.getElementById("case");
  if( cases ){

window.addEventListener("load", function () {
  document.querySelector(".case-studies.glider").addEventListener("glider-slide-visible", function (event) {
    var glider = Glider(this);
  });
  document.querySelector(".case-studies.glider").addEventListener("glider-slide-hidden", function (event) {});
  document.querySelector(".case-studies.glider").addEventListener("glider-refresh", function (event) {});
  document.querySelector(".case-studies.glider").addEventListener("glider-loaded", function (event) {});
  window._ = new Glider(document.querySelector(".case-studies.glider"), {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    scrollLock: false,
    // rewind: true,
    dots: "false",
    dragDistance: false,
    arrows: {
      prev: '#case .glider-prev',
      next: '#case .glider-next'
    },
    responsive: [
      { breakpoint: 767, settings: { slidesToShow: 2, slidesToScroll: 2, itemWidth: 150, duration: 0.25 } },
      { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 3, itemWidth: 150, duration: 0.25 } },
    ],
  });
});

  };

// glider industry-case-sec
var industry =  document.getElementById("industry");
  if( industry ){

  window.addEventListener("load", function () {
  document.querySelector(".industry-case-sec.glider").addEventListener("glider-slide-visible", function (event) {
    var glider2 = Glider(this);
  });
  document.querySelector(".industry-case-sec.glider").addEventListener("glider-slide-hidden", function (event) {});
  document.querySelector(".industry-case-sec.glider").addEventListener("glider-refresh", function (event) {});
  document.querySelector(".industry-case-sec.glider").addEventListener("glider-loaded", function (event) {});
  window._ = new Glider(document.querySelector(".industry-case-sec.glider"), {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    scrollLock: false,
    rewind: false,
    dots: "false",
    dragDistance: false,
    arrows: {
      prev: '#industry .glider-prev',
      next: '#industry .glider-next'
    },
  });
});

};

// glider Testimonials

var testim =  document.getElementById("testimonial");
  if( testim ){

  new Glider(document.querySelector('.glider.testimonial'), {
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    dots: '.dots',
    arrows: {
      prev: '#testimonial .glider-prev',
      next: '#testimonial .glider-next'
    }
  });

};

var testim1 =  document.getElementById("testimonial");
  if( testim1 ){

document.querySelector('.tap1').onclick = function (e) {
	var nav = document.querySelector('.slide-item1');
	nav.classList.add('play-video');
	e.preventDefault();
}
  };
  var testim2 =  document.getElementById("testimonial");
  if( testim2 ){

document.querySelector('.tap2').onclick = function (e) {
	var nav = document.querySelector('.slide-item2');
	nav.classList.add('play-video');
	e.preventDefault();
}
  };

// tab links
var tabs1 =  document.getElementById("tabs1");
  if( tabs1 ){
    (function() {
      'use strict';
      var tabs = function(options) {
      var el = document.querySelector(options.el);
      var tabNavigationLinks = el.querySelectorAll(options.tabNavigationLinks);
      var tabContentContainers = el.querySelectorAll(options.tabContentContainers);
      var activeIndex = 0;
      var initCalled = false;
      var init = function() {
          if (!initCalled) {
          initCalled = true;
          el.classList.remove('no-js');
          for (var i = 0; i < tabNavigationLinks.length; i++) {
            var link = tabNavigationLinks[i];
            handleClick(link, i);
          }
        }
      };
      var handleClick = function(link, index) {
        link.addEventListener('click', function(e) {
        e.preventDefault();
        goToTab(index);
        });
      };
      var goToTab = function(index) {
        if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
        tabNavigationLinks[activeIndex].classList.remove('is-active');
        tabNavigationLinks[index].classList.add('is-active');
        tabContentContainers[activeIndex].classList.remove('is-active');
        tabContentContainers[index].classList.add('is-active');
        activeIndex = index;
        }
      };
      return {
        init: init,
        goToTab: goToTab
      };
    
    };
    window.tabs = tabs;
  })();
  var myTabs1 = tabs({
    el: '#tabs1',
    tabNavigationLinks: '.tab-link',
    tabContentContainers: '.tab-content'
  });
  myTabs1.init();
}


// guideTopic
var hasUg =  document.getElementById("guideTopic");
if( hasUg ){
window.addEventListener('scroll', function(){
  var items = document.querySelectorAll("#guideTopic .tab-content");
  items.forEach(function (item) {
    if( document.documentElement.scrollTop >= (item.getBoundingClientRect().top + window.scrollY - 100)  ){
      let id = item.getAttribute("id");
      let qli = document.querySelectorAll("#guideTopic .tab-nav a");
      qli.forEach(function (qitem) {
        qitem.classList.remove("is-active");
      });
      document.querySelector('#guideTopic .tab-nav a[href="#' + id + '"]').classList.add("is-active");
    }
  });
});
}

// toggle

var faqItem =  document.getElementById("forFaq");
if( faqItem ){

  var faqItem = document.getElementsByClassName('faq-accordion-item-outer');
  var faqHD = document.getElementsByClassName('faq-accordion-toggle');
  for (i = 0; i < faqHD.length; i++) {
    faqHD[i].addEventListener('click', toggleFaqItem, false);
  }
  function toggleFaqItem() {
    var itemClass = this.parentNode.className;
    for (i = 0; i < faqItem.length; i++) {
      faqItem[i].className = 'faq-accordion-item-outer';
    }
    if (itemClass == 'faq-accordion-item-outer') {
      this.parentNode.className = 'faq-accordion-item-outer active';
    }
  }

}

// tabs accordian
  (function () {
    "use strict";
    var tabs = function (options) {
        var el = document.querySelector(options.el);
        var tabNavigationLinks = el.querySelectorAll(options.tabNavigationLinks);
        var tabContentContainers = el.querySelectorAll(options.tabContentContainers);
        var activeIndex = 0;
        var initCalled = false;
        var init = function () {
            if (!initCalled) {
                initCalled = true;
                el.classList.remove("no-js");
                for (var i = 0; i < tabNavigationLinks.length; i++) {
                    var link = tabNavigationLinks[i];
                    handleClick(link, i);
                }
            }
        };
        var handleClick = function (link, index) {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                goToTab(index);
            });
        };
        var goToTab = function (index) {
            if (index !== activeIndex && index >= 0 && index <= tabNavigationLinks.length) {
                tabNavigationLinks[activeIndex].classList.remove("is-active");
                tabNavigationLinks[index].classList.add("is-active");
                tabContentContainers[activeIndex].classList.remove("is-active");
                tabContentContainers[index].classList.add("is-active");
                activeIndex = index;
            }
        };
        return { init: init, goToTab: goToTab };
    };
    window.tabs = tabs;
})();
var mTabOne = document.getElementById("tabs1");
if (mTabOne) {
    var myTabs1 = tabs({ el: "#tabs1", tabNavigationLinks: ".tab-link", tabContentContainers: ".tab-content" });
    myTabs1.init();
}


let opFreeTrial = document.querySelector('.open-free-trial');
if( opFreeTrial !== null ){
    opFreeTrial.onclick = function (e) {
        var popbtn2 = document.querySelector('.free-trail-pop-up');
        var popbdy2 = document.querySelector('body');
        popbtn2.classList.toggle('open-pop');
        popbdy2.classList.add('body-pop');
        e.preventDefault();
    }    
}




