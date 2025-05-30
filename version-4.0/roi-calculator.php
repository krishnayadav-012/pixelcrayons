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
    <section class="calculator-section">
      <div class="container">
        <div class="calc-banner-content">
          <h1>Digital Marketing ROI Calculators</h1>
          <div class="calc-wrapper">
            <div class="calculator-card">
              <div class="form-wrapper">
                <div class="cpc-form-group">
                  <label for="calculatorSelect">Select Calculator:</label>
                  <div class="custom-select">
                    <select id="calculatorSelect" class="calc-field">
                      <option value="marketingROI">Marketing ROI</option>
                      <option value="digitalAdsROI">Digital Ads ROI</option>
                      <option value="ecommerceROI">E-commerce ROI</option>
                      <option value="socialMediaROI">Social Media ROI</option>
                      <option value="seoROI">SEO ROI</option>
                      <option value="clvROI">Customer Lifetime Value ROI</option>
                    </select>
                  </div>
                </div>
                <div class="cpc-form-group">
                  <div class="description" id="calculatorDescription">
                    Marketing ROI Formula: ((Revenue - Marketing Cost) / Marketing Cost) x 100.<br>
                    Example: If a campaign generates ₹300,000 in revenue and costs ₹100,000, the ROI is 200%.
                  </div>
                </div>
                <div class="cpc-form-group">
                  <label for="revenue">Revenue (INR):</label>
                  <input type="number"  class="calc-field" id="revenue" placeholder="Enter revenue">
                </div>
                <div class="cpc-form-group">
                  <label for="cost">Cost (INR):</label>
                  <input type="number" id="cost" class="calc-field" placeholder="Enter cost">
                </div>
                <div class="cpc-form-group">
                  <button onclick="calculateROI()" class="calc-btn">Calculator ROI</button>
                  <div class="result " id="roiResult">ROI: NaN%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="roi-intro-section padding-t-120 padding-b-120">
      <div class="container">
        <div class="top-section b-100">
          <h2>What is an Online Marketing ROI Calculator?</h2>
          <p>Achieve your project goals with our digital solutions – covering software engineering, digital marketing, ecommerce, and digital transformation.</p>
        </div>
        <div class="roi-wrapper">
          <div class="roi-card">
            <h3>1. Marketing ROI Calculator.</h3>
            <h4>Formula:</h4>
            <p><a href="#">ROI = (Revenue - Marketing Cost) / Marketing Cost × 100</a></p>
            <h4>Explanation:</h4>
            <p>Marketing ROI helps businesses assess the success of their marketing efforts by comparing the revenue generated to the cost incurred.
            </p>
            <h4>Example:</h4>
            <p>A company invests ₹100,000 in a marketing campaign and generates ₹300,000 in revenue:<br>
              ROI = (₹300,000 - ₹100,000) / ₹100,000 × 100 = 200%<br>
              For every ₹1 spent on marketing, the company earned ₹2 in profit.
            </p>
          </div>
          <div class="roi-card">
            <h3>2. Marketing ROI Calculator.</h3>
            <h4>Formula:</h4>
            <p><a href="#">ROI = (Revenue - Marketing Cost) / Marketing Cost × 100</a></p>
            <h4>Explanation:</h4>
            <p>Marketing ROI helps businesses assess the success of their marketing efforts by comparing the revenue generated to the cost incurred.
            </p>
            <h4>Example:</h4>
            <p>A company invests ₹100,000 in a marketing campaign and generates ₹300,000 in revenue:<br>
              ROI = (₹300,000 - ₹100,000) / ₹100,000 × 100 = 200%<br>
              For every ₹1 spent on marketing, the company earned ₹2 in profit.
            </p>
          </div>
          <div class="roi-card">
            <h3>3. Marketing ROI Calculator.</h3>
            <h4>Formula:</h4>
            <p><a href="#">ROI = (Revenue - Marketing Cost) / Marketing Cost × 100</a></p>
            <h4>Explanation:</h4>
            <p>Marketing ROI helps businesses assess the success of their marketing efforts by comparing the revenue generated to the cost incurred.
            </p>
            <h4>Example:</h4>
            <p>A company invests ₹100,000 in a marketing campaign and generates ₹300,000 in revenue:<br>
              ROI = (₹300,000 - ₹100,000) / ₹100,000 × 100 = 200%<br>
              For every ₹1 spent on marketing, the company earned ₹2 in profit.
            </p>
          </div>
          <div class="roi-card">
            <h3>1. Marketing ROI Calculator.</h3>
            <h4>Formula:</h4>
            <p><a href="#">ROI = (Revenue - Marketing Cost) / Marketing Cost × 100</a></p>
            <h4>Explanation:</h4>
            <p>Marketing ROI helps businesses assess the success of their marketing efforts by comparing the revenue generated to the cost incurred.
            </p>
            <h4>Example:</h4>
            <p>A company invests ₹100,000 in a marketing campaign and generates ₹300,000 in revenue:<br>
              ROI = (₹300,000 - ₹100,000) / ₹100,000 × 100 = 200%<br>
              For every ₹1 spent on marketing, the company earned ₹2 in profit.
            </p>
          </div>
        </div>
      </div>
    </section>
    <?php require_once 'assets/include/blog-footer.php'; ?>
    <script>
      const calculatorSelect = document.getElementById('calculatorSelect');
      const description = document.getElementById('calculatorDescription');
      const roiResult = document.getElementById('roiResult');
      
      const descriptions = {
       marketingROI: `Marketing ROI Formula: ((Revenue - Marketing Cost) / Marketing Cost) x 100.<br>Example: If a campaign generates ₹300,000 in revenue and costs ₹100,000, the ROI is 200%.`,
       digitalAdsROI: `Digital Ads ROI = (Revenue from Ads - Ad Spend) / Ad Spend x 100`,
       ecommerceROI: `E-commerce ROI = (Net Profit / Total Investment) x 100`,
       socialMediaROI: `Social Media ROI = (Revenue - Costs) / Costs x 100`,
       seoROI: `SEO ROI = (SEO Revenue - SEO Cost) / SEO Cost x 100`,
       clvROI: `Customer Lifetime Value ROI = (CLV - Acquisition Cost) / Acquisition Cost x 100`
      };
      
      calculatorSelect.addEventListener('change', () => {
       description.innerHTML = descriptions[calculatorSelect.value] || '';
      });
      
      function calculateROI() {
       const revenue = parseFloat(document.getElementById('revenue').value);
       const cost = parseFloat(document.getElementById('cost').value);
      
       if (!isNaN(revenue) && !isNaN(cost) && cost !== 0) {
         const roi = ((revenue - cost) / cost) * 100;
         roiResult.textContent = `ROI: ${roi.toFixed(2)}%`;
         roiResult.classList.add('success');
       } else {
         roiResult.textContent = 'ROI: NaN%';
         roiResult.classList.remove('success');
       }
      }
        
        
        
                     
                  
            
    </script>
  </body>
</html>