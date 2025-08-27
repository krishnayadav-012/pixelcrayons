<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top IT & Software Outsourcing Company in India - @PixelCrayons</title>
    <meta name="description"
      content="PixelCrayons, An award winning software outsourcing company in India having 17+ YRS of experience and offers best offshore software development in India." />
    <meta name="keywords"
      content="software outsourcing company, offshore software company, IT outsourcing company, software outsourcing firm, offshore software firm, software outsourcing firm in India, software outsourcing company in India" />
    <meta property="og:title" content="Top IT & Software Outsourcing Company in India - @PixelCrayons" />
    <?php require_once 'assets/include/header-files.php'; ?>
    <link rel="preload stylesheet" type="text/css" href="assets/css/roi-calculator.css" defer />
  </head>
  <body id="themeAdd" class="home">
    <?php require_once 'assets/include/menu-v4.php'; ?>
    <section class="calculator-section" id="seo-calculator">
      <div class="container">
        <div class="calc-banner-content">
          <h1>What's Your SEO Score?</h1>
          <p>Enter the URL of any landing page or blog article and see how optimized it is for one keyword or phrase..</p>
          <div class="calc-wrapper">
            <div class="calculator-card">
              <div class="form-wrapper">
                <form id="seoForm" class="seo-form">
                  <div class="cpc-form-group">
                    <input type="text"  class="calc-field" name="url" placeholder="http://" required />
                  </div>
                  <div class="cpc-form-group">
                    <input type="text" name="keyword" class="calc-field" placeholder="Keyword" required />
                  </div>
                  <div class="cpc-form-group"> <input type="email" class="calc-field" name="email" placeholder="Email" required /></div>
                  <div class="cpc-form-group"> <button type="submit" class="calc-btn">Scan Now</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Scanning Modal -->
    <div class="modal" id="scanModal">
      <div class="modal-box">
        <h2>We’re Scanning</h2>
        <p>(Takes about 15 seconds)</p>
        <div class="progress-bar">
          <div class="progress-fill" id="progressFill"></div>
        </div>
        <span id="progressText" class="progressText">0%</span>
      </div>
    </div>
    <!-- Success Modal -->
    <div class="modal" id="successModal">
      <div class="modal-box">
        <h2>We’ll email it to you shortly!</h2>
        <button id="closeBtn" class="btnclose">Close</button>
      </div>
    </div>
    <section class="seo-features  padding-t-70 padding-b-70">
      <div class="container">
        <div class="top-section b-100">
          <h2>Free Website SEO Audit Score Reporting</h2>
          <p>Most powerful website reporting software provides guidance and recommendations throughout the entire website analyzing process for effective SEO Audit score.  Our tool will give you a 72 point check on the SEO factors most negatively or positively affecting your website.</p>
        </div>
        <div class="feature-grid">
          <div class="feature-card">
            <span class="label">SEO Audit Score</span>
            <h3>Scanning the server & website</h3>
            <p>Analyze the server and website coding for best technical SEO practices such as crawlability, site speed, and indexation.</p>
          </div>
          <div class="feature-card">
            <span class="label">On-Page & Off-Page SEO Score Factors</span>
            <h3>Analyze On-Page & Off-Page factors</h3>
            <p>Review all internal & external factors for the given keywords so you know which keywords your primary website pages are optimized for.</p>
          </div>
          <div class="feature-card">
            <span class="label">Audit a page & find the gap for improvement</span>
            <h3>Find the gap for improvement</h3>
            <p>Find the missing parts of the element for better rankings.</p>
          </div>
          <div class="feature-card">
            <span class="label">SEO Audit Score Report</span>
            <h3>Full Report Of Our Findings</h3>
            <p>We will send you a full report within a minute of your scan. It’s free of charge. Learn how well optimized your site is today.</p>
          </div>
        </div>
      </div>
    </section>
    <?php require_once 'assets/include/blog-footer.php'; ?>
    <script>
      if (document.getElementById("seo-calculator")) {
      window.addEventListener("load", function () {
      
      // DOM Elements
      const form = document.getElementById("seoForm");
      const scanModal = document.getElementById("scanModal");
      const successModal = document.getElementById("successModal");
      const closeBtn = document.getElementById("closeBtn");
      const progressFill = document.getElementById("progressFill");
      const progressText = document.getElementById("progressText");
      
      // Initializes form submission listener
      function initSeoForm() {
       form.addEventListener("submit", handleFormSubmit);
       closeBtn.addEventListener("click", closeSuccessModal);
      }
      
      // Handles form submission
      function handleFormSubmit(e) {
       e.preventDefault();
       showScanModal();
       startScanProgress(() => {
         hideScanModal();
         showSuccessModal();
         form.reset();
       });
      }
      
      // Show scan modal
      function showScanModal() {
       scanModal.classList.add("show");
       updateProgress(0);
      }
      
      // Hide scan modal
      function hideScanModal() {
       scanModal.classList.remove("show");
      }
      
      // Show success modal
      function showSuccessModal() {
       successModal.classList.add("show");
      }
      
      // Close success modal
      function closeSuccessModal() {
       successModal.classList.remove("show");
      }
      
      // Update progress UI
      function updateProgress(percent) {
       progressFill.style.width = `${percent}%`;
       progressText.textContent = `${percent}%`;
      }
      
      // Start scanning simulation
      function startScanProgress(onComplete) {
       let progress = 0;
       const interval = setInterval(() => {
         if (progress >= 100) {
           clearInterval(interval);
           onComplete();
         } else {
           progress += 2;
           updateProgress(progress);
         }
       }, 300); // ~15s total
      }
      
      // Initialize everything
      initSeoForm();
      });
      }
      
         
                      
                   
             
    </script>
  </body>
</html>