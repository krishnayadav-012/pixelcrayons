<section class="footer-form-section light-theme padding-t-120 padding-b-120" id="contact-sec">
  <div class="container">
    <div class="dis-flex justify-sb">
      <div class="left-box">
        <div class="soc-box dis-flex items-center">                
          <a href="javascript:void(0);" onclick="consultCTA_cb();"><i><img loading="lazy" src="assets/images/home-images/connect-01.svg" alt="pixelcrayons" width="20" height="20"></i><span>Book A Call</span></a>
          <a href="https://wa.me/918882108080" target="_blank"><i><img loading="lazy" src="assets/images/home-images/connect-02.svg" alt="pixelcrayons" width="20" height="20"> </i><span>WhatsApp</span></a>
          <a href="mailto:sales@valuecoders.com" target="_blank"><i><img loading="lazy" src="assets/images/home-images/connect-03.svg" alt="pixelcrayons" width="20" height="20"></i><span>Email us</span></a>
        </div>
        <div class="award-box">
          <p>Trusted by Startups and Fortune 500 companies</p>
          <div class="row-box">
            <div class="col-box dis-flex">
              <div class="icon"><img loading="lazy" src="assets/images/home-images/cont-01.svg" alt="pixel" width="40" height="40"></div>
              <div class="desp">
                <h4>20+ years of experience</h4>
                <p>We can handle projects of all complexities.</p>
              </div>
            </div>
            <div class="col-box dis-flex">
              <div class="icon"><img loading="lazy" src="assets/images/home-images/cont-02.svg" alt="pixel" width="40" height="40"></div>
              <div class="desp">
                <h4>2500+ satisfied customers</h4>
                <p>Startups to Fortune 500, we have worked with all.</p>
              </div>
            </div>
            <div class="col-box dis-flex">
              <div class="icon"><img loading="lazy" src="assets/images/home-images/cont-03.svg" alt="pixel" width="40" height="40"></div>
              <div class="desp">
                <h4>675+ in-house team</h4>
                <p>Top 1% industry talent to ensure your digital success.</p>
              </div>
            </div>
          </div>
          <div class="client-stack">
            <ul>
              <li>
                <picture><img loading="lazy" src="assets/images/home-images/fot-01.svg" alt="pixelcrayons" width="107" height="60"></picture>
              </li>
              <li>
                <picture><img loading="lazy" src="assets/images/home-images/fot-02.svg" alt="pixelcrayons" width="107" height="60"></picture>
              </li>
              <li>
                <picture><img loading="lazy" src="assets/images/home-images/fot-03.svg" alt="pixelcrayons" width="107" height="60"></picture>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="form-box-outer right-box bg-voilet">
        <form id="contact-form-section" class="contact-form-box">
          <div class="top-section text-left">
            <h2>Book Free Consultation</h2>
            <p>Guaranteed response within 8 business hours.</p>
          </div>
          <div class="form-inner dis-flex">
            <div class="form-text-cont">
              <div class="user-input">
                <label>Full Name*</label>
                <input type="text" autocomplete="off" id="fcont_name" placeholder="Full Name" class="input-field" value="" name="fullname" maxlength="50">
                <small>Error Message</small>
              </div>
            </div>
            <div class="form-text-cont">
              <div class="user-input">
                <label>Email Address*</label>
                <input type="text" autocomplete="off" id="fcont_email" placeholder="Email Address" class="input-field" value="" name="email" maxlength="50">
                <small>Specify your email</small>
              </div>
            </div>
            <div class="form-text-cont">
              <div class="user-input">
                <label>Country*</label>
                <input id="fcont_country" type="text" class="input-field" placeholder="Enter your country" value="" name="user-country" maxlength="50" autocomplete="off">
                <small>Error Message</small>
              </div>
            </div>
            <div class="form-text-cont">
              <div class="user-input">
                <label>Phone Number (Optional)</label>
                <input id="cont_phpne" type="tel" maxlength="12" name="phone" class="input-field flg-input" placeholder="Phone Number">
                <small>Error Message</small>
              </div>
            </div>
            <!--<div class="form-text-cont width-full cont_country_section">
              <div class="phone-flag-box dis-flex">
                  <div class="user-input flag-box">
                      <input id="pcode" tabindex="-1" type="text" name="cprefix"
                          class="pcode-prefix"
                          onkeydown="javascript:if(event.keyCode != 9) return false;"
                          onmousedown="return false;">
                  </div>
                  <div class="user-input phone-box">
              
                      <input id="cont_phpne" type="tel" maxlength="12" name="phone"
                          class="input-field flg-input" placeholder="Phone Number">
                      <small>Error Message</small>
                  </div>
              </div>
              </div>-->
            <div class="form-text-cont width-full">
              <div class="user-input textarea-box">
                <label>Description*</label>
                <div class="input-field">
                  <textarea class="comment-input" placeholder="Project Brief" id="fuser-req" name="requirement"></textarea>
                  <small>Error Message</small>
                  <div class="attachment-box">
                    <div class="drop-input attachment_brw" id="fuploadcontact"></div>
                    <div id="drop-areas" class="drop-area-box">
                      <div class="my-form">
                        <input type="file" class="browse-hide" name="files[]" id="ffileElem" multiple="" accept="image/*,application/pdf,.psd,.zip,.docx,.xlsx,.xls,.txt" onchange="fhandleFiles(this.files)">
                        <button class="browse-btn" id="footer-browse-btn" type="button" onclick="document.getElementById('ffileElem').click()">BROWSE | DROP FILES HERE</button>
                        <input type="hidden" name="up-counter" id="fuplcounter" value="0">
                        <progress style="display:none;" id="fprogress-bar" max="100" value="0"></progress>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="fgloader" class="gal-loader">
            <div class="loader"></div>
            <div id="fgallery" class="gallery"></div>
          </div>
          <span id="ffile-type-error"></span>
          <div class="for-two-col">
            <div class="form-quiz-group">
              <div class="quizQ">
                <span id="f-quizz">2 + 1</span><a href="javascript:void(0);" class="refreshbtn" onclick="fgenerateWsQuizz();"></a>
              </div>
              <span class="equal">=</span>
              <div class="quizAns">
                <input type="text" name="captcha" placeholder="??" id="f-quiz-ans" onkeypress="fcap_limit(event,this);">
                <span class="error" id="fcaptchaerror"></span>
              </div>
            </div>
            <div class="user-input  checkout">
              <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
              <input type="hidden" name="Uploadedfilename" id="fUploadedfilename" value="">
              <input type="hidden" name="frmqueryString" value="">
              <input type="hidden" name="page_url" value="https://www.pixelcrayons.com/staging/">
              <input type="hidden" name="formname" value="footer-form">
              <!--
                <input type="hidden" name="vc_csrf" value="">
                -->
              <div class="btn-container">
                <input type="submit" id="submitButton" class="cta-button checkout-submit" value="Enquire Now">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script>
  const phoneInputField = document.querySelector("#pcode");
  window.intlTelInput(phoneInputField);
  document.addEventListener("DOMContentLoaded", function() {
      let title = document.getElementsByClassName('iti__selected-flag');
      let phoneInp = document.getElementById('pcode');
      title = title[0].getAttribute('title');
      let res = title.replace(/\D/g, "");
      phoneInp.value = '+' + res + ' ';
  });
  document.addEventListener('click', function(event) {
      let phoneInp = document.getElementById('pcode');
      if (event.target.matches('.iti__country')) {
          let title = document.getElementsByClassName('iti__selected-flag');
          title = title[0].getAttribute('title');
          let res = title.replace(/\D/g, "");
          phoneInp.value = '+' + res + ' ';
      }
      event.preventDefault();
  }, false);
  
  const phoneInputFieldSB = document.querySelector("#pcode-sb");
  window.intlTelInput(phoneInputFieldSB);
  document.addEventListener("DOMContentLoaded", function() {
      let title = document.getElementsByClassName('iti__selected-flag');
      let phoneInp = document.getElementById('pcode-sb');
      title = title[0].getAttribute('title');
      let res = title.replace(/\D/g, "");
      phoneInp.value = '+' + res + ' ';
  });
  document.addEventListener('click', function(event) {
      let phoneInp = document.getElementById('pcode-sb');
      if (event.target.matches('.iti__country')) {
          let title = document.getElementsByClassName('iti__selected-flag');
          title = title[0].getAttribute('title');
          let res = title.replace(/\D/g, "");
          phoneInp.value = '+' + res + ' ';
      }
      event.preventDefault();
  }, false);
</script>