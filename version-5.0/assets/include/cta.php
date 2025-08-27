<section class="contact-us-section light-theme">

    <div class="container">
        <div class="dis-flex">
            <div class="left-box">
                <h2>We’d Love To Hear <br> From You</h2>
                <div class="side-dash1 list-box">
                    <h3>Fill up your details</h3>
                    <p>Get Custom Solutions, Recommendations,Estimates. Confidentiality & Same Day Response Guaranteed!
                    </p>
                </div>
                <div class="side-dash2 list-box">
                    <h3>What’s next?</h3>
                    <p>One of our Account Managers will contact you shortly</p>
                    <div class="dis-flex profile-outer">
                        <div class="profile-pic">
                            <picture>
                                <source type="image/webp" srcset="./assets/images/hire/cta-1.webp">
                                <source type="image/png" srcset="./assets/images/hire/cta-1.png">
                                <img loading="lazy" src="./assets/images/hire/cta-1.png" alt="ISO">
                            </picture>
                            <span> Atul </span>
                        </div>
                        <div class="profile-pic">
                            <picture>
                                <source type="image/webp" srcset="./assets/images/hire/cta-2.webp">
                                <source type="image/png" srcset="./assets/images/hire/cta-2.png">
                                <img loading="lazy" src="./assets/images/hire/cta-2.png" alt="ISO">
                            </picture>
                            <span> Aman </span>
                        </div>

                        <div class="profile-pic">
                            <picture>
                                <source type="image/webp" srcset="./assets/images/hire/cta-3.webp">
                                <source type="image/png" srcset="./assets/images/hire/cta-3.png">
                                <img loading="lazy" src="./assets/images/hire/cta-3.png" alt="ISO">
                            </picture>
                            <span> Avi </span>
                        </div>
                        <div class="profile-pic">
                            <picture>
                                <source type="image/webp" srcset="./assets/images/hire/cta-4.webp">
                                <source type="image/png" srcset="./assets/images/hire/cta-4.png">
                                <img loading="lazy" src="./assets/images/hire/cta-4.png" alt="ISO">
                            </picture>
                            <span> Akhil </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-box-outer right-box bg-voilet">
                <form id="contact-form-section" action="https://www.valuecoders.com/sendmail1.php"
                    class="contact-form-section" enctype="multipart/form-data" method="POST">
                    <div class="form-inner dis-flex">
                        <div class="form-text-cont verror">
                            <div class="user-input">
                                <input type="text" autocomplete="off" id="cont_name" pattern="^[a-zA-Z0-9-]"
                                    placeholder="Full Name" class="input-field" value="" name="cont_name" required />
                                <small>Error Message</small>
                            </div>
                        </div>
                        <div class="form-text-cont">
                            <div class="user-input">
                                <input type="text" autocomplete="off" id="cont_email"
                                    pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$"
                                    placeholder="Email Address" class="input-field" value="" name="cont_email" />
                                <small>Error Message</small>
                            </div>
                        </div>
                        <div class="form-text-cont">
                            <div class="user-input">
                                <input type="text" class="input-field" id="cont_phpne" placeholder="Phone Number"
                                    value="" name="cont_phpne" required />
                                <small>Error Message</small>
                            </div>
                        </div>
                        <div class="form-text-cont cont_country_section">
                            <div class="user-input">
                                <input class="input-field input-skype" id="cont_country" type="text"
                                    placeholder="Country" value="" name="cont_country" />
                                <small>Error Message</small>
                            </div>
                        </div>
                        <div class="form-text-cont width-full">
                            <div class="user-input">
                                <textarea class="input-field comment-input" placeholder="Project Brief"
                                    name="texteareacostm"></textarea>
                                <small>Error Message</small>
                                <div class="drop-input attachment_brw" id="uploadcontact">
                                </div>
                                <div id="drop-area" class="drop-area-box">
                                    <div class="my-form">
                                        <input type="file" id="fileElem" multiple
                                            accept=".jpg, .jpeg, .png , .pdf , .docx , .doc"
                                            onchange="handleFiles(this.files)" />
                                        <label class="button-browse" for="fileElem">BROWSE | DROP FILES HERE</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-input checkout">
                        <input type="submit" id="submitButton" class="checkout-submit" value="Enquire Now" />
                    </div>
                </form>

            </div>

        </div>
    </div>

</section>