<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top IT & Software Outsourcing Company in India - @PixelCrayons</title>
    <meta name="description" content="PixelCrayons, An award winning software outsourcing company in India having 17+ YRS of experience and offers best offshore software development in India." />
    <meta name="keywords" content="software outsourcing company, offshore software company, IT outsourcing company, software outsourcing firm, offshore software firm, software outsourcing firm in India, software outsourcing company in India" />
    <meta property="og:title" content="Top IT & Software Outsourcing Company in India - @PixelCrayons" />
    <?php require_once 'assets/include/header-files.php'; ?>
    <link rel="preload stylesheet" type="text/css" href="assets/css/contact.min.css" as="style"/>
</head>

<body id="themeAdd" class="contact-page">

    <header class="contact-header">
        <div class="container">
            <picture>
                <source type="image/webp" srcset="assets/images/logo-black.png">
                <source type="image/png" srcset="assets/images/logo-black.png">
                <img loading="lazy" src="assets/images/logo-black.png" alt="Pixelcrayons" width="142" height="41">
                <img loading="lazy" src="assets/images/hire/logo.svg" alt="Pixelcrayons" width="150" height="35">  
            </picture>
        </div>
    
    </header>

    <section class="contact-us-section main-contact-form padding-t-150 padding-b-150">

        <div class="container">
            <div class="bg-voilet">
                <div class="form-box-outer right-box">
                    <div class="heading text-center">
                        <h1>Contact Us</h1>
                        <p>Let’s talk your business ideas and our expert team help you create the software of your dreams.</p>
                    </div>
                    <form action="#" enctype="multipart/form-data" method="POST">
                        <div class="form-inner dis-flex">
                            <div class="form-text-cont verror">
                                <label for="focusInput">Full Name*</label>
                                <div class="user-input">
                                    <input type="text" id="cont_name" placeholder="Enter your full name" class="input-field" value="" name="user-name" />
                                    <small>Please Fill Name</small>
                                </div>
                            </div>
                            <div class="form-text-cont">
                                <label>Email Address*</label>
                                <div class="user-input">
                                    <input type="text" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$" placeholder="Enter your email address" class="input-field" value="" name="user-email" id="cont_email" />
                                    <small>Please Fill Email</small>
                                </div>
                            </div>

                            <div class="form-text-cont cont_country_section">
                                <label>Country*</label>
                                <div class="user-input">
                                    <input class="input-field input-skype" id="cont_country" type="text" placeholder="Enter your country" value="" name="user-country" />
                                    <small>Please Fill Country</small>

                                    <!-- remove this -->
                                    <div id="cont_countryautocomplete-list" class="autocomplete-items has-data"><div class=""><strong>A</strong>fghanistan<input type="hidden" value="Afghanistan"></div><div class="autocomplete-active"><strong>A</strong>lbania<input type="hidden" value="Albania"></div><div><strong>A</strong>lgeria<input type="hidden" value="Algeria"></div><div><strong>A</strong>ndorra<input type="hidden" value="Andorra"></div><div><strong>A</strong>ngola<input type="hidden" value="Angola"></div><div><strong>A</strong>nguilla<input type="hidden" value="Anguilla"></div><div><strong>A</strong>ntigua &amp; Barbuda<input type="hidden" value="Antigua &amp; Barbuda"></div><div><strong>A</strong>rgentina<input type="hidden" value="Argentina"></div><div><strong>A</strong>rmenia<input type="hidden" value="Armenia"></div><div><strong>A</strong>ruba<input type="hidden" value="Aruba"></div><div><strong>A</strong>ustralia<input type="hidden" value="Australia"></div><div><strong>A</strong>ustria<input type="hidden" value="Austria"></div><div><strong>A</strong>zerbaijan<input type="hidden" value="Azerbaijan"></div></div>

                                </div>
                            </div>

                            <div class="form-text-cont">
                                <label>Phone Number*</label>
                                <div class="user-input">
                                    <input id="phone" type="tel" name="phone" class="input-field" placeholder="Enter your Phone Number">
                                    <small>Please Fill Phone</small>
                                </div>
                            </div>

                            <div class="form-text-cont width-full verror">
                                <label>Message*</label>
                                <div class="user-input">
                                    <textarea class="input-field comment-input" placeholder="Project Brief" id="user-req" name="user-req"></textarea>
                                        <small>Please Fill Requirement</small>
                                        <div class="drop-input attachment_brw" id="uploadcontact">
                                        <div id="dropcontact"></div>
                                    </div>
                                    <div id="drop-area" class="drop-area">
                                        <input type="file" name="files[]" id="fileElem" multiple accept="image/*,application/pdf,.psd,.zip,.docx,.xlsx,.xls,.txt" onchange="handleFiles(this.files)" style="display:none;">								
                                        <button class="button" for="fileElem">BROWSE | DROP FILES HERE</button>
                                        <input type="hidden" name="up-counter" id="uplcounter" value="0">
                                        <progress style="display:none;" id="progress-bar" max=100 value=0></progress>			
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- show-me active -->
                        <div class="gal-loader show-me active">
                            <div class="loader"></div>
                            <div id="gallery" class="gallery">
                                <!-- add -->
                                <div>
                                    <img src="https://www.valuecoders.com/common/images-2/pdf_gy.png" height="55" width="55">
                                    <button type="button" onclick="return removeMe(this,this.value);" value="1651823927_8021509220220119170917MRSAAKANSHA30YFemale.PDF,">X</button>
                                </div>
                            </div>
                        </div>


                        <div class="dis-flex checkout-box">

                            <!--Quiz  -->
                            <div class="form-quiz-group">
                                <div class="quizQ">
                                    <span id="j-quiz"></span>
                                    <a href="javascript:void(0)" class="refreshbtn"
                                        onclick="generateWsQuiz();"></a>
                                </div>
                                <span class="equal">=</span>
                                <div class="quizAns">
                                    <input type="text" name="captcha" placeholder="??" id="j-quiz-ans"
                                        onkeypress="cap_limit(this);">
                                    <span class="error" id="captchaerror"></span>
                                </div>
                            </div>


                            <div class="user-input checkout">
                                <input type="submit" id="submitButton" class="checkout-submit" value="Send your request" />
                            </div>

                        </div>

                        <p class="note">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="our-locations-section">
        <div class="container">
            <div class="form-footer dis-flex">
                <div class="left-block">
                    <a href="mailto:sales@valuecoders.com"> <span class="title">Email Us</span> sales@valuecoders.com</a>
                    <a href="tel:+917042020782"><span class="title">Whatsapp</span> +91 704 202 0782</a>
                </div>
                <div class="mid-block dis-flex">
                    <div class="flex-2">
                        <a href="tel:+917042020782"><span class="title">INDIA</span> +91 704 202 0782</a>
                    </div>
                    <div class="flex-2">
                        <a href="tel:+442032392299"><span class="title">UK</span> +44 20 3239 2299</a>
                    </div>
                    <div class="flex-2">
                        <a href="tel:+14152300123"><span class="title">USA</span> +1 415 230 0123</a>
                    </div>
                    <div class="flex-2">
                        <a href="tel:+61280058080"><span class="title">AUS</span> +61 2 8005 8080</a>
                    </div>
                </div>
                <div class="last-block">
                    <ul>
                        <li><strong>Gurugram :</strong> 2nd Floor, 55P, Sector 44, Gurugram 122003, Haryana</li>
                        <li><strong>Noida :</strong> 3rd Floor, Fusion Square, 5A &amp; 5B, Sector 126, Noida 201303</li>
                        <li><strong>Mohali :</strong> Bestech Business Tower, B- 4th floor 401, Sahibzada Ajit Singh Nagar, Punjab 160062</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="dis-flex justify-sb items-center ">
                    <div class="copyright-left">
                        <p>Copyright © 2021 - 2022 PixelCrayons, All Rights Reserved. A company of Valuecoders.com.</p>
                    </div>
                    <div class="copyright-right">
                        <p><span><picture>
                                <source type="image/webp" srcset="./assets/images/hire/rating.webp">
                                <source type="image/png" srcset="./assets/images/hire/rating.png">
                                <img loading="lazy" src="./assets/images/hire/rating.png" alt="rating">
                                </picture>
                            </span>4.9 out of 5.0 by </p>
                        <p>
                            4643 clients on over 10800+ projects</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<script defer src="assets/js/script.js"></script>
<script src="assets/js/form-validation.js"></script>


</body>

</html>