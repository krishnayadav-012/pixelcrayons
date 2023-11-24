<section class="footer-form-section light-theme padding-t-120 padding-b-120" id="contact-sec">
    <div class="container">
        <div class="dis-flex">
            <div class="left-box">
                <h2>We’d Love To Hear <br> From You</h2>
                <div class="side-dash1 list-box">
                    <h3>Fill up your details</h3>
                    <p>Get Custom Solutions, Recommendations, Estimates. Confidentiality & Same Day Response Guaranteed!
                    </p>
                </div>
                <div class="side-dash2 list-box">
                    <h3>What’s next?</h3>
                    <p>One of our Account Managers will contact you shortly</p>

                    <div class="dis-flex profile-outer">
                        <div class="profile-pic">
                            <i class="pic1"></i>
                            <span> Atul </span>
                        </div>
                        <div class="profile-pic">
                            <i class="pic2"></i>
                            <span> Aman </span>
                        </div>

                        <div class="profile-pic">
                            <i class="pic3"></i>
                            <span> Avi </span>
                        </div>
                        <div class="profile-pic">
                            <i class="pic4"></i>
                            <span> Akhil </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-box-outer right-box bg-voilet">
                <form id="contact-form-section" action="https://www.valuecoders.com/sendmail1.php"
                    class="contact-form-box" enctype="multipart/form-data" method="POST">
                    <div class="form-inner dis-flex">
                        <div class="form-text-cont">
                            <div class="user-input">
                                <input type="text" autocomplete="off" id="cont_name" pattern="^[a-zA-Z0-9-]"
                                    placeholder="Full Name" class="input-field" value="" name="cont_name" required />
                                <small>Error Message</small>
                            </div>
                        </div>
                        <div class="form-text-cont verror">
                            <div class="user-input">
                                <input type="text" autocomplete="off" id="cont_email"
                                    pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$"
                                    placeholder="Email Address" class="input-field" value="" name="cont_email" />
                                <small>Specify your email</small>
                            </div>
                        </div>


                        <div class="form-text-cont width-full cont_country_section">
                            <div class="phone-flag-box dis-flex">
                                <div class="user-input flag-box">
                                    <input id="pcode" tabindex="-1" type="text" name="cprefix" class="pcode-prefix"
                                        onkeydown="javascript:if(event.keyCode != 9) return false;"
                                        onmousedown="return false;">
                                </div>
                                <div class="user-input phone-box">
                                    <input type="hidden" id="cont_country" value="in" name="user-country">
                                    <input id="cont_phpne" type="tel" maxlength="12" name="user-phone"
                                        class="input-field flg-input" placeholder="Phone Number">
                                    <small>Error Message</small>
                                </div>
                            </div>
                        </div>




                        <div class="form-text-cont width-full">
                            <div class="user-input textarea-box">
                                <div class="input-field">
                                    <textarea class="comment-input" placeholder="Project Brief"
                                        name="texteareacostm"></textarea>
                                    <small>Error Message</small>
                                    <div class="attachment-box">
                                        <div class="drop-input attachment_brw" id="uploadcontact"></div>
                                        <div id="drop-area" class="drop-area-box">
                                            <div class="my-form">
                                                <input type="file" id="fileElem" multiple
                                                    accept=".jpg, .jpeg, .png , .pdf , .docx , .doc"
                                                    onchange="handleFiles(this.files)" />
                                                <button class="button-browse" for="fileElem">Browse | Drop Files
                                                    Here</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="for-two-col">
                        <div class="form-quiz-group">
                            <div class="quizQ">
                                <span id="j-quiz"></span>
                                <a href="javascript:void(0)" ;="" class="refreshbtn" onclick="generateWsQuiz();"></a>
                            </div>
                            <span class="equal">=</span>
                            <div class="quizAns">
                                <input type="text" name="captcha" placeholder="??" id="j-quiz-ans"
                                    onkeypress="cap_limit(this);">
                                <span class="error" id="captchaerror"></span>
                            </div>
                        </div>
                        <div class="user-input checkout">
                            <input type="submit" id="submitButton" class="checkout-submit" value="Enquire Now" />
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