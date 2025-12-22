
<div class="top-banner">

<div class="sky">
        <!-- Replace 'santas.gif' with your own image URL -->
        <img class="santa-sleigh" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/191814/santas.gif" alt="Santa and Reindeer">
    </div>
   <div id="rainContainer" class="rain-container">
   <div class="lights">
    <div class="red blink" style="left:1%;"></div>
    <div class="green blink" style="left:5%;"></div>
    <div class="blue blink" style="left:10%;"></div>
    <div class="red blink"style="left:15%;"></div>
    <div class="green blink" style="left:20%;"></div>
    <div class="blue blink" style="left:25%;"></div>
    <div class="red blink"style="left:30%"></div>
    <div class="green blink"style="left:35%;"></div>
    <div class="blue blink"style="left:40%;"></div>
    <div class="red blink"style="left:45%;"></div>
    <div class="green blink"style="left:50%;"></div>
    <div class="blue blink"style="left:55%;"></div>
    <div class="red blink"style="left:60%;"></div>
    <div class="green blink"style="left:65%;"></div>
    <div class="blue blink"style="left:70%;"></div>
    <div class="red blink"style="left:75%;"></div>
    <div class="green blink"style="left:80%;"></div>
    <div class="blue blink"style="left:85%;"></div>
    <div class="red blink"style="left:90%;"></div>
    <div class="green blink"style="left:9%;"></div>
    <div class="blue blink"style="left:99%;"></div>
   </div>
  <!-- Snowfall layers -->
  <div class="snow-container">
</div>
</div>
  <div class="banner-inner">
    <div class="banner-text">
      <div class="headline">
        <span class="star">★</span>
        <span class="headline-text">Open For Business All Holiday Season</span>
        <span class="star">★</span>
      </div>
      <div class="subtext">Your invisible growth partner is here for you.</div>
    </div>

    <button class="banner-close" aria-label="Close Banner">
      ✕
    </button>
  </div>
</div>
<script>

  document.addEventListener('click', function(e) {
    if (e.target.closest('.banner-close')) {
        document.querySelector('.top-banner').classList.add('off');
        document.querySelector('.header-two').classList.add('top-hide');
    }
});

  document.addEventListener('DOMContentLoaded', () => {
    const rainContainer = document.getElementById('rainContainer');
    // The icons provided by the user
    const icons = ['❄', '✦', '✧']; 

    function createRainIcon() {
        const iconElement = document.createElement('div');
        iconElement.classList.add('rain-icon');
        
        // Select a random icon from the list
        iconElement.textContent = icons[Math.floor(Math.random() * icons.length)]; 

        // Randomize starting horizontal position (0% to 100% width)
        iconElement.style.left = Math.random() * 100 + 'vw'; 
        
        // Randomize animation duration for a varied rain speed
        // Duration range: 1.5s to 3.5s (similar to your fast times)
        iconElement.style.animationDuration = Math.random() * 2 + 1.5 + 's'; 

        // Add a slight random delay so they don't all start at once
        iconElement.style.animationDelay = Math.random() * 0.5 + 's'; 
        
        rainContainer.appendChild(iconElement);

        // Remove the element after it finishes its animation (when it hits the bottom)
        iconElement.addEventListener('animationend', () => {
            iconElement.remove();
        });
    }

    // Continuously generate new rain icons quickly (e.g., every 50ms)
    // This makes the effect feel heavy and continuous.
    setInterval(createRainIcon, 50); 
});
</script>



<header class="header-two">
  <div class="container">
    <div class="wrapper">
      <div class="header-item-left">
        <a href="https://www.pixelcrayons.com/staging/" class="brand">
          <div class="large">
            <img class="light" loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/pxl-logo-tm-light.svg" alt="Pixelcrayons" width="400" height="88">
            <img class="dark" loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/pxl-logo-tm-dark.svg" alt="Pixelcrayons" width="400" height="88">
          </div>
          <div class="small">
            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/logo-small.svg" alt="Pixelcrayons" width="80" height="80">
          </div>
        </a>
        <div class="hamberger-menu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </div>
      <div class="header-item-right">
        <nav class="menu mob-nav" id="menu">
          <ul>
                        <li class="menu-item-has-children">
              <a href="https://www.pixelcrayons.com/staging/solutions/white-label" class="mst-link">Solutions</a> <span class="arrow-btn"></span>
              <div class="menu-mega small-menu solution-menu">
                <div class="dis-flex tab-menu">
                  <div id="mnu-hire" class="dis-flex tab-contents">
                    <div class="right-tabs">
                      <div class="tab-content">
                        <div class="dis-flex menu-column">
                          <div class="flex-1">
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/solutions/white-label/scale-client-delivery"> <span class="title">
                            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/1.svg" class="menuicon" alt="menuicon">
                            Scale Client Delivery </span></a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/solutions/white-label/fill-capability-gaps"> <span class="title">
                            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/2.svg" class="menuicon" alt="menuicon">
                            Capability Gaps </span></a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/solutions/white-label/overflow-support"> <span class="title">
                            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/3.svg" class="menuicon" alt="menuicon">
                            White-Label Overflow support</span></a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/solutions/white-label/launch-new-service-lines"> <span class="title">
                            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/4.svg" class="menuicon" alt="menuicon">
                            Launch New Service Lines</span></a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/solutions/white-label/consolidate-vendors"> <span class="title">
                            <img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/5.svg" class="menuicon" alt="menuicon">
                            Consolidate Vendors </span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a class="mst-link" href="https://www.pixelcrayons.com/staging/services/agencies/white-label">Services</a> 
              <span class="arrow-btn"></span>
              <div class="menu-mega service-menu">
                <div class="container">
                  <div class="dis-flex tab-menu">
                    <div id="menu-serv" class="dis-flex tab-contents">
                      <div class="left-tabs">
                        <ul class="tab-nav">
                          <li class="tab-link is-active">
                            <a href="https://www.pixelcrayons.com/staging/services/software-engineering">Software Engineering</a>
                          </li>
                          <li class="tab-link ">
                            <a href="https://www.pixelcrayons.com/staging/services/agencies/white-label-digital-marketing">Digital Marketing</a>
                          </li>
                          <li class="tab-link ">
                            <a href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/ui-ux-design">Design</a>
                          </li>
                          <!--<li class="tab-link ">
                            <a href="https://www.pixelcrayons.com/staging/services/digital-transformation/data-analytics">Analytics</a>
                            </li>-->
                        </ul>
                      </div>
                      <div class="right-tabs">
                        <div class="tab-content is-active ">
                          <div class="four-column">
                            <div class="tab-title"><a href="https://www.pixelcrayons.com/staging/services/software-engineering"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/services/cat-01.svg" class="menuicon" alt="menuicon"><span class="title">Software Engineering</span>Innovative, future-proof software solutions
                              </a><span class="ser-arrow-btn"></span>
                            </div>
                            <div class="dis-flex menu-column sub-service">
                              <div class="flex-3">
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/agencies/white-label-web-development">Web Development</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/website-development-company">Website Development</a>
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/frontend">Frontend Development</a>
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/backend">Backend Development</a>
                                <a href="https://www.pixelcrayons.com/staging/cms-development/wordpress-development">Wordpress Development</a>                                
                                <a href="https://www.pixelcrayons.com/staging/hire/dedicated-full-stack-developers">Full Stack Development</a>
                                </div>
                                <a class="b-title mt-10" href="javascript:void(0);">SaaS &amp; Product Development</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/product-design-and-prototyping">Product Design &amp; Prototype</a>
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/mvp-development">MVP Development</a>
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/saas-product-development">SaaS Development</a>
                                </div>
                                


                                <a class="b-title mt-10" href="javascript:void(0);">CMS &amp; Website Platforms</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/cms">CMS Development</a>
                                <a href="https://www.pixelcrayons.com/staging/cms-development/wordpress-development">Wordpress Development</a>
                                </div>

                              </div>
                              <div class="flex-3">                                
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/ecommerce/development">eCommerce Development</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/ecommerce-development/shopify-development">Shopify Development</a>
                                <a href="https://www.pixelcrayons.com/staging/ecommerce-development/woocommerce-development">WooCommerce Development</a>
                                <a href="https://www.pixelcrayons.com/staging/services/ecommerce/magento-development">Magento Development</a>
                                <a href="https://www.pixelcrayons.com/staging/services/ecommerce/bigcommerce-development">BigCommerce Development</a>
                                </div>

                                <a class="b-title mt-10" href="https://www.pixelcrayons.com/staging/services/agencies/white-label-app-development">Mobile App Development</a>
                                <div class="serv-submu">
                                  <a href="https://www.pixelcrayons.com/staging/services/software-engineering/mobile-app-development/android">Android App Development</a>
                                  <a href="https://www.pixelcrayons.com/staging/services/software-engineering/mobile-app-development/ios-app-development">iOS App Development</a>
                                  <a href="https://www.pixelcrayons.com/staging/services/software-engineering/mobile-app-development/flutter-app">Cross-Platform App Development</a>
                                </div>
                                <a class="b-title mt-10" href="javascript:void(0);">Technical Infrastructure</a>
                                <div class="serv-submu">
                                 <a href="https://www.pixelcrayons.com/staging/services/devops">Devops Infrastructure</a>
                                 <a href="https://www.pixelcrayons.com/staging/services/digital-transformation/cloud-computing-services">Cloud Computing</a>
                               
                                 <a href="https://www.pixelcrayons.com/staging/services/qa-testing">QA &amp; Testing</a>
                                </div>
                              </div>
                              <div class="flex-3">
                                <a class="b-title" href="javascript:void(0);">Frontend Technologies</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/javascript-development/reactjs-development">React Development</a>
                                <a href="https://www.pixelcrayons.com/staging/frontend-development/angularjs ">Angular Development</a>
                                </div>
                                <a class="b-title mt-10" href="javascript:void(0);">Backend Technologies</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/javascript-development/nodejs-development">Nodejs Development</a>
                                <a href="https://www.pixelcrayons.com/staging/web-development/python-development">Python Development</a>
                              </div>
                               

                               

                               <a class="b-title mt-10" href="javascript:void(0);">Migrations &amp; Modernization</a>
                               <div class="serv-submu">
                               <a href="https://www.pixelcrayons.com/staging/services/modernization">Legacy Modernization</a>                               
                                </div>
                               <a class="b-title mt-10" href="https://www.pixelcrayons.com/staging/services/ai/workflow-automation">Workflow Automation</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-content ">
                          <div class="four-column">
                            <div class="tab-title"><a href="https://www.pixelcrayons.com/staging/services/agencies/white-label-digital-marketing"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/services/cat-02.svg" class="menuicon" alt="menuicon"><span class="title">Digital Marketing</span>Data-driven strategies for measurable growth
                              </a><span class="ser-arrow-btn"></span>
                            </div>
                            <div class="dis-flex menu-column sub-service">
                              <div class="flex-3">
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/agencies/white-label-seo">
                                SEO Services</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/seo/local">Local SEO</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/seo/enterprise">Enterprise SEO</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/seo/youtube">Youtube SEO</a>
                                </div>
                                <a class="b-title mt-10" href="https://www.pixelcrayons.com/staging/services/digital-marketing/social-media/management">Social Media Services</a>                                
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/social-media/ecommerce">eCommerce Social Media</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/social-media/youtube-marketing">Youtube Marketing</a>
                                </div>  

                                

                                <a class="b-title mt-10" href="javascript:void(0);">Branding &amp; GEO</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/personal-branding">Personal Branding</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/generative-engine-optimization">Generative Engine Optimization</a>
                                </div>

                                
                              </div>

                              <div class="flex-3">
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc">
                                PPC Services</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc/google-ads">Google Ads</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc/facebook-ads">Meta Ads</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc/linkedin-ads">Linkedin Ads</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc/bing-ads">Bing Ads</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ppc/enterprise">Enterprise PPC</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/performance-marketing-and-analytics">Performance Marketing</a>
                                </div>
                                <a class="b-title mt-10" href="https://www.pixelcrayons.com/staging/services/digital-marketing/content-marketing">Content Marketing Services</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/content-marketing/consulting-strategy">Content Strategy</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/content-writing">Content Writing</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/email">Email Marketing</a>
                                </div>

                                
                              </div>

                              <div class="flex-3">                                
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce">eCommerce Marketing</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce/seo">eCommerce SEO</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce/amazon">Amazon Marketing</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce/amazon/seo">Amazon SEO</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce/ppc">Ecommerce PPC</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/ecommerce/customer-journey">Customer Journey Optimization</a>
                                </div>
                                <a class="b-title mt-10" href="javascript:void(0);">Conversion &amp; Experience Optimization</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/conversion-rate-optimization">Conversion Optimization</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/website-optimization">Website Speed Optimization</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/lead-generation">Lead Generation</a>
                                <a href="https://www.pixelcrayons.com/staging/services/digital-marketing/demand-generation">Demand Generation</a>
                                </div>
                                <!-- 
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/growth-marketing">Growth Marketing</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/revenue-marketing">Revenue Marketing</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/marketing-automation">Marketing Automation</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/b2b">B2B Digital Marketing</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/b2c">B2C Digital Marketing</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/services/digital-marketing/consulting-strategy">Digital Marketing Consulting</a> 
                                -->
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="tab-content ">
                          <div class="four-column">
                            <div class="tab-title"><a href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/ui-ux-design"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/services/cat-03.svg" class="menuicon" alt="menuicon"><span class="title">Design</span>Creative, user-focused visual experiences
                              </a><span class="ser-arrow-btn"></span>
                            </div>
                            <div class="dis-flex menu-column sub-service">
                              <div class="flex-3">
                              <a class="b-title" href="https://www.pixelcrayons.com/staging/services/software-engineering/web-development/ui-ux-design">Website Design</a>
                                <a class="b-title" href="https://www.pixelcrayons.com/staging/agencies/design-to-code">Design to code</a>                                                                
                                <a class="b-title mt-10" href="javascript:void(0);">Frontend Frameworks</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-react">Figma to React</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-vuejs">Figma to Vue.js</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-nuxt">Figma to Nuxt.js</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-astro">Figma to Astro</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-react">PSD to React</a>
                                </div>

                                

                                <a class="b-title mt-10" href="javascript:void(0);">Low-Code/No-Code</a>
                                <div class="serv-submu">                                  
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-webflow">PSD to Webflow</a><a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-webflow">Figma to Webflow </a>
                                </div>
                              </div>
                              <div class="flex-3">
                                <a class="b-title" href="javascript:void(0);">CMS Platforms</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/figma-to-wordpress-conversion-services">Figma to WordPress</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-shopify">Figma to Shopify</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-magento">Figma to Magento</a>                                

                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-squarespace">Figma to Squarespace </a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-drupal"> Figma to Drupal</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-wordpress">PSD to WordPress </a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-magento"> PSD to Magento</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-squarespace">PSD to Squarespace </a>
                                </div>
                                <a class="b-title mt-10" href="javascript:void(0);">Mobile / Cross-Platform</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-flutter">Figma to Flutter</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/psd-to-flutter">PSD to Flutter </a>  
                                </div>  
                               
                              </div>
                              <div class="flex-3">
                                
                                 <a class="b-title mt-10" href="javascript:void(0);">Backend / Template Engines</a>
                                <div class="serv-submu">
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-laravel-blade-conversion">Figma to Laravel Blade</a>
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-email-template">Figma to Email Template</a>  
                                <a href="https://www.pixelcrayons.com/staging/agencies/design-to-code/figma-to-html">Figma to HTML</a>
                                </div>

                                
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- <div class="tab-content ">
                          <div class="four-column">
                            <div class="tab-title"><a href="https://www.pixelcrayons.com/staging/services/digital-transformation/data-analytics"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/services/cat-04.svg" class="menuicon" alt="menuicon"><span class="title">Analytics</span>Innovative, future-proof software solutions
                              </a><span class="ser-arrow-btn"></span>
                            </div>
                            <div class="dis-flex menu-column sub-service">
                              <div class="flex-3">
                                <a href="https://www.pixelcrayons.com/staging/services/digital-transformation/data-analytics">Data Analytics</a>
                              </div>
                            </div>
                          </div>
                          </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="javascript:void(0);" class="mst-link">Industries</a> <span class="arrow-btn"></span>
              <div class="menu-mega small-menu industries-menu">
                <div class="dis-flex tab-menu">
                  <div id="mnu-tech" class="dis-flex tab-contents">
                    <div class="right-tabs">
                      <div class="tab-content">
                        <div class="dis-flex menu-column">
                          <div class="flex-1">
                            <!-- <a class="top-head" href="https://www.pixelcrayons.com/staging/ecommerce">
                              <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/industries/1.svg" class="menuicon" alt="menuicon">eCommerce</span>
                              Future-proof software solutions
                              </a>
                              <a class="top-head" href="https://www.pixelcrayons.com/staging/">
                              <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/industries/2.svg" class="menuicon" alt="menuicon">Saas</span>
                              Future-proof software solutions
                              </a>
                              <a class="top-head" href="https://www.pixelcrayons.com/staging/">
                              <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/industries/3.svg" class="menuicon" alt="menuicon">Real-Estate</span>
                              Future-proof software solutions
                              </a>-->
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/industries/healthcare">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/industries/4.svg" class="menuicon" alt="menuicon">Healthcare </span>
                            White-Label Growth for Health.
                            </a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/industries/fintech ">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/industries/5.svg" class="menuicon" alt="menuicon">Financial Services</span>
                           Secure Growth. Predictable Returns.
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="javascript:void(0);" class="mst-link">Work</a> <span class="arrow-btn"></span>
              <div class="menu-mega small-menu">
                <div class="dis-flex tab-menu">
                  <div class="dis-flex tab-contents">
                    <div class="right-tabs">
                      <div class="tab-content">
                        <div class="dis-flex menu-column mp-10px">
                          <div class="flex-1">
                            <a class="top-head" href="https://www.pixelcrayons.com/case-study/">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/cs.svg" class="menuicon" alt="menuicon">Case Studies</span>Proven success stories</a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/testimonials">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/port.svg" class="menuicon" alt="menuicon">Clients &amp; Testimonials</span>Trust built together</a>                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="javascript:void(0);" class="mst-link">About</a> <span class="arrow-btn"></span>
              <div class="menu-mega small-menu about-menu">
                <div class="dis-flex tab-menu">
                  <div class="dis-flex tab-contents">
                    <div class="right-tabs">
                      <div class="tab-content">
                        <div class="dis-flex menu-column mp-10px">
                          <div class="flex-1">
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/company/about">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/why.svg" class="menuicon" alt="menuicon">Why Choose PixelCrayons</span>Your advantage partner</a>
                            <a class="top-head" href="https://www.pixelcrayons.com/blog/">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/story.svg" class="menuicon" alt="menuicon">Our Blog</span>Insights that matter</a>   
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/in-media">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/6.svg" class="menuicon" alt="menuicon">In media</span>Featured, trusted, recognized</a>                                                         
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/company/our-team">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/team.svg" class="menuicon" alt="menuicon">Our Team</span>Brains behind brilliance</a>
                            <a class="top-head" href="https://www.pixelcrayons.com/staging/careers">
                            <span class="title"><img loading="lazy" src="https://www.pixelcrayons.com/staging/wp-content/themes/pixelcrayons/dev-img/menu-v5/soultions/cr.svg" class="menuicon" alt="menuicon">Career</span>Build future here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="cta-wrap small-reso">
              <div class="btn-container">
                <a href="https://www.pixelcrayons.com/staging/contact-us" class="cta-button white">Contact Us</a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="cta-wrap large-reso">
          <div class="btn-container">
            <a href="https://www.pixelcrayons.com/staging/contact-us" class="cta-button white">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
