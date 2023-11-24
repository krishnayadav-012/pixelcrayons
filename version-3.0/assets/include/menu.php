<?php 
  function vc_is_mobile() {
      if ( empty( $_SERVER['HTTP_USER_AGENT'] ) ) {
          $is_mobile = false;
      } elseif ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile' ) !== false // Many mobile devices (all iPhone, iPad, etc.)
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Android' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Silk/' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Kindle' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'BlackBerry' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mini' ) !== false
          || strpos( $_SERVER['HTTP_USER_AGENT'], 'Opera Mobi' ) !== false ) {
              $is_mobile = true;
      } else {
          $is_mobile = false;
      }
      return $is_mobile;
  }
  $is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'v2wp' ) !== false) )  ?  true : false;
  if( $is_staging ){
  $site_url   = '';
  }else{
  $site_url   = '';
  }
  
  $tpl_url    = '';
  ?>
<?php //if( !vc_is_mobile() ) : ?>
<header class="header-two" data-nosnippet>
  <div class="container">
    <div class="wrapper">
      <div class="header-item-left">
        <a href="#" class="brand">
          <div class="large">
            <picture class="for-white-logo">
              <img loading="lazy" src="assets/images/hire/white-logo.svg" alt="Pixelcrayons" width="308" height="64">    
            </picture>
            <picture class="for-dark-logo">
              <img loading="lazy" src="assets/images/hire/dark-blue-logo.svg" alt="Pixelcrayons" width="308" height="64">        
            </picture>
          </div>
          <div class="small">
            <img loading="lazy" src="assets/images/logo-small.svg" alt="Pixelcrayons" 
              class="dark-theme-logo sm" width="53" height="42">
          </div>
        </a>
      </div>
      <!-- Navbar Section -->
      <?php if( !isset( $_GET['l'] ) ) : ?>
      <div class="header-item-center">
        <nav class="menu" id="menu">
          <ul>
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>custom-software-development-services">Services</a>
              <div class="menu-mega">
                <div class="dis-flex" id="active_Current_Tabs1">
                  <div class="width-25 left-list">
                    <div class="list-item">
                      <a href="<?php echo $site_url; ?>custom-software-development-services" class="text-column" id="a1" data-section="active_Current_Tabs1"
                        data-mrow="2">Software Engineering</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development" class="text-column" id="a2" data-section="active_Current_Tabs1"
                        data-mrow="3">Application Development</a>
                      <a href="<?php echo $site_url; ?>ecommerce-development" class="text-column" id="a3" data-section="active_Current_Tabs1"
                        data-mrow="3">eCommerce</a>
                      <a href="<?php echo $site_url; ?>digital-marketing-services" class="text-column" id="a4" data-section="active_Current_Tabs1"
                        data-mrow="4">Digital Marketing</a>
                      <a href="<?php echo $site_url; ?>dedicated-development-teams" class="text-column active" id="a5"
                        data-section="active_Current_Tabs1" data-mrow="1">Software Outsourcing</a>
                    </div>
                  </div>
                  <!-- 1 -->
                  <div class="width-35 header-menu" id="b1">
                    <div class="dis-flex" id="active_Current_Tabs01">
                      <div class="width-100 middle-list">
                        <h6>What is Software Engineering?</h6>
                        <a href="<?php echo $site_url; ?>technology-consulting-services" class="text-column">Software Consulting</a>
                        <a href="<?php echo $site_url; ?>digital-transformation" class="text-column">Digital Transformation</a>
                        <a href="<?php echo $site_url; ?>saas-product-development" class="text-column">Software Product Development</a>
                        <a href="<?php echo $site_url; ?>devops-solutions" class="text-column">DevOps</a>
                        <a href="<?php echo $site_url; ?>robotic-process-automation-services" class="text-column">Robotic Process Automation</a>
                        <a href="<?php echo $site_url; ?>cms-development" class="text-column">CMS Development</a>
                        <a href="<?php echo $site_url; ?>testing-and-qa-service" class="text-column">Testing & QA</a>
                        <a href="<?php echo $site_url; ?>application-maintenance-support" class="text-column">Maintenance & Migration</a>
                      </div>
                    </div>
                  </div>
                  <!-- 2 -->
                  <div class="width-35 header-menu" id="b2">
                    <div class="dis-flex" id="active_Current_Tabs3">
                      <div class="width-100 middle-list">
                        <h6>What is Application Development</h6>
                        <a href="<?php echo $site_url; ?>web-development" class="text-column">Web Development</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development" class="text-column">Mobile App Development</a>
                        <a href="<?php echo $site_url; ?>frontend" class="text-column">Frontend Development</a>
                        <a href="<?php echo $site_url; ?>web-design" class="text-column">Web Design</a>
                      </div>
                    </div>
                  </div>
                  <!-- 4 -->
                  <!-- 3 -->
                  <div class="width-35 header-menu" id="b3">
                    <div class="dis-flex" id="active_Current_Tabs3">
                      <div class="width-60 middle-list">
                        <h5>Services & Solutions</h5>
                        <a href="<?php echo $site_url; ?>ecommerce-consulting-services" class="text-column">eCeomerce Consulting</a>
                        <a href="<?php echo $site_url; ?>ecommerce-implementation-services" class="text-column">eCommerce Implementation</a>
                        <a href="<?php echo $site_url; ?>digital-consulting-services" class="text-column">Digital Consulting</a>
                        <a href="<?php echo $site_url; ?>ecommerce-web-design" class="text-column">eCommerce Web Design</a>
                        <a href="<?php echo $site_url; ?>b2c-ecommerce-development-services" class="text-column">B2C eCommerce</a>
                        <a href="<?php echo $site_url; ?>b2b-ecommerce-development-services" class="text-column">B2B eCommerce</a>
                        <a href="<?php echo $site_url; ?>b2b-b2c-portal-development" class="text-column">Web Portal</a>
                      </div>
                      <div class="width-40 middle-list">
                      <h5>Expertise</h5>
                        <a href="<?php echo $site_url; ?>food-ecommerce" class="text-column">Food</a>
                        <a href="<?php echo $site_url; ?>fashion-ecommerce" class="text-column">Fashion</a>
                        <a href="<?php echo $site_url; ?>healthcare-ecommerce" class="text-column">Healthcare</a>
                        <a href="<?php echo $site_url; ?>household-goods-ecommerce" class="text-column">Household Goods</a>
                        <a href="<?php echo $site_url; ?>automotive-ecommerce" class="text-column">Automotive</a>
                      </div>
                    </div>
                  </div>
                  <!-- 4 -->
                  <div class="width-35 header-menu" id="b4">
                    <div class="dis-flex" id="active_Current_Tabs3">
                      <div class="width-100 middle-list">
                        <h6>What is Digital Markting?</h6>
                        <a href="<?php echo $site_url; ?>seo-services" class="text-column">Search Engine Optimization</a>
                        <a href="<?php echo $site_url; ?>social-media-marketing-services" class="text-column">Social Media Marketing</a>
                        <a href="<?php echo $site_url; ?>content-marketing-services" class="text-column">Content Marketing</a>
                        <a href="<?php echo $site_url; ?>ppc-management-services" class="text-column">PPC</a>
                        <a href="<?php echo $site_url; ?>hire-digital-online-marketing-experts" class="text-column">Hire Digital Marketing Experts</a>
                        <a href="<?php echo $site_url; ?>site-speed-optimization" class="text-column">Site Speed Optimization</a>
                      </div>
                    </div>
                  </div>
                  <!-- 5 -->
                  <div class="width-35 header-menu active" id="b5">
                    <div class="dis-flex" id="active_Current_Tabs02">
                      <div class="width-100 middle-list">
                        <h6>What is Smart Teams?</h6>
                        <a href="<?php echo $site_url; ?>dedicated-development-teams" class="text-column">Dedicated Development Teams</a>
                        <a href="<?php echo $site_url; ?>staff-augmentation-services" class="text-column">Staff Augmentation Services</a>
                        <a href="<?php echo $site_url; ?>offshore-software-development-services" class="text-column">Offshore Software Development</a>
                        <a href="<?php echo $site_url; ?>hire-developer-programmer-india" class="text-column">Hire Indian Developers</a>
                      </div>
                    </div>
                  </div>
                  <div class="width-40  right-list">
                    <div class="last-list">
                      <h6>Services</h6>
                      <p>
                        Get full cycle development services as per
                        latest technologies, trends and tools. When
                        you choose us as your development partner,
                        rest assured of optimum quality, timely delivery and complete
                        peace-of-mind
                      </p>
                      <a href="<?php echo $site_url; ?>custom-software-development-services">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Remote Teams -->
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>dedicated-development-teams">Remote Teams</a>
              <div class="menu-mega">
                <div class="dis-flex" id="active_Current_Tabs2">
                  <!-- hire tech -->
                  <div class="width-60 left-list remote-menu active" id="b0">
                    <div class="dis-flex " id="active_Current_Tabs0">
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>hire-web-developers" class="decor-none"><strong>Backend</strong></a>
                        <a href="<?php echo $site_url; ?>hire-python-developers-in-india" title="Python">Python</a>
                        <a href="<?php echo $site_url; ?>hire-asp-net-developers-in-india" title=".NET">.NET</a>
                        <a href="<?php echo $site_url; ?>hire-php-developers" title="PHP">PHP</a>
                        <a href="<?php echo $site_url; ?>hire-Java-developers" title="Java">Java</a>
                        <a href="<?php echo $site_url; ?>hire-node-Js-developers" title="Node">Node</a>
                        <br />
                        <a href="<?php echo $site_url; ?>hire-frontend-developer" class="decor-none"><strong>Frontend</strong></a>
                        <a href="<?php echo $site_url; ?>hire-angular-js-developers" title="Angular">Angular</a>
                        <a href="<?php echo $site_url; ?>hire-vuejs-developer" title="Vue.js">Vue.JS</a>
                        <a href="<?php echo $site_url; ?>hire-react-developers" title="React">React</a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>hire-mobile-app-developers" class="decor-none"><strong>Mobile</strong></a>
                        <a href="<?php echo $site_url; ?>hire-iphone-app-developer" title="iOS">iOS</a>
                        <a href="<?php echo $site_url; ?>hire-android-developers" title="Android">Android</a>
                        <a href="<?php echo $site_url; ?>hire-kotlin-developers" title="Kotlin">Kotlin</a>
                        <a href="<?php echo $site_url; ?>hire-flutter-developer" title="Flutter">Flutter</a>
                        <a href="<?php echo $site_url; ?>hire-react-native-developers" title="React Native">React Native</a>
                        <br />
                        <a href="<?php echo $site_url; ?>hire-dedicated-full-stack-developers" class="decor-none"><strong>Full Stack</strong></a>
                        <a href="<?php echo $site_url; ?>hire-laravel-developers" title="Laravel">Laravel</a>
                        <a href="<?php echo $site_url; ?>hire-mean-stack-developers" title="MEAN">MEAN</a>
                        <a href="<?php echo $site_url; ?>hire-mern-developers" title="MERN">MERN</a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>cms-development" class="decor-none"><strong>CMS</strong></a>
                        <a href="<?php echo $site_url; ?>hire-wordpress-developers" title="Python">Wordpress</a>
                        <a href="<?php echo $site_url; ?>hire-drupal-developers" title="Drupal">Drupal</a>
                        <br />
                        <a href="<?php echo $site_url; ?>hire-digital-online-marketing-experts" class="decor-none"><strong>Digital Marketing</strong></a>
                        <a href="<?php echo $site_url; ?>hire-seo-expert" title="SEO">SEO</a>
                        <a href="<?php echo $site_url; ?>hire-ppc-expert" title="PPC">PPC</a>
                        <a href="<?php echo $site_url; ?>hire-smo-expert" title="SMO">SMO</a>
                        <a href="<?php echo $site_url; ?>hire-content-writer" title="Content Writer ">Content Writer </a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>hire-blockchain-developers" class="decor-none"><strong>Blockchain</strong></a>
                        <a href="<?php echo $site_url; ?>hire-ethereum-developers" title="Ethereum">Ethereum</a>
                        <a href="<?php echo $site_url; ?>hire-hyperledger-developers" title="Hyperledger">Hyperledger</a>
                        <br />
                        <a href="<?php echo $site_url; ?>hire-ecommerce-developer" class="decor-none"><strong>eCommerce</strong></a>
                        <a href="<?php echo $site_url; ?>hire-magento-developers" title="Magento">Magento</a>
                        <a href="<?php echo $site_url; ?>hire-wooCommerce-developer" title="WooCommerce">WooCommerce</a>
                        <a href="<?php echo $site_url; ?>hire-shopify-developer" title="Shopify">Shopify</a>
                      </div>
                    </div>
                  </div>
                  <div class="width-40  right-list">
                    <div class="last-list">
                      <h6>Remote Teams</h6>
                      <p>
                        Get opportunity to work with India's top 2% developers & coders who have
                        excellent development skills in a wide array of software technologies.
                      </p>
                      <a href="<?php echo $site_url; ?>hire-developer-programmer-india">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Technology -->
            <li class="menu-item-has-children">
              <a href="javascript:void(0);">Technologies</a>
              <div class="menu-mega">
                <div class="dis-flex" id="active_Current_Tabs3">
                  <!-- hire tech -->
                  <div class="width-60 left-list remote-menu active" id="b110">
                    <div class="dis-flex " id="active_Current_Tabs001">
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>mobile-app-development" class="decor-none"><strong>Mobility</strong></a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/ios-app-development" title="ios">iOS</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/android-development" title="Android">Android</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/xamarin-mobile-app-development" title="Xamarin">Xamarin</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/augmented-reality-development" title="AR / VR">AR / VR</a>
                        <a href="<?php echo $site_url; ?>javascript-development/react-native-development" title="React-Native">React-Native</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/flutter-app-development-company-india" title="Flutter"> Flutter</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development/iot-development" title="IOT">Internet of Things</a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>frontend" class="decor-none"><strong>Frontend</strong></a>
                        <a href="<?php echo $site_url; ?>javascript-development/angularjs-development" title="Angular">Angular</a>
                        <a href="<?php echo $site_url; ?>javascript-development/reactjs-development" title="ReactJS">ReactJS</a>
                        <br/>
                        <a href="<?php echo $site_url; ?>blockchain-development" class="tech-bl decor-none"><strong>Blockchain</strong></a>
                        <a href="<?php echo $site_url; ?>hire-hyperledger-developers" title="Hyperledger">Hyperledger</a>
                        <a href="<?php echo $site_url; ?>machine-learning-services-and-solutions" title="ML"> Machine Learning (ML)</a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>web-development" class="decor-none"><strong>Backend</strong></a>
                        <a href="<?php echo $site_url; ?>web-development/php-web-development" title="PHP">PHP</a>
                        <a href="<?php echo $site_url; ?>web-development/asp-dot-net-development" title=".NET">.NET</a>
                        <a href="<?php echo $site_url; ?>web-development/java-web-development" title="Java">Java</a>
                        <a href="<?php echo $site_url; ?>web-development/python-development" title="Python">Python</a>
                        <a href="<?php echo $site_url; ?>javascript-development/mean-stack-development" title="MEAN Stack">MEAN Stack</a>
                        <a href="<?php echo $site_url; ?>mern-stack-development" title="MERN Stack">MERN Stack</a>
                        <a href="<?php echo $site_url; ?>javascript-development/nodejs-development" title="Node JS">Node JS</a>
                      </div>
                      <div class="width-25 ">
                        <a href="<?php echo $site_url; ?>ecommerce-development" class="decor-none"><strong>eCommerce & CMS</strong></a>
                        <a href="<?php echo $site_url; ?>ecommerce-development/magento-development" title="Magento">Magento</a>
                        <a href="<?php echo $site_url; ?>ecommerce-development/shopify-development" title="Shopify">Shopify</a>
                        <a href="<?php echo $site_url; ?>cms-development/drupal-development" title="Drupal">Drupal</a>
                        <a href="<?php echo $site_url; ?>cms-development/wordpress-development" title="WordPress">WordPress</a>
                      </div>
                    </div>
                  </div>
                  <div class="width-40  right-list">
                    <div class="last-list">
                      <h6>Technologies</h6>
                      <p>
                        We are well-versed in all major technologies and platforms and keep abreast with innovative technology trends.
                      </p>
                      <a href="<?php echo $site_url; ?>contact-us">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Industries -->
            <li class="menu-item-has-children">
              <a href="#">Industries</a>
              <div class="menu-mega">
                <div class="dis-flex">
                  <!-- hire tech -->
                  <div class="width-60 left-list list-view active">
                    <h6>Industries</h6>
                    <div class="dis-flex ">
                      <a href="<?php echo $site_url; ?>banking-financial-software-development-services">Banking & Financial Services</a>
                      <a href="<?php echo $site_url; ?>logistics-transportation-software-development-services">Logistics & Transportations</a>
                      <a href="<?php echo $site_url; ?>isv-software-development-services">Software & IT</a>
                      <a href="<?php echo $site_url; ?>education-elearning-software-development-services">Education & Elearning</a>
                      <a href="<?php echo $site_url; ?>media-software-development-services">Media & Entertainment</a>
                      <a href="<?php echo $site_url; ?>travel-tourism-software-development-services">Travel & Tourism</a>
                      <a href="<?php echo $site_url; ?>healthcare-software-development-services">Healthcare</a>
                      <a href="<?php echo $site_url; ?>retail-ecommerce-software-development-services">Retail and Wholesale</a>
                    </div>
                  </div>
                  <div class="width-40  right-list">
                    <div class="last-list">
                      <h6>Industries</h6>
                      <p>
                        PixelCrayons provides advanced and powerful software solutions that can
                        be customized as per specific business
                        needs 
                      </p>
                      <a href="<?php echo $site_url; ?>contact-us">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Company -->
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>about">Company</a>
              <div class="menu-mega">
                <div class="dis-flex">
                  <!-- hire tech -->
                  <div class="width-60 left-list company-menu list-view  active">
                    <div class="dis-flex ">
                      <a href="<?php echo $site_url; ?>company/about">
                        <strong>
                        About
                        </strong>
                        <p>Award-winning Digital Consulting &
                          Engineering Firm
                        </p>
                      </a>
                      <a href="<?php echo $site_url; ?>company/our-team">
                        <strong>Our Team
                        </strong>
                        <p>650+ staff members with 4+ yrs exp</p>
                      </a>
                      <a href="<?php echo $site_url; ?>testimonials">
                        <strong>Our Clientele
                        </strong>
                        <p>6800+ Happy clients in 38+ countries</p>
                      </a>
                      <a href="<?php echo $site_url; ?>partnership-programme">
                        <strong>Partnership Programme
                        </strong>
                        <p>Improve RoI & propel business growth.</p>
                      </a>
                      <a href="<?php echo $site_url; ?>careers">
                        <strong>Careers
                        </strong>
                        <p>Ensure Bright Career at PixelCrayons</p>
                      </a>
                      <a href="https://www.pixelcrayons.com/case-study/">
                        <strong>Portfolio
                        </strong>
                        <p>13800+ successful projects in 38+ countries</p>
                      </a>
                      <a href="https://www.pixelcrayons.com/blog/">
                        <strong>Blog
                        </strong>
                        <p>Get acquainted with latest news, blogs and trends.</p>
                      </a>
                      <a href="<?php echo $site_url; ?>testimonials">
                        <strong>Testimonials
                        </strong>
                        <p>Read genuine reviews of digital agencies, ISVs & enterprises.</p>
                      </a>
                    </div>
                  </div>
                  <div class="width-40  right-list">
                    <div class="last-list">
                      <h6>Company</h6>
                      <p>
                        We are India's best custom software development and technology
                        consulting company. We offer full cycle software development and
                        dedicated team on hire basis.
                      </p>
                      <a href="<?php echo $site_url; ?>company/about">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="contact-nav"><a href="<?php echo $site_url; ?>contact-us">Contact Us </a></li>
          </ul>
        </nav>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<?php //endif; ?>
<?php //if( vc_is_mobile() ) : ?>
<header class="header-mobile header-two <?php echo ( vc_is_mobile() ) ? ' vc-mob-menu' : ''; ?>">
  <div class="container">
    <div class="header-top">
      <a href="#" class="mobile-logo">
        <picture>
          <img loading="lazy" src="assets/images/hire/logo.svg" alt="Pixelcrayons" width="150" height="35">  
        </picture>
      </a>
      <?php if( !isset( $_GET['l'] ) ) : ?>
      <div class="hamberger-menu">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
      <?php endif; ?>
    </div>
    <?php if( !isset( $_GET['l'] ) ) : ?>
    <nav class="mob-nav">
      <div class="menu-list first" id="dropdownmwrap1">
        <picture>
          <source type="image/webp" srcset="assets/images/hire/logo.webp">
          <source type="image/png" srcset="assets/images/hire/logo.png">
          <img loading="lazy" src="assets/images/hire/logo.png" alt="Pixelcrayons" width="150" height="35">
        </picture>
        <ul>
          <li><a href="#">Services</a>
            <span class="arrow-btn" onclick="submenu()"></span>
          </li>
          <li>
            <a href="#">Remote Teams</a> <span class="arrow-btn" onclick="innermenu(this, 'main0')"></span>
            <div class="first-inner hire-title" id="main0">
              <a href="#">Backend</a> <span class="arrow-btn" onclick="innermenu(this, 'main01')"></span>
              <div class="hire-inner" id="main01">
                <a href="#" title="Python">Python</a>
                <a href="#" title=".NET">.NET</a>
                <a href="#" title="PHP">PHP</a>
                <a href="#" title="Java">Java</a>
                <a href="#" title="Node">Node</a>
              </div>
              <div>
                <a href="#">Frontend</a>
                <span class="arrow-btn" onclick="innermenu(this, 'main02')"></span>
                <div class="hire-inner" id="main02">
                  <a href="#" title="Node">Angular</a>
                  <a href="#" title="Node">Vue.JS</a>
                  <a href="#" title="Node">React</a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">Mobile</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main05')"></span>
                <div class="hire-inner" id="main05">
                  <a href="#" title="iOS">iOS</a>
                  <a href="#" title="Android">Android</a>
                  <a href="#" title="Kotlin">Kotlin</a>
                  <a href="#" title="Flutter">Flutter</a>
                  <a href="#" title="React Native">React Native</a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">Full Stack</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main03')"></span>
                <div class="hire-inner" id="main03">
                  <a href="#" title="Laravel">Laravel</a>
                  <a href="#" title="MEAN">MEAN</a>
                  <a href="#" title="MERN">MERN</a>
                </div>
              </div>
              <div>
                <a href="#">CMS</a> <span class="arrow-btn" onclick="innermenu(this, 'main06')"></span>
                <div class="hire-inner" id="main06">
                  <a href="#" title="Python">Wordpress</a>
                  <a href="#" title="Drupal">Drupal</a>
                </div>
              </div>
              <div>
                <a href="#">Digital Marketing</a>
                <span class="arrow-btn" onclick="innermenu(this, 'main04')"></span>
                <div class="hire-inner" id="main04">
                  <a href="#" title="SEO">SEO</a>
                  <a href="#" title="PPC">PPC</a>
                  <a href="#" title="SMO">SMO</a>
                  <a href="#" title="Content Writer ">Content Writer </a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">Blockchain</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main07')"></span>
                <div class="hire-inner" id="main07">
                  <a href="#" title="Ethereum">Ethereum</a>
                  <a href="#" title="Hyperledger">Hyperledger</a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">ECommerce</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main08')"></span>
                <div class="hire-inner" id="main08">
                  <a href="#" title="Magento">Magento</a>
                  <a href="#" title="WooCommerce">WooCommerce</a>
                  <a href="#" title="Shopify">Shopify</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#">Technologies</a> <span class="arrow-btn" onclick="innermenu(this, 'main00')"></span>
            <div class="first-inner hire-title" id="main00">
              <a href="#">Mobility</a> <span class="arrow-btn" onclick="innermenu(this, 'main001')"></span>
              <div class="hire-inner" id="main001">
                <a href="https://www.pixelcrayons.com/mobile-app-development/ios-app-development"
                  title="ios">iOS</a>
                <a href="https://www.pixelcrayons.com/mobile-app-development/android-development"
                  title="Android">Android</a>
                <a href="https://www.pixelcrayons.com/mobile-app-development/xamarin-mobile-app-development"
                  title="Xamarin">Xamarin</a>
                <a href="https://www.pixelcrayons.com/mobile-app-development/augmented-reality-development"
                  title="AR / VR">AR / VR</a>
                <a href="https://www.pixelcrayons.com/javascript-development/react-native-development"
                  title="React-Native">React-Native</a>
                <a href="https://www.pixelcrayons.com/mobile-app-development/flutter-app-development-company-india"
                  title="Flutter"> Flutter</a>
              </div>
              <div>
                <a href="#">Frontend</a>
                <span class="arrow-btn" onclick="innermenu(this, 'main002')"></span>
                <div class="hire-inner" id="main002">
                  <a href="https://www.pixelcrayons.com/javascript-development/angularjs-development"
                    title="Angular">Angular</a>
                  <a href="https://www.pixelcrayons.com/javascript-development/reactjs-development"
                    title="ReactJS">ReactJS</a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">Blockchain</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main005')"></span>
                <div class="hire-inner" id="main005">
                  <a href="https://www.pixelcrayons.com/hire-hyperledger-developers" title="Hyperledger">Hyperledger</a>
                </div>
              </div>
              <div>
                <a href="#" class="margin-t-40">Backend</a> <span class="arrow-btn"
                  onclick="innermenu(this, 'main003')"></span>
                <div class="hire-inner" id="main003">
                  <a href="https://www.pixelcrayons.com/web-development/php-web-development" title="PHP">PHP</a>
                  <a href="https://www.pixelcrayons.com/web-development/asp-dot-net-development" title=".NET">.NET</a>
                  <a href="https://www.pixelcrayons.com/web-development/java-web-development" title="Java">Java</a>
                  <a href="https://www.pixelcrayons.com/web-development/python-development" title="Python">Python</a>
                  <a href="https://www.pixelcrayons.com/javascript-development/mean-stack-development" title="MEAN Stack">MEAN Stack</a>
                  <a href="https://www.pixelcrayons.com/mern-stack-development" title="MERN Stack">MERN Stack</a>
                  <a href="https://www.pixelcrayons.com/javascript-development/nodejs-development" title="Node JS">Node JS</a>
                </div>
              </div>
              <div>
                <a href="#">eCommerce & CMS</a> <span class="arrow-btn" onclick="innermenu(this, 'main006')"></span>
                <div class="hire-inner" id="main006">
                  <a href="https://www.pixelcrayons.com/ecommerce-development/magento-development" title="Magento">Magento</a>
                  <a href="https://www.pixelcrayons.com/ecommerce-development/shopify-development" title="Shopify">Shopify</a>
                  <a href="https://www.pixelcrayons.com/cms-development/drupal-development" title="Drupal">Drupal</a>
                  <a href="https://www.pixelcrayons.com/cms-development/wordpress-development" title="WordPress">WordPress</a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#">Industries</a> <span class="arrow-btn" onclick="innermenu(this, 'inner5')"></span>
            <div class="inner-list" id="inner5">
              <a href="#">Banking & Financial Services</a>
              <a href="#">Logistics & Transportations</a>
              <a href="#">Software & IT</a>
              <a href="#">Education & Elearning</a>
              <a href="#">Media & Entertainment</a>
              <a href="#">Travel & Tourism</a>
              <a href="#">Healthcare</a>
              <a href="#">Retail and Wholesale</a>
            </div>
          </li>
          <li>
            <a href="<?php echo $site_url; ?>about">Company</a> <span class="arrow-btn"
              onclick="innermenu(this,'main2')"></span>
            <div class="first-inner" id="main2">
              <a href="#">
                <strong>
                About
                </strong>
                <p>Award-winning Digital Consulting &
                  Engineering Firm
                </p>
              </a>
              <a href="#">
                <strong>Our Team
                </strong>
                <p>450+ staff members with 4+ yrs exp.</p>
              </a>
              <a href="#">
                <strong>Our Clientele
                </strong>
                <p>6800+ Happy clients in 38+
                  countries.
                </p>
              </a>
              <a href="#">
                <strong>Partnership Programme
                </strong>
                <p>Improve RoI & propel business growth.</p>
              </a>
              <a href="#">
                <strong>Careers
                </strong>
                <p>Ensure Bright Career at PixelCrayons</p>
              </a>
              <a href="#">
                <strong>Portfolio
                </strong>
                <p>13800+ successful projects in 38+
                  countries.
                </p>
              </a>
              <a href="#">
                <strong>Blog
                </strong>
                <p>Get acquainted with latest news, blogs and trends.</p>
              </a>
              <a href="#">
                <strong>Testimonials
                </strong>
                <p>Read genuine reviews of digital agencies, ISVs & enterprises.</p>
              </a>
            </div>
          </li>
          <li><a href="<?php echo $site_url; ?>contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="menu-list second" id="dropdownmwrap">
        <picture>
          <source type="image/webp" srcset="assets/images/hire/logo.webp">
          <source type="image/png" srcset="assets/images/hire/logo.png">
          <img loading="lazy" src="assets/images/hire/logo.png" alt="Pixelcrayons" width="150" height="35">
        </picture>
        <span class="back-btn" onclick="submenuback()">Back</span>
        <ul>
          <li>
            <a href="<?php echo $site_url; ?>custom-software-development-services">Software Engineering</a> <span class="arrow-btn parrow" onclick="innermenu(this, 'inner1')"></span>
            <div class="inner-list" id="inner1">
                        <a href="<?php echo $site_url; ?>technology-consulting-services" class="text-column">Software Consulting</a>
                        <a href="<?php echo $site_url; ?>digital-transformation" class="text-column">Digital Transformation</a>
                        <a href="<?php echo $site_url; ?>saas-product-development" class="text-column">Software Product Development</a>
                        <a href="<?php echo $site_url; ?>devops-solutions" class="text-column">DevOps</a>
                        <a href="<?php echo $site_url; ?>robotic-process-automation-services" class="text-column">Robotic Process Automation</a>
                        <a href="<?php echo $site_url; ?>testing-and-qa-service" class="text-column">Testing & QA</a>
                        <a href="<?php echo $site_url; ?>application-maintenance-support" class="text-column">Maintenance & Migration</a>
            </div>
          </li>
          <li>
            <a href="<?php echo $site_url; ?>mobile-app-development">Application Development</a> <span class="arrow-btn parrow" onclick="innermenu(this, 'inner2')"></span>
            <div class="inner-list" id="inner2">
            <a href="<?php echo $site_url; ?>web-development" class="text-column">Web Development</a>
            <a href="<?php echo $site_url; ?>cms-development" class="text-column">CMS Development</a>
                        <a href="<?php echo $site_url; ?>mobile-app-development" class="text-column">Mobile App Development</a>
                        <a href="<?php echo $site_url; ?>frontend" class="text-column">Frontend Development</a>
                        <a href="<?php echo $site_url; ?>web-design" class="text-column">Web Design</a>
            </div>
          </li>

          <li>
            <a href="<?php echo $site_url; ?>ecommerce-development">eCommerce</a> <span class="arrow-btn parrow"
              onclick="innermenu(this, 'inner3')"></span>
            <div class="inner-list" id="inner3">
            <h5>Services & Solutions</h5>
                        <a href="<?php echo $site_url; ?>ecommerce-consulting-services" class="text-column">eCeomerce Consulting</a>
                        <a href="<?php echo $site_url; ?>ecommerce-implementation-services" class="text-column">eCommerce Implementation</a>
                        <a href="<?php echo $site_url; ?>digital-consulting-services" class="text-column">Digital Consulting</a>
                        <a href="<?php echo $site_url; ?>ecommerce-web-design" class="text-column">eCommerce Web Design</a>
                        <a href="<?php echo $site_url; ?>b2c-ecommerce-development-services" class="text-column">B2C eCommerce</a>
                        <a href="<?php echo $site_url; ?>b2b-ecommerce-development-services" class="text-column">B2B eCommerce</a>
                        <a href="<?php echo $site_url; ?>b2b-b2c-portal-development" class="text-column">Web Portal</a>
                        <h5>Expertise</h5>
                        <a href="<?php echo $site_url; ?>food-ecommerce" class="text-column">Food</a>
                        <a href="<?php echo $site_url; ?>fashion-ecommerce" class="text-column">Fashion</a>
                        <a href="<?php echo $site_url; ?>healthcare-ecommerce" class="text-column">Healthcare</a>
                        <a href="<?php echo $site_url; ?>household-goods-ecommerce" class="text-column">Household Goods</a>
                        <a href="<?php echo $site_url; ?>automotive-ecommerce" class="text-column">Automotive</a>
            </div>
          </li>

          <li>
            <a href="<?php echo $site_url; ?>digital-marketing-services">Digital Marketing</a> <span class="arrow-btn parrow"
              onclick="innermenu(this, 'inner4')"></span>
            <div class="inner-list" id="inner4">
              <a href="<?php echo $site_url; ?>seo-services" class="text-column">Search Engine Optimization</a>
              <a href="<?php echo $site_url; ?>social-media-marketing-services" class="text-column">Social Media Marketing</a>
              <a href="<?php echo $site_url; ?>content-marketing-services" class="text-column">Content Marketing</a>
              <a href="<?php echo $site_url; ?>ppc-management-services" class="text-column">PPC</a>
              <a href="<?php echo $site_url; ?>hire-digital-online-marketing-experts" class="text-column">Hire Digital Marketing Experts</a>
              <a href="<?php echo $site_url; ?>site-speed-optimization" class="text-column">Site Speed Optimization</a>
            </div>
          </li>
          <li>
            <a href="<?php echo $site_url; ?>dedicated-development-teams">Software Outsourcing</a> <span class="arrow-btn parrow"
              onclick="innermenu(this, 'inner6')"></span>
            <div class="inner-list" id="inner6">
              <a href="<?php echo $site_url; ?>dedicated-development-teams" class="text-column">Dedicated Development Teams</a>
              <a href="<?php echo $site_url; ?>staff-augmentation-services" class="text-column">Staff Augmentation Services</a>
              <a href="<?php echo $site_url; ?>offshore-software-development-services" class="text-column">Offshore Software Development</a>
              <a href="<?php echo $site_url; ?>hire-developer-programmer-india" class="text-column">Hire Indian Developers</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <?php endif; ?>
  </div>
</header>