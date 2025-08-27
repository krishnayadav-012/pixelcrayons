<div id="formPopup" class="popup-wrapper">
  <div class="popWrap">
    <div class="popup-content">
      <span class="closeicon" onclick="closebacForm();"></span>
      <div class="banner-form-section">
        <div class="form-content-box">
          <div class="headingsec">
            <h2>Share Your Requirements</h2>
            <p>We'll get back to you shortly!</p>
          </div>
          <div class="banner-form-outer">
            <form id="hireform" action="https://www.pixelcrayons.com/sendmail1.php" name="hireform" enctype="multipart/form-data" method="post" class="request-quote-form" onsubmit="vcCmnFormValidation(); return false;">
              <div class="form-inner dis-flex">
                <div class="form-head-cont">
                  <div class="user-input">
                    <input type="text" autocomplete="off" id="cont_name" class="input-field" value="" placeholder="Full Name" name="fullname">
                    <small></small>
                  </div>
                </div>
                <div class="form-head-cont">
                  <div class="user-input">
                    <input type="text" id="cont_email" autocomplete="off" class="input-field" value="" placeholder="Email Address" name="email" maxlength="50">
                    <small></small>
                  </div>
                </div>
                <div class="form-head-cont">
                  <div class="user-input">
                    <input type="tel" autocomplete="off" maxlength="12" class="input-field" id="input_phpne" value="" placeholder="Phone Number" name="phone">
                    <small></small>
                  </div>
                </div>
                <div class="form-head-cont cont_country_section">
                  <div class="user-input">
                    <input id="cont_country" type="text" class="input-field" value="" name="user-country" placeholder="Country" maxlength="50" autocomplete="off">
                    <small></small>
                  </div>
                </div>
                <div class="form-head-cont drop-box width-full">
                  <div class="user-input">
                    <textarea class="input-field comment-input" name="requirement" autocomplete="off" id="user-req" placeholder="Your Requirements"></textarea>
                    <small>Error Message</small>
                  </div>
                </div>
                <div id="gloader" class="gal-loader">
                  <div class="loader"></div>
                  <div id="gallery" class="gallery"></div>
                </div>
                <span id="file-type-error"></span>
                <div class="text-center form-btn">
                  <input type="hidden" id="g-recaptcha-response2" name="g-recaptcha-response">
                  <input type="hidden" name="Uploadedfilename" id="Uploadedfilename" value="">
                  <input type="hidden" name="frmqueryString" value="">
                  <input type="hidden" name="page_url" value="https://www.pixelcrayons.com/hire-smo-expert">
                  <input type="hidden" name="formname" value="hire-form">
                  <input type="hidden" name="is-bookcall" value="1">
                  <button type="submit" id="submithireform" class="hire-banner-form-btn">Hire our Experts</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>