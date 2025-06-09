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
    <link rel="preload stylesheet" type="text/css" href="assets/css/content-roi.css" defer />
  </head>
  <body id="themeAdd" class="home">
    <?php require_once 'assets/include/menu-v4.php'; ?>
    <section class="content-marketing-roi">
      <div class="container">
        <div class="calc-banner-content">
          <h1>Content Marketing ROI Calculator</h1>
          <div class="calc-wrapper">
            <div class="calculator-card">
              <div class="form-wrapper">
                <div class="roi-form">
                  <div class="cpc-form-group">
                    <label>What is your Average Monthly Traffic Value per piece of competitor’s content?</label>
                    <input type="number" class="calc-field trafficValue" placeholder="$ 4000">
                    <div class="error-message err-trafficValue"></div>
                  </div>
                  <div class="cpc-form-group">
                    <label>What is your average traffic per piece of competitor’s content?</label>
                    <input type="number" class="calc-field  avgTraffic" placeholder="10000">
                    <div class="error-message err-avgTraffic"></div>
                  </div>
                  <div class="cpc-form-group">
                    <label>How many posts you create monthly?</label>
                    <input type="number" class="calc-field  monthlyPosts" placeholder="2">
                    <div class="error-message err-monthlyPosts"></div>
                  </div>
                  <div class="cpc-form-group">
                    <label>What is your monthly content marketing budget?</label>
                    <input type="number" class="calc-field  monthlyBudget" placeholder="$ 10000">
                    <div class="error-message err-monthlyBudget"></div>
                  </div>
                  <div class="cpc-form-group">
                    <label>What is your current Domain Rating (DR)?</label>
                    <div class="custom-select">
                      <select class="calc-field  dr">
                        <option value="">Choose one</option>
                        <option value="low">Low (0-20)</option>
                        <option value="medium">Medium (21-50)</option>
                        <option value="high">High (51-100)</option>
                      </select>
                    </div>
                    <div class="error-message err-dr"></div>
                  </div>
                  <div class="cpc-form-group">
                    <div class="btn-group">
                      <button class="btn btn-green calculateBtn">Calculator ROI</button>
                      <button class="btn btn-grey resetBtn">Reset</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="seo-result">
    </section>
    <?php require_once 'assets/include/blog-footer.php'; ?>
    <script>
      if (document.querySelector(".content-marketing-roi")) {
        window.addEventListener("load", function () {
          function validateInputs() {
            let valid = true;
            const fields = ['trafficValue', 'avgTraffic', 'monthlyPosts', 'monthlyBudget', 'dr'];
      
            fields.forEach(field => {
              const input = document.querySelector('.' + field);
              const errorDiv = document.querySelector('.err-' + field);
              if (!input.value) {
                input.classList.add('error');
                errorDiv.textContent = 'Please enter a value.';
                valid = false;
              } else {
                input.classList.remove('error');
                errorDiv.textContent = '';
              }
            });
      
            return valid;
          }
      
          function calculateROI() {
            if (!validateInputs()) return;
      
            const trafficValue = Number(document.querySelector('.trafficValue').value);
            const avgTraffic = Number(document.querySelector('.avgTraffic').value);
            const monthlyPosts = Number(document.querySelector('.monthlyPosts').value);
            const monthlyBudget = Number(document.querySelector('.monthlyBudget').value);
            const annualBudget = monthlyBudget * 12;
            const yearlyPosts = monthlyPosts * 12;
            const expectedValue = trafficValue;
            const addedMonthlyValue = monthlyPosts * expectedValue;
            const addedYearlyValue = addedMonthlyValue * 12;
            const addedYearlyTraffic = monthlyPosts * avgTraffic * 12;
            const roi = ((addedYearlyValue - annualBudget) / annualBudget) * 100;
      
            const resultHTML = `
              <div class="result">
             <div class="container">
                <h2>Your <span style="color: #1e88e5">Traffic ROI</span> will be:</h2>
                <h3>${roi.toFixed(2)}%</h3>
              
                <a class="btn">Download results PDF</a>
                </div>
              </div>
              <div class="container">
              <div class="result-grid">
                <div><p>Expected price per post:</p><h2>$${expectedValue.toLocaleString()}</h2></div>
                <div><p>Posts after one year:</p><h2>${yearlyPosts}</h2></div>
                <div><p>Annual content marketing budget:</p><h2>$${annualBudget.toLocaleString()}</h2></div>
                <div><p>Estimated added monthly traffic value in 12 months:</p><h2>$${addedMonthlyValue.toLocaleString()}</h2></div>
                <div><p>Estimated added traffic value to the year after campaign start:</p><h2>$${addedYearlyValue.toLocaleString()}</h2></div>
                <div><p>Estimated added monthly traffic in 12 months:</p><h2>${addedYearlyTraffic.toLocaleString()}</h2></div>
              </div>
              </div>
            `;
      
            document.querySelector('.seo-result').innerHTML = resultHTML;
          }
      
          function resetForm() {
            document.querySelector('.roi-form').reset();
            document.querySelector('.seo-result').innerHTML = '';
            document.querySelectorAll('.error-message').forEach(e => e.textContent = '');
            document.querySelectorAll('input, select').forEach(el => el.classList.remove('error'));
          }
      
          document.querySelector('.calculateBtn').addEventListener('click', calculateROI);
          document.querySelector('.resetBtn').addEventListener('click', resetForm);
        });
      }
    </script>
  </body>
</html>