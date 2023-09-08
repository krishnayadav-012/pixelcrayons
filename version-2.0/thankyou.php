<!DOCTYPE html>
<html lang="en">
  <head>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Top IT & Software Outsourcing Company in India - @PixelCrayons</title>
    <meta name="description"
      content="PixelCrayons, An award winning software outsourcing company in India having 17+ YRS of experience and offers best offshore software development in India." />
    <meta name="keywords"
      content="software outsourcing company, offshore software company, IT outsourcing company, software outsourcing firm, offshore software firm, software outsourcing firm in India, software outsourcing company in India" />
    <meta property="og:title" content="Top IT & Software Outsourcing Company in India - @PixelCrayons" />
    <?php require_once '../assets/include/header-files.php'; ?>
	<link rel="preload stylesheet" type="text/css" href="../assets/css/thankyou.min-2.0.css" defer/>

	<style>
		
		#loading {
			display: inline-block;
			width: 50px;
			height: 50px;
			border: 5px solid rgb(26 108 97 / 56%);
			border-radius: 50%;
			border-top-color: #fff;
			animation: spin 1s ease-in-out infinite;
			-webkit-animation: spin 1s ease-in-out infinite;
			position: fixed;
			top: 50%;
			left: 50%;
			z-index: 99;
		}

		@keyframes spin {
		to {
			-webkit-transform: rotate(360deg);
		}
		}

		@-webkit-keyframes spin {
		to {
			-webkit-transform: rotate(360deg);
		}
		}


	</style>
</head>
<body id="themeAdd" class="">
<?//php require_once '../include/menu.php'; ?>

<div id="loading"></div>
<section class="thank-you-box-icon">
         <div class="container">
            <div class="wrap-80 bg-voilet text-center">
               <div class=icon_text>
                  <div class="thank-you-icon">
                     <picture>
                        <source type="image/webp" srcset="images/thumb_thankyou_icon.webp">
                        <source type="image/png" srcset="images/thumb_thankyou_icon.png">
                        <img loading="lazy" src="images/thumb_thankyou_icon.png" alt="Valuecoders" width="166" height="166">
                     </picture>
                  </div>
                  <div class="thank-you-text">
                  <h1>Please Schedule a Call as Per Your Availability</h1>
                     <p>Your enquiry has been accepted and is now being routed to the appropriate member of our staff. Thank you for your interest in our company.</p>
                  </div>
                  <div class="calendly-inline-widget" data-url="<?php echo $calendlyLink; ?>"></div>
                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            </div>
               </div>
            </div>
         </div>
      </section>
<script defer src="js/script.js"></script>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

<script>
	document.onreadystatechange = function() {
		if (document.readyState !== "complete") {
			document.querySelector(
				"body").style.visibility = "hidden";
			document.querySelector(
				"#loading").style.visibility = "visible";
		} else {
			document.querySelector(
				"#loading").style.display = "none";
			document.querySelector(
				"body").style.visibility = "visible";
		}
	};
</script>
</body>
</html>