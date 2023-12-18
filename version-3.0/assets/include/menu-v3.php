<?php
  $is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'staging' ) !== false) )  ?  true : false;
  if( $is_staging ){
  $site_url   = 'https://www.pixelcrayons.com/staging/';
  }else{
  $site_url   = 'http://www.pixelcrayons.com/';
  }  
  
  //$tpl_url    = get_bloginfo('template_url'); // theme dir
  $tpl_url    = 'http://localhost/pixelcrayons-wp/website-div'; //nandnai's dir
  /*
  Main MenuCategories >>>
  engineering : Software Engineering
  app-development : Remote Teams
  demand-teams : On Demand Teams
  ecommerce : eCommerce
  qa-testing : QA & Testing
  devops : Analytics & DevOps
  startups : For Startups
  enterprises : For Enterprises
  agencies : For Agencies
  
  PXL 
  engineering : Software Engineering (done)
  hire : Remote Teams (done)
  ecommerce : eCommerce (done)
  digital-marketing : Digital Marketing (done)
  
  startups : For Startups (Done)
  enterprises : For Enterprises (Done)
  agencies : For Agencies (Done)
  */
  $mcat       = (isset( $args['pcat']) && !empty($args['pcat']) ) ? $args['pcat'] : 'master';
 $mcat       = 'digital-transformation';
  $pcatArray  = [
  'engineering'       => ['name' => 'Software Engineering', 'slug' => 'services/software-engineering', 'icon' => 'cat-icon01.svg'],
  'digital-marketing' => ['name' => 'Digital Marketing', 'slug' => 'services/digital-marketing', 'icon' => 'cat-icon02.svg'],
  'ecommerce'         => ['name' => 'eCommerce', 'slug' => 'services/ecommerce/development', 'icon' => 'cat-icon03.svg'],
  'digital-transformation' => ['name' => 'Digital Transformation', 'slug' => 'services/digital-transformation', 'icon' => 'cat-icon04.svg']
  ];
  
  $psubcatArray = [
    'startups'      => ['name' => 'For Startups', 'slug' => 'startup-product-development', 'icon' => 'cat-icon05.svg' ],
    'enterprises'   => ['name' => 'For Enterprises', 'slug' => 'enterprise-software-development-services', 'icon' => 'cat-icon06.svg' ],
    'agencies'      => ['name' => 'For Agencies', 'slug' => 'industries/agencies-software-development-services', 'icon' => 'cat-icon07.svg' ]
  ];
  ?>
<header class="header-two">
  <div class="container">
  <div class="wrapper">
  <div class="header-item-left">
    <a href="<?php echo $site_url; ?>" class="brand">
      <div class="large">
        <img loading="lazy" src="<?php echo $tpl_url; ?>/menu-images/logo-v2-white.svg" alt="Pixelcrayons" class="white-theme-logo" width="200" height="69">
        <img loading="lazy" src="<?php echo $tpl_url; ?>/menu-images/logo-v2.svg" alt="Pixelcrayons" class="dark-theme-logo" width="200" height="69">
      </div>
      <div class="small">
        <img loading="lazy" src="<?php echo $tpl_url; ?>/menu-images/logo-small.svg" alt="Pixelcrayons" 
          class="dark-theme-logo sm" width="34" height="44">
      </div>
    </a>
    <?php 
      if( in_array( $mcat, array_keys( $pcatArray ) ) ) :
      ?>
    <div class="menu">
      <ul>
        <li class="menu-item-has-children small-menu for-product">
          <a href="<?php echo $site_url.$pcatArray[$mcat]['slug']; ?>"><?php echo $pcatArray[$mcat]['name']; ?></a>
          <span class="arrow-btn"></span>
          <div class="small-menu-inner menu-mega">
            <?php 
              foreach( $pcatArray as $key => $value) {
                if( $key != $mcat ){
                  echo '<a href="'.$site_url.$value['slug'].'"><img src="'.$tpl_url.'/menu-images/'.$value['icon'].'" class="menuicon" alt="menuicon">'.$value['name'].'</a>';  
                }                  
              }
              ?>                
          </div>
        </li>
      </ul>
    </div>
    <?php 
      endif; 
      
      if( in_array( $mcat, array_keys( $psubcatArray ) ) ) :
      ?>
    <div class="menu">
      <ul>
        <li class="menu-item-has-children small-menu for-product">
          <a href="<?php echo $site_url.$psubcatArray[$mcat]['slug']; ?>"><?php echo $psubcatArray[$mcat]['name']; ?></a>
          <span class="arrow-btn"></span>
          <div class="small-menu-inner menu-mega">
            <?php 
              foreach( $psubcatArray as $key => $value) {
                if( $key != $mcat ){
                  echo '<a href="'.$site_url.$value['slug'].'"><img src="'.$tpl_url.'/menu-images/'.$value['icon'].'" class="menuicon" alt="menuicon">'.$value['name'].'</a>';  
                }                  
              }
              ?>                
          </div>
        </li>
      </ul>
    </div>
    <?php endif; ?>
    <div class="hamberger-menu">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
  </div>
  <!-- Navbar Section -->
  <?php if( !isset( $_GET['l'] ) ) : ?>
  <div class="header-item-center">
  <nav class="menu mob-nav" id="menu">
    <a href="<?php echo $site_url; ?>" class="brand">
    <img loading="lazy" src="<?php echo $tpl_url; ?>/menu-images/logo-v2-white.svg" alt="Pixelcrayons" class="white-theme-logo" width="200" height="69">
    </a>
    <ul>
      <li class="menu-item-has-children">
        <a href="<?php echo $serviceMenuLink; ?>">Services</a> <span class="arrow-btn"></span>
        <div class="menu-mega container">
          <?php 
            if( $mcat == "master" ){
            ?>
          <div class="container w-70 landing-menu" id="landing-menu">
            <div class="dis-flex">
              <div class="w-66">
                <div class="flex-3">
                  <!-- 
                    <span class="head">by TEAM Expertise</span>                         
                    -->
                  <a href="<?php echo $site_url; ?>services/software-engineering"><img src="<?php echo $tpl_url; ?>/menu-images/sermain-icon01.svg" class="menuicon" alt="menuicon"><span class="title">Software Engineering</span>
                  Code your business success</a>
                  <a href="<?php echo $site_url; ?>services/ecommerce/development"><img src="<?php echo $tpl_url; ?>/menu-images/sermain-icon02.svg" class="menuicon" alt="menuicon"><span class="title">eCommerce</span>
                  Amplify your brand digitally</a>
                  <a href="<?php echo $site_url; ?>services/digital-marketing"><img src="<?php echo $tpl_url; ?>/menu-images/sermain-icon03.svg" class="menuicon" alt="menuicon"><span class="title">Digital Marketing</span>
                  Unlock online retail potential</a> 
                   <a href="<?php echo $site_url; ?>services/digital-transformation"><img src="<?php echo $tpl_url; ?>/menu-images/sermain-icon04.svg" class="menuicon" alt="menuicon"><span class="title">Digital Transformation</span>
                   Transform digitally, lead globally</a>
                </div>
              </div>
            </div>
          </div>
          <?php }elseif( $mcat == "engineering"){ ?>
          <div class="container w-14 soft-eng" id="m-product-engineering">
            <div class="dis-flex">
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>services/devops"><span class="title">DevOps</span>
                Accelerate delivery, enhance performance</a>
                <a href="<?php echo $site_url; ?>services/software-engineering/consulting"><span class="title">Consulting</span>
                Expert guidance, proven results</a> 
                <a href="<?php echo $site_url; ?>services/modernization"><span class="title">Modernization</span>
                Next-gen tech modernization</a>
                <a href="<?php echo $site_url; ?>services/software-engineering/mvp-development"><span class="title">MVP Development</span>
                Build, test, refine, succeed</a>
                <a href="<?php echo $site_url; ?>services/software-engineering/web-development"><span class="title">Website Development</span>
                Bespoke web development excellence</a>
              </div>
              <div class="flex-3">  
                <a href="<?php echo $site_url; ?>services/qa-testing"><span class="title">QA & Testing</span>Precision testing, ensuring success</a>
                <a href="<?php echo $site_url; ?>services/maintenance-migration"><span class="title">Maintenance & Migration</span>
                Seamless migration, ongoing support</a>
                <a href="<?php echo $site_url; ?>services/software-engineering/saas-product-development"><span class="title">Saas Product Development</span>Innovating SaaS solutions together</a>
                <a href="<?php echo $site_url; ?>services/software-product-development"><span class="title">Software Product Development</span>
                Turn ideas into reality</a>
                <a href="<?php echo $site_url; ?>services/software-development"><span class="title">Custom Software Development</span>
                Custom solutions, exceptional outcomes</a>                      
              </div>
              <div class="flex-3 single-an">
                <a class="d-clr" href="<?php echo $site_url; ?>services/software-engineering/web-development"><span class="title">Web Development</span></a>
                <a href="<?php echo $site_url; ?>services/software-engineering/web-development/ui-ux-design"><span class="title">UI/UX Design</span></a>
                <a href="<?php echo $site_url; ?>services/software-engineering/web-development/frontend"><span class="title">Frontend Development</span></a>
                <a href="<?php echo $site_url; ?>services/software-engineering/web-development/cms"><span class="title">CMS Development</span></a>
                <a class="d-clr mt-40" href="<?php echo $site_url; ?>services/software-engineering/mobile-development"><span class="title">Mobile Development</span></a>
                <a href="<?php echo $site_url; ?>services/software-engineering/mobile-development/flutter-app"><span class="title">Flutter App Development</span></a>
                <a href="<?php echo $site_url; ?>services/software-engineering/mobile-development/cross-platform"><span class="title">Cross-Platform Development</span></a>
              </div>
            </div>
          </div>
          <?php }elseif( $mcat == "app-development"){ ?>
          <div class=" container w-14 landing-menu app-development" id="m-app-development">
            <div class="dis-flex">
              <div class="flex-3">
                <span class="head">Our Expertise</span>
                <a href="<?php echo $site_url; ?>web-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon1.svg" class="menuicon" alt="menuicon"><span class="title">Web App Development</span>
                Developing web applications for browsers</a>
                <a href="<?php echo $site_url; ?>backend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon2.svg" class="menuicon" alt="menuicon"><span class="title">Backend Development</span>
                Server/client side backend expertise</a>
                <a href="<?php echo $site_url; ?>top-website-development-company"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon3.svg" class="menuicon" alt="menuicon"><span class="title">Website & Portal Development</span>
                Secure, user centric website & portal development</a>
                <a href="<?php echo $site_url; ?>frontend-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon4.svg"class="menuicon" alt="menuicon"><span class="title">Frontend Development</span>
                Use of latest technologies to develop flawless frontend</a>
              </div>
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>mobile-application-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon5.svg" class="menuicon" alt="menuicon"><span class="title">Mobile App Development</span>
                Flawless applications for mobile devices</a>
                <a href="<?php echo $site_url; ?>cross-platform-app-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon6.svg" class="menuicon" alt="menuicon"><span class="title">Cross-Platform App Development</span>
                One-code-fits-all facility for different platforms</a>
                <a href="<?php echo $site_url; ?>api-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon7.svg" class="menuicon" alt="menuicon"><span class="title">API Development</span>
                Create, manage, design, develop, & test APIs</a>
                <a href="<?php echo $site_url; ?>hire-developers/hire-full-stack-developers"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon8.svg" class="menuicon" alt="menuicon"><span class="title">Full Stack Development</span>
                Develop secure, scalable full stack applications</a>
              </div>
              <div class="flex-3">
                <span class="head">OTHER services</span>
                <a href="<?php echo $site_url; ?>application-maintenance"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon9.svg" class="menuicon" alt="menuicon"><span class="title">App Maintainance & Support</span>
                Choose from a range of app maintainance services</a>
                <a href="<?php echo $site_url; ?>application-modernization"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon10.svg" class="menuicon" alt="menuicon"><span class="title">Application Modernization</span>
                Update your existing web and mobile applications</a>
                <a href="<?php echo $site_url; ?>ott-development"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon11.svg" class="menuicon" alt="menuicon"><span class="title">OTT App Development</span>
                Manage, deliver, and monetize your OTT content</a>
                <a href="<?php echo $site_url; ?>cloud-application-development-services"><img src="<?php echo $tpl_url; ?>/menu-images/application-dev-icon12.svg" class="menuicon" alt="menuicon"><span class="title">Cloud Application Development</span>
                Software applications for cloud computing</a>
              </div>
            </div>
          </div>
          <?php }
            /*
            elseif( $mcat == "startups"){ 
            ?>        
          <!-- <div class="container w-900 startups" id="m-startups">
            <div class="dis-flex">
              <div class="flex-3">
                <span class="head">FOR STARTUPS</span>                      
                <a href="#"><span class="title">MVP Development</span>Plan, build, & ship quality products</a>
                <a href="<?php echo $site_url; ?>saas-product-development"><span class="title">
                Software Product Development</span>Operate securely and reliably</a>
              </div>
              <div class="flex-3">
                <span class="head op-0">FOR STARTUPS</span>
                <a href="<?php echo $site_url; ?>dedicated-development-teams"><span class="title">Dedicated Development Teams</span>
                Plan, build, & ship quality products</a>
                <a href="<?php echo $site_url; ?>saas-product-development"><span class="title">SaaS Development</span>
                Plan, build, & ship quality products</a>
              </div>
            </div>
            </div> -->
          <?php  } */
            elseif( $mcat == "digital-transformation"){ ?>                
          <div class="container w-small demand-teams" id="digital-transform">
            <div class="dis-flex">
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>services/digital-transformation/chatbot-development"><span class="title">Chatbot Development</span> Interactive chatbots for better experience</a>
                <a href="<?php echo $site_url; ?>services/digital-transformation/blockchain-development"><span class="title">Blockchain Development</span> Innovate with blockchain technology</a>
                <a href="<?php echo $site_url; ?>services/digital-transformation/rpa"><span class="title">Robotics Process Automation (RPA)</span> Automate processes, boost efficiency</a>
              </div>
            </div>
          </div>
          <!-- //On Demand Teams Ends -->
          <?php }elseif( $mcat == "ecommerce"){ ?>
          <div class=" container w-900 landing-menu ecom" id="m-ecommerce">
            <div class="dis-flex">
              <div class="flex-3">
                <!--<span class="head">Custom eCommerce</span>-->
                <a href="<?php echo $site_url; ?>services/ecommerce/consulting"><span class="title">Consulting</span>
                Strategize for eCommerce Success</a>
                <a href="<?php echo $site_url; ?>services/ecommerce/development"><span class="title">Development</span>Build stores, grow sales</a>
                <a href="<?php echo $site_url; ?>services/ecommerce/implementation"><span class="title">Implementation</span>
                Implement, optimize, thrive online</a>
              </div>
              <div class="flex-3">
                <!--<span class="head">Solutions</span>-->
                <a href="<?php echo $site_url; ?>services/ecommerce/magento-development"><span class="title">Magento Development</span>
                Expert Magento solutions for growth</a>
                <a href="<?php echo $site_url; ?>services/ecommerce/b2b-b2c-portal-development"><span class="title">B2B & B2C Portal Development</span>
                Connect with businesses & customers</a>
              </div>
              <!-- 
                <div class="flex-3">
                  <span class="head">DIGITAL MARKETING</span>
                  <a href="#"><span class="title">eCommerce SEO Services</span>
                  Custom SEO services for eCommerce businesses</a>
                  <a href="<?php echo $site_url; ?>ppc-management-services"><span class="title">eCommerce PPC Services</span>
                  Result-driven PPC services for B2B & B2C eCommerce websites</a>
                  <a href="#"><span class="title">D2C Social Media Advertising</span>
                  Leverage social media to reach out directly to consumer</a>
                </div> 
                -->
            </div>
          </div>
          <?php }elseif( $mcat == "digital-marketing"){ ?>
          <!-- Digital Marketing Menu Here -->
          <div class="container w-14 digital-mark" id="m-qaconsult">
            <div class="dis-flex">
              <div class="flex-3 single-an">
                <a class="d-clr" href="<?php echo $site_url; ?>services/digital-marketing/seo"><span class="title">SEO Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/seo/local"><span class="title">Local SEO Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/seo/bing"><span class="title">Bing SEO Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/seo/google"><span class="title">Google SEO Services</span></a>
                <a class="d-clr mt-40" href="<?php echo $site_url; ?>services/digital-marketing/social-media"><span class="title">Social Media Marketing</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/social-media/management"><span class="title">Social Media Management</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/social-media/youtube-marketing"><span class="title">Youtube Marketing Services</span></a>
              </div>
              <div class="flex-3 single-an">
                <a class="d-clr" href="<?php echo $site_url; ?>services/digital-marketing/ppc"><span class="title">PPC Marketing</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/bing-ads"><span class="title">Bing Ads Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/google-ads"><span class="title">Google Ads Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/social-media/linkedin-ads"><span class="title">Linkedin Ads Services</span></a>
                <a  href="<?php echo $site_url; ?>services/digital-marketing/social-media/facebook-ads"><span class="title">Facebook Ads Services</span></a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/website-optimization"><span class="title">Website Speed Optimisation</span></a>
              </div>
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>services/digital-marketing/online-review-management"><span class="title">ORM Service</span>Enhance reputation, build trust
                </a>
                <a href="<?php echo $site_url; ?>services/digital-marketing/content-marketing"><span class="title">Content Marketing</span>Content that drives results
                </a>
              </div>
            </div>
          </div>
          <?php }elseif( $mcat == "devops"){ ?>
          <!-- DevOps Menu Here -->
          <div class=" container w-14 landing-menu analytics" id="m-analytics">
            <div class="dis-flex">
              <div class="flex-3">
                <span class="head">Dashboards & Analytics</span>
                <a href="<?php echo $site_url; ?>big-data-application-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon1.svg" class="menuicon" alt="menuicon"><span class="title">Big Data Consulting</span>
                Precisely analyze large data sets</a>
                <a href="<?php echo $site_url; ?>business-intelligence-consulting-services"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon2.svg" class="menuicon" alt="menuicon"><span class="title">BI Consulting Services</span>
                Enhance business decision making</a>
              </div>
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>bi-implementation"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon3.svg" class="menuicon" alt="menuicon"><span class="title">BI Implementation</span>
                BI consulting, data management, & reporting</a>
                <a href="<?php echo $site_url; ?>microsoft-power-bi-development-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon4.svg" class="menuicon" alt="menuicon"><span class="title">Microsoft Power BI</span>
                Custom reports and dashboards for clients</a>
              </div>
              <div class="flex-3">
                <span class="head">DevOps</span>
                <a href="<?php echo $site_url; ?>devops-consulting-engineering-services-company"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon5.svg" class="menuicon" alt="menuicon"><span class="title">DevOps Consulting</span>
                Leverage collaboration, monitoring, & cloud adoption, etc</a>
                <a href="<?php echo $site_url; ?>amazon-aws-partner-company-india"><img src="<?php echo $tpl_url; ?>/menu-images/devop-analyt-icon6.svg" class="menuicon" alt="menuicon"><span class="title">Amazon AWS</span>
                Seamless development and deployment of AWS cloud applications</a>
              </div>
            </div>
          </div>
          <!-- //Analytics Ends -->
          <?php }
            /*elseif( $mcat == "enterprises"){ ?>
          <!-- Enterprises Menu Here -->
          <!--
            <div class="container w-900 enterprises" id="m-enterprises">
              <div class="dis-flex">
                <div class="flex-3">
                  <span class="head">For Enterprises</span>
                  <a href="<?php echo $site_url; ?>services/digital-transformation"><span class="title">Digital Transformation</span>
                  Plan, build, & ship quality products</a>
                  <a href="<?php echo $site_url; ?>software-modernization-services"><span class="title">Software Modernisation</span>
                  Operate securely and reliably</a>
                  <a href="<?php echo $site_url; ?>application-maintenance-support"><span class="title">Maintenance & Migration</span>
                  Plan, build, & ship quality products</a>
                </div>
                <div class="flex-3">
                  <span class="head op-0">For Enterprises</span>
                  <a href="<?php echo $site_url; ?>dedicated-development-teams"><span class="title">Testing & QA</span>
                  Plan, build, & ship quality products</a>
                  <a href="<?php echo $site_url; ?>services/devops"><span class="title">DevOps</span>
                  Plan, build, & ship quality products</a>
                </div>
              </div>
            </div>
            -->
          <?php }*/
            elseif( $mcat == "agencies"){ ?>  
          <div class="container w-200 agencies" id="m-agencies">
            <div class="flex-3">
              <span class="head">For Agencies</span>
              <a href="#"><span class="title">White Label Services</span>
              Plan, build, & ship quality products</a>
              <a href="<?php echo $site_url; ?>services/software-engineering/web-development/frontend"><span class="title">Frontend Development</span>
              Operate securely and reliably</a>
              <a href="<?php echo $site_url; ?>services/software-engineering/web-development/cms"><span class="title">CMS Development</span>
              Operate securely and reliably</a>
            </div>
          </div>
          <?php } ?>  
        </div>
        <!-- //Mega-Menu -->
      </li>
      <!--Hire New Menu Start From Here-->
      <li class="menu-item-has-children">
        <a href="javascript:void(0)">Hire</a> <span class="arrow-btn"></span>
        <div class="menu-mega container" id="hire-megamenu">
          <div class="dis-flex hire-tab-menu">
            <div class="w-900 hiremenu header-menu active" id="b0">
              <div id="menutabs1" class="dis-flex tab-contents">
                <div class="left-tabs">
                  <ul class="tab-nav">
                    <li class="tab-link is-active">Backend</li>
                    <li class="tab-link">Frontend</li>
                    <li class="tab-link">Digital Marketing</li>
                    <li class="tab-link">eCommerce & CMS</li>
                    <li class="tab-link">Mobile</li>
                    <li class="tab-link">DevOps</li>
                    <li class="tab-link">QA & Testing</li>
                    <li class="tab-link">Full Stack & Frameworks</li>
                  </ul>
                </div>
                <div class="right-tabs list-two">
                  <div class="tab-content is-active">
                    <div class="tab-text">
                      <div class="column">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>hire/dot-net-developers" title=".NET">.NET</a></li>
                          <li><a href="#">API</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/app-developers ">App</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/java-developers" title="Java">Java</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/node-js-developers">Node.js</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/php-developers" title="PHP">PHP</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/python-developers" title="Python">Python</a> </li>
                        </ul>
                      </div>
                      <div class="column">
                        <ul>
                          <li><a href="#">Symfony</a></li>
                          <li><a href="#">Web</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/blockchain-developers">Blockchain</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/golang-developers">Golang</a></li>
                          <li><a href="#">Laravel</a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo $site_url; ?>hire/web-developers" class="learn-more">Explore<i class="round-arrow-icon"></i></a>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>hire/angular-js-developers" title="Angular">Angular</a></li>
                          <li><a href="#">Next</a></li>
                          <li><a href="#">TypeScript</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/react-developers" title="Vue.JS">React</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/vuejs-developers" title="Vue.JS">Vue.jS</a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo $site_url; ?>hire/frontend-developers" class="learn-more">Explore<i class="round-arrow-icon"></i></a>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>hire/content-writers" title="Content Writer">Content Writer</a>
                          </li>
                          <li><a href="<?php echo $site_url; ?>hire/ppc-experts" title="Hire PPC Expert">PPC (Pay Per Click)</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/seo-experts" title="Hire SEO Expert">SEO (Search Engine Optimization)</a></a></li>
                          <li><a href="<?php echo $site_url; ?>hire/smo-experts" title="Hire SMO Expert">Social Media</a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo $site_url; ?>hire/digital-marketing-experts" class="learn-more">Explore<i class="round-arrow-icon"></i></a>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>hire/magento-developers">Magento (Adobe Commerce)</a>
                          </li>
                          <li><a href="<?php echo $site_url; ?>hire/opencart-developers" title="Hire PPC Expert">Opencart</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/shopify-developers">Shopify </a></a></li>
                          <li><a href="<?php echo $site_url; ?>hire/woocommerce-developers">WooCommerce</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/drupal-developers" title="Drupal">Drupal</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/wordpress-developers">WordPress</a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo $site_url; ?>hire/ecommerce-developers" class="learn-more">Explore<i class="round-arrow-icon"></i></a>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>hire/android-developers" title="Android">Android</a>
                          </li>
                          <li><a href="<?php echo $site_url; ?>hire/flutter-developer" title="Flutter">Flutter</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/iphone-app-developers" title="iOS">iOS</a></a></li>
                          <li><a href="<?php echo $site_url; ?>hire/kotlin-developers" title="Kotlin">Kotlin</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/react-native-developers" title="React Native">React Native</a></li>
                        </ul>
                      </div>
                    </div>
                    <a href="<?php echo $site_url; ?>hire/mobile-app-developers" class="learn-more">Explore<i class="round-arrow-icon"></i></a>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="<?php echo $site_url; ?>amazon-aws-partner-company-india">AWS</a>
                          </li>
                          <li><a href="#">Azure</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="#">Automated QA</a>
                          </li>
                          <li><a href="#">Manual QA</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-content">
                    <div class="tab-text">
                      <div class="column full">
                        <ul>
                          <li><a href="#">.NET Core</a>
                          </li>
                          <li><a href="#">Django</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/mean-stack-developers">MEAN</a></li>
                          <li><a href="<?php echo $site_url; ?>hire/mern-developers">MERN</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <!--Hire menu Ends from here-->
      <!--For Agencies Menu Start From Here-->
      <li class="menu-item-has-children">
        <a href="<?php echo $serviceMenuLink; ?>">For Agencies</a> <span class="arrow-btn"></span>
        <div class="menu-mega container">
        <div class="container w-80 landing-menu" id="landing-menu">
        <div class="dis-flex">
        <div class="w-66">
          <div class="flex-3">
            <a href="<?php echo $site_url; ?>services/white-label"><img src="<?php echo $tpl_url; ?>/menu-images/agencies-01.svg" class="menuicon" alt="menuicon"><span class="title">White Label Services</span>
            Expert services, visible success</a>
            <a href="<?php echo $site_url; ?>services/dedicated-teams"><img src="<?php echo $tpl_url; ?>/menu-images/agencies-02.svg" class="menuicon" alt="menuicon"><span class="title">Dedicated Teams</span>
            Coding your success together</a> 
            <a href="<?php echo $site_url; ?>services/dedicated-teams/offshore-software-development"><img src="<?php echo $tpl_url; ?>/menu-images/agencies-03.svg" class="menuicon" alt="menuicon"><span class="title">Offshore Development Center</span>
            Expand your horizons offshore</a>
            <a href="<?php echo $site_url; ?>services/software-development-outsourcing"><img src="<?php echo $tpl_url; ?>/menu-images/agencies-04.svg" class="menuicon" alt="menuicon"><span class="title">Outsourced Software Development</span>
            Remote development, robust solutions</a>
          </div>
        </div>
      </li>
      <li class="menu-item-has-children">
        <a href="#">Industries</a> <span class="arrow-btn"></span>
        <div class="menu-mega container">
          <div class="container w-80 landing-menu industry-menu" id="">
            <div class="dis-flex">
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>industries/bfsi"><img src="<?php echo $tpl_url; ?>/menu-images/indus-01.svg" class="menuicon" alt="menuicon"><span class="title">BFSI</span>
                Secure & reliable finance solutions</a>
                <a href="<?php echo $site_url; ?>industries/fintech"><img src="<?php echo $tpl_url; ?>/menu-images/indus-02.svg" class="menuicon" alt="menuicon"><span class="title">Fintech</span>
                Tech-forward financial solutions</a> 
                <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/indus-03.svg" class="menuicon" alt="menuicon"><span class="title">Software & Tech</span>
                Innovate, develop & excel</a>
                <a href="<?php echo $site_url; ?>industries/retail"><img src="<?php echo $tpl_url; ?>/menu-images/indus-04.svg" class="menuicon" alt="menuicon"><span class="title">Retail & eCommerce</span>
                Revolutionize retail experiences</a>
                <a href="#"><img src="<?php echo $tpl_url; ?>/menu-images/indus-05.svg" class="menuicon" alt="menuicon"><span class="title">Travel & Hospitality</span>
                Reimagine travel & hospitality</a>
              </div>
              <div class="flex-3">
                <a href="<?php echo $site_url; ?>industries/edtech"><img src="<?php echo $tpl_url; ?>/menu-images/indus-06.svg" class="menuicon" alt="menuicon"><span class="title">Education & eLearning</span>
                Redefine digital learning</a>
                <a href="<?php echo $site_url; ?>industries/logistics"><img src="<?php echo $tpl_url; ?>/menu-images/indus-07.svg" class="menuicon" alt="menuicon"><span class="title">Logistics & Supply Chain</span>
                Simplify logistics & supply with tech</a> 
                <a href="<?php echo $site_url; ?>industries/healthcare"><img src="<?php echo $tpl_url; ?>/menu-images/indus-08.svg" class="menuicon" alt="menuicon"><span class="title">Healthcare & Life Sciences</span>
                Innovative healthcare solutions</a>
                <a href="<?php echo $site_url; ?>industries/manufacturing"><img src="<?php echo $tpl_url; ?>/menu-images/indus-09.svg" class="menuicon" alt="menuicon"><span class="title">Manufacturing & Engineering</span>
                Engineering future with advanced tech</a>
              </div>
      </li>
      <!--For Agencies Menu Start From Here-->
      <!-- Expertise Menu With Multi-Conditions-->
      <?php 
        // Hide Company Menu Is Page Catrgoty is : App Development
        if( $mcat !== "app-development" ) :
        ?>
      <li class="menu-item-has-children small-menu for-company">
      <a href="<?php echo $site_url; ?>company/about">Company</a><span class="arrow-btn"></span>
      <div class="small-menu-inner menu-mega">
      <a href="<?php echo $site_url; ?>company/about"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon01.svg" class="menuicon" alt="menuicon">About Us</a>
      <a href="<?php echo $site_url; ?>company/our-team"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon02.svg" class="menuicon" alt="menuicon">Team</a>
      <a href="<?php echo $site_url; ?>testimonials"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon03.svg" class="menuicon" alt="menuicon">Clients & Testimonials</a>
      <a href="<?php echo $site_url; ?>company/partnership-programme"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon04.svg" class="menuicon" alt="menuicon">Partnership Programme</a>
      <a href="<?php echo $site_url; ?>careers"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon05.svg" class="menuicon" alt="menuicon">Careers & Culture</a>
      <a href="https://www.pixelcrayons.com/blog/" target="_blank"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon06.svg" class="menuicon" alt="menuicon">Blog</a>
      <a href="https://www.pixelcrayons.com/case-study/" target="_blank"><img src="<?php echo $tpl_url; ?>/menu-images/company-icon07.svg" class="menuicon" alt="menuicon">Case studies</a>
    </div>
      </li>
      <?php endif; ?>
      <li class="contact-nav"><a href="<?php echo $site_url; ?>contact-us">Contact Us</a></li>
    </ul>
  </nav>
  </div>
  <?php endif; ?>
  </div>
  </div>
</header>