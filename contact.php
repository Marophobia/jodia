<!DOCTYPE html>
<html lang="en">
<head>

	<!-- metas -->
	<meta charset="utf-8">
	<meta name="author" content="Jodia Energies & Logistics Ltd">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Jodia Energies & Logistics | Get a Quote</title>
	<link rel="canonical" href="https://www.jodiaenergies.com/contact" />
	<meta name="description" content="Speak with our team for quotes, partnerships or support—fast responses guaranteed.">
	<meta name="keywords" content="contact Jodia Energies, request a quote, customer support, oil and gas contact">

	<meta property="og:title" content="Contact Jodia Energies & Logistics | Get a Quote">
	<meta property="og:description" content="Speak with our team for quotes, partnerships or support—fast responses guaranteed.">
	<meta property="og:image" content="https://www.jodiaenergies.com/img/banner/slide-01.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.jodiaenergies.com/contact">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Contact Jodia Energies & Logistics | Get a Quote">
	<meta name="twitter:description" content="Speak with our team for quotes, partnerships or support—fast responses guaranteed.">
	<meta name="twitter:image" content="https://www.jodiaenergies.com/img/banner/slide-01.jpg">

	<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "ContactPage",
 "name": "Contact Jodia Energies & Logistics",
 "url": "https://www.jodiaenergies.com/contact",
 "mainEntity": {
   "@type": "Organization",
   "name": "Jodia Energies & Logistics Ltd",
   "contactPoint": [{
     "@type": "ContactPoint",
     "contactType": "Sales",
     "email": "sales@jodiaenergies.com",
     "telephone": "+234-000-000-0000",
     "areaServed": "NG",
     "availableLanguage": ["en"]
   }]
 }
}
	</script>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png">
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png">

    <!-- plugins -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- search css -->
    <link rel="stylesheet" href="search/search.css">

    <!-- quform css -->
    <link rel="stylesheet" href="quform/css/base.css">

    <!-- scroll -->
    <link rel="stylesheet" href="css/scrollbar.css">

    <!-- theme core css -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>

    <!-- PAGE LOADING
    ================================================== -->
    <div id="preloader"></div>

    <!-- MAIN WRAPPER
    ================================================== -->
    <div class="main-wrapper">

        <!-- HEADER
        ================================================== -->
        <?php include "includes/header.php" ?>


        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section top-position1 bg-img cover-background left-overlay-secondary"
            data-overlay-dark="85" data-background="img/banner/page-title-01.jpg">
            <div class="container">
                <h1>Contact Us</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class="container">
                <div class="contact-us rounded">
                    <div class="row mt-n2-9">
                        <div class="col-lg-7 mt-2-9">
                            <h2 class="text-secondary mb-4 h1">Write Us Something</h2>
                            <?php if (isset($_GET['success']) && $_GET['success'] === '1'): ?>
                            <div class="alert alert-success" role="alert">
                                Thank you! Your message has been sent successfully.
                            </div>
                            <?php elseif (isset($_GET['success']) && $_GET['success'] === '0'): ?>
                            <div class="alert alert-danger" role="alert">
                                Please fill in all required fields correctly and try again.
                            </div>
                            <?php endif; ?>
                            <form class="contact quform" action="mail.php" method="post"
                                enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="name">Your Name <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name"
                                                        placeholder="Your name here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="email">Your Email <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email"
                                                        placeholder="Your email here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="subject">Your Subject <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject"
                                                        placeholder="Your subject here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Contact Number</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone"
                                                        placeholder="Your phone here" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span
                                                        class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3"
                                                        placeholder="Tell us a few words"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->
                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="btn-style1 border-0" type="submit"><span>Send
                                                        Message</span></button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span
                                                    class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 mt-2-9">
                            <div class="contact-details">
                                <div class="row">
                                    <div class="section-title mb-1-9">
                                        <h2 class="h4 text-white">Our Contact Detail</h2>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-info">
                                            <div class="contacts-icon">
                                                <img src="img/icons/icon-05.png" alt="...">
                                            </div>
                                            <div class="contacts-title">
                                                <h5 class="text-white font-weight-600 display-28">Send E-Mail</h5>
                                                <h6 class="text-white font-weight-400">info@jodiaenergies.com</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-info">
                                            <div class="contacts-icon upper">
                                                <img src="img/icons/icon-06.png" alt="...">
                                            </div>
                                            <div class="contacts-title">
                                                <h5 class="text-white font-weight-600 display-28">Call Anytime</h5>
                                                <h6 class="text-white font-weight-400">+234 8108776151</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-info upper2">
                                            <div class="contacts-icon">
                                                <img src="img/icons/icon-04.png" alt="...">
                                            </div>
                                            <div class="contacts-title">
                                                <h5 class="text-white font-weight-600 display-28"> Locations</h5>
                                                <h6 class="text-white font-weight-400">No 2 John Street, Off Benin Warri ByPass, Benin City Edo State, Nigeria</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="follow-company-icon2">
                                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                        <a href="https://www.instagram.com/jodiaenergyandlogistics?utm_source=qr&igsh=MWV6ZmRlb2YxaGdjdQ=="> <i class="fab fa-instagram"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP
        ================================================== -->
        <section class="p-0">
            <div class="container-fuild">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.3305313679625!2d5.682507892059172!3d5.949110578656205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d397ef504b09%3A0x9eb00c88f9d47383!2sBenin-Warri%20Rd!5e0!3m2!1sen!2sng!4v1761813854686!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!-- FOOTER
        ================================================== -->
        <?php include "includes/footer.php" ?>



    </div>

    <!-- SCROLL TO TOP
    ================================================== -->
    <div class="scroll-top-percentage"><span id="scroll-value"></span></div>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="js/popper.min.js"></script>

    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- scroll -->
    <script src="js/jquery.scrollbar.min.js"></script>

    <!-- jquery -->
    <script src="js/core.min.js"></script>

    <!-- search -->
    <script src="search/search.js"></script>

    <!-- custom scripts -->
    <script src="js/main.js"></script>

    <!-- form plugins js -->
    <script src="quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="quform/js/scripts.js"></script>

    <!-- all js include end -->

</body>
</html>