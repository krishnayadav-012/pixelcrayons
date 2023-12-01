<?php
  $is_staging = ( isset( $_SERVER['PHP_SELF'] ) && (strpos( $_SERVER['PHP_SELF'], 'v2wp' ) !== false) )  ?  true : false;
  if( $is_staging ){
  $site_url   = 'https://pixelcrayons.com/p2wp/';
  }else{
  $site_url   = 'http://pixelcrayons.com/';
  }  
  $tpl_url    = 'http://localhost/pixelcrayons-wp/website-div';
  $mcat       = (isset( $args['pcat']) && !empty($args['pcat']) ) ? $args['pcat'] : 'master';
  
  
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
  //$mcat       = 'ecommerce';
  $pcatArray  = [
  'engineering'       => ['name' => 'Product Engineering', 'slug' => 'software-engineering-company', 'icon' => 'cat-icon01.svg'],
  'digital-marketing' => ['name' => 'Digital Marketing', 'slug' => 'digital-marketing-services', 'icon' => 'cat-icon01.svg'],
  'hire'              => ['name' => 'Remote Teams', 'slug' => 'dedicated-development-teams', 'icon' => 'cat-icon02.svg'],
  'ecommerce'         => ['name' => 'eCommerce', 'slug' => 'ecommerce-development', 'icon' => 'cat-icon03.svg']
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
            <img loading="lazy" src="menu-images/logo-v2-white.svg" alt="Pixelcrayons" class="white-theme-logo" width="200" height="69">
            <img loading="lazy" src="menu-images/logo-v2.svg" alt="Pixelcrayons" class="dark-theme-logo" width="200" height="69">
          </div>
          <div class="small">
            <img loading="lazy" src="menu-images/logo-small.svg" alt="Pixelcrayons" 
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
          <img loading="lazy" src="<?php echo $tpl_url; ?>/assets/images/logo-v2-white.svg" alt="Pixelcrayons" class="dark-theme-logo" width="212" height="64">
          </a>
          <ul>
            <li class="menu-item-has-children">
              <a href="<?php echo $site_url; ?>software-development-services-company">Services</a> <span class="arrow-btn"></span>
              <div class="menu-mega container">
                <?php 
                  if( $mcat == "master" ){
                  ?>
                <div class="container w-70 landing-menu" id="landing-menu">
                  <div class="dis-flex">
                    <div class="w-66">
                      <div class="flex-3">
                        <!--<span class="head">by TEAM Expertise</span>-->
                        <a href="<?php echo $site_url; ?>custom-software-development-services"><img src="menu-images/service-icon01.svg" class="menuicon" alt="menuicon"><span class="title">Software Engineering</span>
                        Consulting, Product Development, Digital Tansformation, Testing & QA</a>
                        <a href="<?php echo $site_url; ?>dedicated-development-teams"><img src="menu-images/service-icon02.svg" class="menuicon" alt="menuicon"><span class="title">Remote Teams</span>
                        Outsourcing, Staff Augmentation, Dedicated Hire Indian Developers In Backend, Frontend etc</a> 
                        <a href="<?php echo $site_url; ?>ecommerce-development"><img src="menu-images/service-icon03.svg" class="menuicon" alt="menuicon"><span class="title">eCommerce</span>
                        Consulting, B2b & B2C Solutions, Digital Marketing & Dedicated Team Setup</a>
                        <a href="<?php echo $site_url; ?>digital-marketing-services"><img src="menu-images/service-icon04.svg" class="menuicon" alt="menuicon"><span class="title">Digital Marketing</span>
                        SEO, SMO, PPC, Content Marketing etc</a>
                      </div>
                      <!--<div class="flex-3">
                        <a href="<?php echo $site_url; ?>ecommerce-development"><img src="menu-images/service-icon03.svg" class="menuicon" alt="menuicon"><span class="title">eCommerce</span>
                        Consulting, B2b & B2C Solutions, Digital Marketing & Dedicated Team Setup</a>
                        <a href="<?php echo $site_url; ?>digital-marketing-services"><img src="menu-images/service-icon04.svg" class="menuicon" alt="menuicon"><span class="title">Digital Marketing</span>
                        SEO, SMO, PPC, Content Marketing etc</a>
                      </div>-->

                     <!-- <div class="flex-1">
                        <div class="dis-flex">
                          <div class="need">
                            <img src="menu-images/need-icon.svg" alt="icon"><span class="ndtitle">Can’t find what you need?</span>
                          </div>
                          <div class="btnd"><a href="https://www.pixelcrayons.com/contact-us" target="_blank">Ask us</a></div>
                        </div>
                      </div>-->

                    </div>
                    <!--
                    <div class="flex-3">
                      <span class="head">BY CLIENT TYPE</span>
                      <a href="<?php echo $site_url; ?>outsource-software-product-development-services"><img src="menu-images/service-icon05.svg" class="menuicon" alt="menuicon"><span class="title">For Startups</span>
                      Consulting to Product[MVP & SAAS] Development & Dedicated Team Setup</a>
                      <a href="<?php echo $site_url; ?>outsource-software-product-development-services"><img src="menu-images/service-icon06.svg" class="menuicon" alt="menuicon"><span class="title">For Enterprises</span>
                      Digital Transformation to Modernization, Migration, Maintainace, Testing QA,  DevOps & Technologies</a>
                      <a href="<?php echo $site_url; ?>outsource-software-product-development-services"><img src="menu-images/service-icon07.svg" class="menuicon" alt="menuicon"><span class="title">For Agencies</span>
                      White Label Services for Custom software, Frontend, Backend, CMS, eCommerce, Staff Sugmentation </a>
                    </div>
                  -->
                  </div>
                </div>
                <?php }elseif( $mcat == "engineering"){ ?>
                <div class="container w-14 soft-eng" id="m-product-engineering">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>technology-consulting-services"><span class="title">Software Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>custom-software-development-services"><span class="title">Custom Software Development</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>web-development"><span class="title">Web App Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>mobile-app-development"><span class="title">Mobile App Development</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">  
                      <a href="<?php echo $site_url; ?>saas-product-development"><span class="title">Software Product Development</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">Software Modernisation</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>application-maintenance-support"><span class="title">Maintenance & Migration</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>testing-and-qa-service"><span class="title">Testing & QA</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>digital-transformation"><span class="title">Digital Transformation</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>devops-solutions"><span class="title">DevOps</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>cms-development"><span class="title">CMS Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>frontend"><span class="title">Frontend Development</span>
                      Operate securely and reliably</a>
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
                <?php }elseif( $mcat == "startups"){ ?>        
                <div class="container w-900 startups" id="m-startups">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">FOR STARTUPS</span>
                      <a href="#"><span class="title">MVP Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>saas-product-development"><span class="title">Software Product Development</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <span class="head op-0">FOR STARTUPS</span>
                      <a href="<?php echo $site_url; ?>dedicated-development-teams"><span class="title">Dedicated Development Teams</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>saas-product-development"><span class="title">SaaS Development</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <!-- // For Startups  Ends  -->
                <?php }elseif( $mcat == "hire"){ ?>                
                <div class="container w-900 demand-teams" id="m-demand-team">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <a href="#"><span class="title">Software Outsourcing services</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>dedicated-development-teams"><span class="title">Dedicated Development Teams</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <a href="<?php echo $site_url; ?>offshore-software-development-services"><span class="title">Offshore Software Development</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>staff-augmentation-services"><span class="title">Staff Augmentation Services</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <!-- //On Demand Teams Ends -->
                <?php }elseif( $mcat == "ecommerce"){ ?>
                <div class=" container w-14 landing-menu ecom" id="m-ecommerce">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Custom eCommerce</span>
                      <a href="<?php echo $site_url; ?>ecommerce-consulting-services"><span class="title">eCommerce Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>ecommerce-implementation-services"><span class="title">eCommerce Implementation</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>digital-consulting-services"><span class="title">Digital Consulting</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>ecommerce-web-design"><span class="title">eCommerce Web Design</span>
                      Operate securely and reliably</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">Solutions</span>
                      <a href="<?php echo $site_url; ?>b2c-ecommerce-development-services"><span class="title">B2C eCommerce</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>b2b-ecommerce-development-services"><span class="title">B2B eCommerce</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>b2b-b2c-portal-development"><span class="title">Web Portal</span>
                      Plan, build, & ship quality products</a>
                      <a href="#"><span class="title">Supply Chain Automation</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head">DIGITAL MARKETING</span>
                      <a href="#"><span class="title">Ecommerce SEO Services</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>ppc-management-services"><span class="title">Ecommerce PPC Services</span>
                      Operate securely and reliably</a>
                      <a href="#"><span class="title">D2C Social Media Advertising</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "digital-marketing"){ ?>
                <!-- Digital Marketing Menu Here -->
                <div class="container w-900 digital-mark" id="m-qaconsult">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">FOR STARTUPS</span>
                      <a href="#"><span class="title">Core Web Vitals</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>seo-services"><span class="title">Search Engine Optimization</span>
                      Operate securely and reliably</a>
                      <a href="<?php echo $site_url; ?>social-media-marketing-services"><span class="title">Social Media Marketing</span>
                      Plan, build, & ship quality products</a>
                    </div>
                    <div class="flex-3">
                      <span class="head op-0">FOR STARTUPS</span>
                      <a href="<?php echo $site_url; ?>content-marketing-services"><span class="title">Content Marketing</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>ppc-management-services"><span class="title">PPC</span>
                      Plan, build, & ship quality products</a>
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
                <?php }elseif( $mcat == "enterprises"){ ?>
                <!-- Enterprises Menu Here -->
                <div class="container w-900 enterprises" id="m-enterprises">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">For Enterprises</span>
                      <a href="<?php echo $site_url; ?>digital-transformation"><span class="title">Digital Transformation</span>
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
                      <a href="<?php echo $site_url; ?>devops-solutions"><span class="title">DevOps</span>
                      Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
                <?php }elseif( $mcat == "agencies"){ ?>  
                <div class="container w-200 agencies" id="m-agencies">
                  <div class="flex-3">
                    <span class="head">For Agencies</span>
                    <a href="#"><span class="title">White Label Services</span>
                    Plan, build, & ship quality products</a>
                    <a href="<?php echo $site_url; ?>frontend"><span class="title">Frontend Development</span>
                    Operate securely and reliably</a>
                    <a href="<?php echo $site_url; ?>cms-development"><span class="title">CMS Development</span>
                    Operate securely and reliably</a>
                  </div>
                </div>
                <?php } ?>  
              </div>
              <!-- //Mega-Menu -->
            </li>
            <!-- Expertise Menu With Multi-Conditions-->
            <li class="menu-item-has-children">
              <a href="javascript:void(0)">Expertise</a> <span class="arrow-btn"></span>
              <?php 
                if( $mcat == "hire" ){
                ?>
              <div class="menu-mega container" id="hire-megamenu">
                <div class="container">
                  <div class="dis-flex">
                    <div class="width-100 for-padding hiremenu header-menu active" id="b0">
                      <div class="dis-flex last-list" id="active_Current_Tabs0">
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-backend-developers" class="title">Backend</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-dotnet-developers" title=".NET">.NET</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-c-developers" title="C/C++">C/C++</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-c-sharp-developers" title="C#">C#</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-django-developers" title="Django">Django</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-firebase-developers" title="Firebase">Firebase</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-golang-web-developers" title="Golang">Golang</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-graphql-developers" title="GraphQL">GraphQL</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-java-developers" title="Java">Java</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-laravel-developers" title="Laravel">Laravel</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-nodejs-developers" title="Node.Js">Node</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-php-developers" title="PHP">PHP</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-python-developers" title="Python">Python</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ror-developers" title="Ruby on Rails">Ruby on Rails</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-symfony-developers" title="Symfony">Symfony</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-front-end-developers" class="title">Frontend</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-angularjs-developers" title="Angular">Angular</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-html-developers" title="HTML/CSS">HTML/CSS</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-javascript-developers" title="JavaScript">JavaScript</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-power-bi-developer-consultants" title="PowerBI">PowerBI</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-reactjs-developers" title="React">React</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-typescript-developers" title="TypeScript">TypeScript</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-vuejs-developers" title="Vue.JS">Vue.JS</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-cms-developers" class="margin-t-40 title">CMS</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-drupal-developers" title="Drupal">Drupal</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-kentico-developers" title="kentico">Kentico</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-sitecore-developers" title="Sitecore">Sitecore</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-sitefinity-developers" title="Sitefinity">Sitefinity</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-umbraco-developers" title="Umbraco">Umbraco</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-wordpress-developers" title="Wordpress">Wordpress</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mobile-app-developers" class="title">Mobile</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-android-developers" title="Android">Android</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-flutter-developers" title="Flutter">Flutter</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ionic-developers" title="Ionic">Ionic</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ios-developers" title="IOS">iOS</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-kotlin-developers" title="Kotlin">Kotlin</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-react-native-developers" title="React Native">React Native</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-swift-developers" title="Swift">Swift</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-xamarin-developers" title="Xamarin">Xamarin</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ecommerce-developers" class="margin-t-40 title">eCommerce</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-magento-developers" title="Magento">Magento</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-shopify-developers" title="Shopify">Shopify</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-full-stack-developers" class="title">Full Stack</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mean-stack-developers" title="MEAN">MEAN</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mern-stack-developers" title="MERN">MERN</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-blockchain-developers" class="margin-t-40 title">Blockchain</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-cryptocurrency-app-developers" title="Cryptocurrency">Cryptocurrency</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ethereum-developer" title="Ethereum">Ethereum</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-ico-developers" title="ICO">ICO</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-smartcontract-developers" title="Smart Contract">Smart Contract</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-solidity-developers" title="Solidity">Solidity</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-nft-marketplace-developers" title="NFT">NFT</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-devops-developers" class="margin-t-40 title">DevOps</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-azure-developers" title="Azure">Azure</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-aws-developers" title="AWS">AWS</a>
                          </div>
                        </div>
                        <div class="width-20 last-list">
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-machine-learning-experts" class="title">ML</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-chatbot-developers" title="Chatbot">Chatbot</a>
                            <a href="<?php echo $site_url; ?>hire-developers/dialog-flow-development-services-company" title="Dialogflow"> Dialogflow</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-rpa-developers" title="RPA">RPA</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-tensorflow-developers" title="Tensorflow">TensorFlow</a>
                          </div>
                          <div class="hr-list-item">
                            <a href="<?php echo $site_url; ?>low-code-no-code-services" class="margin-t-40 title">Low-Code</a>
                            <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>hire-developers/hire-appian-developers" title="Appian">Appian</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-outsystems-developers" title="Outsystems">Outsystems</a>
                            <a href="<?php echo $site_url; ?>hire-developers/hire-mendix-developers" title="Mendix">Mendix</a>
                            <a href="<?php echo $site_url; ?>pega-development-services" title="Pega Development">Pega Development</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }elseif($mcat == "ecommerce"){ ?>
              <div class="menu-mega container" id="ecommerce-menu">
                <div class="container">
                  <div class="dis-flex">
                    <div class="width-50 detail-list without-icon">
                      <span class="head">Technology</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>hire-magento-developers"><span class="title">Magento</span>
                          Plan, build, & ship quality products</a>
                          <a href="<?php echo $site_url; ?>hire-shopify-developer"><span class="title">Shopify</span>
                          Operate securely and reliably</a>
                        </div>
                        <div class="flex-2">
                          <a href="#"><span class="title">OpenCart</span>
                          Plan, build, & ship quality products</a>
                          <a href="<?php echo $site_url; ?>hire-wooCommerce-developer"><span class="title">WooCommerce</span>
                          Operate securely and reliably</a>
                        </div>
                      </div>
                    </div>
                    <div class="width-50 detail-list without-icon">
                      <span class="head">Industry</span>
                      <div class="dis-flex">
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>food-ecommerce"><span class="title">Food</span>
                          Plan, build, & ship quality products</a>
                          <a href="<?php echo $site_url; ?>fashion-ecommerce"><span class="title">Fashion</span>
                          Operate securely and reliably</a>
                        </div>
                        <div class="flex-2">
                          <a href="<?php echo $site_url; ?>household-goods-ecommerce"><span class="title">Household Goods</span>
                          Operate securely and reliably</a>
                          <a href="<?php echo $site_url; ?>healthcare-ecommerce"><span class="title">Healthcare</span>
                          Plan, build, & ship quality products</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }elseif($mcat == "digital-marketing"){ ?>
              <div class="menu-mega container" id="digital-marketing-services-menu">
                <div class="container w-900">
                  <div class="dis-flex">
                    <div class="flex-3">
                      <span class="head">Digital Marketing Experts</span>
                      <a href="<?php echo $site_url; ?>hire-seo-expert"><span class="title">Hire SEO Expert</span>
                      Plan, build, & ship quality products</a>
                      <a href="<?php echo $site_url; ?>hire-ppc-expert">
                        <span class="title">Hire PPC Expert</span>
                        Operate securely and reliably/a>
                    </div>
                    <div class="flex-3">
                    <span class="head op-0">FOR STARTUPS</span>
                    <a href="<?php echo $site_url; ?>hire-smo-experts"><span class="title">Hire SMO Expert</span>
                    Plan, build, & ship quality products</a>
                    <a href="<?php echo $site_url; ?>hire-content-writer"><span class="title">Hire Content Writer</span>
                    Plan, build, & ship quality products</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php }else{ ?>
              <div class="menu-mega container" id="technologies-menu">
                <div class="container">
                  <div class="dis-flex" id="active_Current_Tabs8">
                    <div class="width-100 header-menu active">
                      <div class="dis-flex" id="active_Current_Tabs8a">
                        <div class="width-75 last-list padding-40">
                          <div class="dis-flex">
                            <div class="width-50">
                              <div class="hr-list-item">
                                <span class="head">Programming</span> <span class="hr-arrow-btn"></span>
                              </div>
                              <div class="dis-flex hr-menu-mega">
                                <div class="width-50">
                                  <a href="<?php echo $site_url; ?>hire-php-developers" title="PHP">PHP</a>
                                  <a href="<?php echo $site_url; ?>hire-python-developers-in-india" title="Python">Python</a>
                                  <a href="<?php echo $site_url; ?>hire-mean-stack-developers" title="MEAN">MEAN Stack</a>
                                  <a href="<?php echo $site_url; ?>hire-asp-net-developers-in-india" title=".NET">ASP.NET</a>
                                  <a href="<?php echo $site_url; ?>hire-Java-developers" title="Java">Java</a>
                                  <a href="<?php echo $site_url; ?>hire-mern-developers" title="MERN">MERN Stack</a>
                                  <a href="<?php echo $site_url; ?>hire-node-Js-developers" title="Node">Node JS</a>
                                  <a href="<?php echo $site_url; ?>hire-flutter-developer" title="Flutter">Flutter</a>
                                </div>
                                <div class="width-50">
                                  <a href="<?php echo $site_url; ?>hire-angular-js-developers" title="Angular">Angular</a>
                                  <a href="<?php echo $site_url; ?>hire-react-developers" title="React">React</a>
                                  <a href="<?php echo $site_url; ?>hire-vuejs-developer" title="Vue.js">Vuejs</a>
                                  <a href="#" title="Vue.js">Xamarin</a>
                                  <a href="<?php echo $site_url; ?>hire-android-developers">Android</a>
                                  <a href="<?php echo $site_url; ?>hire-iphone-app-developer">iOS</a>
                                  <a href="<?php echo $site_url; ?>hire-react-native-developers" title="React Native">React Native</a>
                                </div>
                              </div>
                            </div>
                           
                            <div class="width-25 ">
                              <div class="hr-list-item">
                                <span class="head">Platforms</span> <span class="hr-arrow-btn"></span>
                              </div>
                              <div class="hr-menu-mega">
                              <a href="<?php echo $site_url; ?>hire-magento-developers" title="Magento">Magento</a>
                              <a href="<?php echo $site_url; ?>hire-shopify-developer" title="Shopify">Shopify</a>
                              <a href="<?php echo $site_url; ?>hire-wordpress-developers" title="Python">Wordpress</a>
                              <a href="<?php echo $site_url; ?>hire-drupal-developers" title="Drupal">Drupal</a>
                              <a href="<?php echo $site_url; ?>cms-development/sitecore-development">SiteCore</a>
                              <a href="<?php echo $site_url; ?>cms-development/kentico-development">Kentico</a>
                              <a href="<?php echo $site_url; ?>mobile-app-development/ionic-app-development">Ionic</a>
                              </div>
                            </div>
                            <div class="width-25">
                              <div class="hr-list-item">
                                <span class="head">Trending</span> <span class="hr-arrow-btn"></span>
                              </div>
                              <div class="hr-menu-mega">
                              <a href="<?php echo $site_url; ?>mobile-app-development/iot-development" title="IOT">IoT Development</a>
                              <a href="<?php echo $site_url; ?>robotic-process-automation-services" class="text-column">RPA</a>
                              <a href="<?php echo $site_url; ?>machine-learning-services-and-solutions" title="ML">Machine-Learning</a>
                              <a href="<?php echo $site_url; ?>blockchain-development">Blockchain</a>
                              <a href="<?php echo $site_url; ?>mobile-app-development/augmented-reality-development" title="AR / VR">AR / VR</a>
                              <a href="<?php echo $site_url; ?>chatbot-development-services">ChatBots</a>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="width-25 last-list padding-40">
                          <div class="hr-list-item">
                            <span class="head">Industries</span> <span class="hr-arrow-btn"></span>
                          </div>
                          <div class="hr-menu-mega">
                            <a href="<?php echo $site_url; ?>healthcare-software-development-services">Healthcare</a>
                            <a href="<?php echo $site_url; ?>travel-tourism-software-development-services">Tours & Tarvel</a>
                            <a href="<?php echo $site_url; ?>banking-financial-software-development-services">Banking & Financial</a>
                            <a href="<?php echo $site_url; ?>banking-financial-software-development-services">Fintech</a>
                            <a href="<?php echo $site_url; ?>logistics-transportation-software-development-services">Logistics & Transportation</a>
                            <a href="<?php echo $site_url; ?>education-elearning-software-development-services">Education- & E-Learning</a>
                            <a href="<?php echo $site_url; ?>retail-ecommerce-software-development-services">Retail & eCommerce</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </li>
            <?php if( !in_array( $mcat, ['demand-teams', 'qa-testing'] ) ) : ?>
            <?php endif; ?>
            <?php             
              if( in_array( $mcat, ['demand-teams'] ) ) :
              ?>
            <li class="menu-item-has-children small-menu for-company">
              <a href="<?php echo $site_url; ?>resources">Resources</a> <span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <a href="<?php echo $site_url; ?>hire-developers/hire-software-developers-india"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon1.svg" class="menuicon" alt="menuicon">Hire Indian Developers </a>
                <a href="<?php echo $site_url; ?>it-outsourcing-services"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon2.svg" class="menuicon" alt="menuicon">IT Outsourcing</a>
                <a href="<?php echo $site_url; ?>how-it-works"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon3.svg" class="menuicon" alt="menuicon">How It Works</a>
                <a href="<?php echo $site_url; ?>benefits-of-hiring-remote-developers"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon4.svg" class="menuicon" alt="menuicon">Hiring Remote Developers</a>
                <a href="<?php echo $site_url; ?>why-india"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon5.svg" class="menuicon" alt="menuicon">Software Development in India</a>
                <a href="<?php echo $site_url; ?>faq"><img src="<?php echo $tpl_url; ?>/menu-images/resources-icon6.svg" class="menuicon" alt="menuicon">FAQs</a>
                <a href="<?php echo $site_url; ?>ratecard"><img src="<?php echo $tpl_url; ?>/menu-images/on-demands-icon2.svg" class="menuicon" alt="menuicon">Ratecard</a>
              </div>
            </li>
            <?php endif; ?>
            <li class="case-stud"><a href="https://www.pixelcrayons.com/case-study/">Case Studies</a></li>
            <?php 
              // Hide Company Menu Is Page Catrgoty is : App Development
              if( $mcat !== "app-development" ) :
              ?>
            <li class="menu-item-has-children small-menu for-company">
              <a href="<?php echo $site_url; ?>about">Company</a><span class="arrow-btn"></span>
              <div class="small-menu-inner menu-mega">
                <a href="<?php echo $site_url; ?>about"><img src="menu-images/company-icon01.svg" class="menuicon" alt="menuicon">About</a>
                <a href="<?php echo $site_url; ?>company/our-team"><img src="menu-images/company-icon02.svg" class="menuicon" alt="menuicon">Our Team</a>
                <a href="<?php echo $site_url; ?>testimonials"><img src="menu-images/company-icon03.svg" class="menuicon" alt="menuicon">Clients & Testimonials</a>
                <a href="<?php echo $site_url; ?>partnership-programme"><img src="menu-images/company-icon04.svg" class="menuicon" alt="menuicon">Partnership Programme</a>
                <a href="<?php echo $site_url; ?>careers"><img src="menu-images/company-icon05.svg" class="menuicon" alt="menuicon">Careers</a>
                <a href="https://www.pixelcrayons.com/blog/" target="_blank"><img src="menu-images/company-icon06.svg" class="menuicon" alt="menuicon">Blog</a>
              </div>
            </li>
            <?php endif; ?>
          
            <li class="contact-nav"><a href="<?php echo $site_url; ?>contact">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <?php endif; ?>
    </div>
  </div>
</header>