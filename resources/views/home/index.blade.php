<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>PubKeys | Home</title>
    <!--mobile apps-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>


    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/prisim.css" rel="stylesheet" type="text/css" media="all">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/prisim.js"></script>
    <script src="js/js.js"></script>
</head>
<body>
<!--banner-->
<div id="home" class="banner">
    <div class="banner-info">

        <div class="banner-text">
            <h1 class="wow slideInLeft animated" data-wow-delay=".5s">PubKeys</h1>
            <p class="wow slideInRight animated" data-wow-delay=".5s">Public keys get smoother </p>
        </div>
        <!--navigation-->
        <div class="top-nav wow">
            <div class="container">
                <div class="navbar-header logo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        Menu
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="menu">
                        <ul class="nav navbar">
                            <li class="menu-item menu-item-current"><a href="#home" class="menu-link scroll">Home</a></li>
                            <li class="menu-item"><a href="#about" class="menu-link scroll">About</a></li>
                            <li class="menu-item"><a href="#services" class="menu-link scroll">Services</a></li>
                            <li class="menu-item"><a href="#work" class="menu-link scroll">Profile</a></li>
                            <li class="menu-item"><a href="#gallery" class="menu-link scroll">Gallery</a></li>
                            <li class="menu-item"><a href="#contact" class="menu-link scroll">Contact</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <!--//navigation-->
    </div>
</div>
<!--//banner-->
<!--welcome-->
<div class="welcome" id="about">
    <div class="container">
        <h2 class="title wow slideInDown animated" data-wow-delay=".5s">Welcome To PubKeys WebSite</h2>
        <div class="col-md-4 welcome-left wow slideInLeft animated" data-wow-delay=".5s">
            <img src="images/generate.png" alt=""/>
        </div>
        <div class="col-md-8 welcome-right wow slideInRight animated" data-wow-delay=".5s">
            <h5>01</h5>
            <h4>Generate</h4>
            <p>generate public key in your computer</p>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-7 welcome-bottom-left wow slideInLeft animated" data-wow-delay=".5s">
            <img src="images/upload.png" alt=""/>
            <h5>02</h5>
            <h4>Upload</h4>
            <p>upload it to pubkeys using your email as identifier</p>
        </div>
        <div class="col-md-5 welcome-bottom-right wow slideInRight animated" data-wow-delay=".5s">
            <div class="welcome-grid-left">
                <img src="images/use.png" alt=""/>
            </div>
            <div class="welcome-grid-right">
                <h5>03</h5>
                <h4>Use</h4>
                <p>use it with our pky commend to add / remove / update keys in your system</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--//welcome-->
<!--services-->
<div class="welcome services" id="services">
    <div class="container">
        <h3 class="title wow fadeInDown animated" data-wow-delay=".5s">How To</h3>
        <div class="services-info">

            <h3 class="codeTitle">example:</h3>
            <pre><code class="language-bash">
                    $server: pubkeys add example@example.com # add the key to the authorized_keys
                    $server: pubkeys add example@example.com -u exampleUser # add the key to the authorized_keys for exampleUser
                </code></pre>
            <h3 class="codeTitle">full usage:</h3>
            <pre class="line-numbers"><code class="language-markup">
                    usage: $NAME command options

                    This script mannages your public keys.

                    Commands:
                    add - Add public key(s) to your authorized_keys file
                    get - Echo public key(s)
                    remove - Remove public key(s) from your authorized_keys file

                    OPTIONS:
                    -h Show this help message
                    -u specify user, default is current user
                    -v Display Version and exit
                </code></pre>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//services-->
<!--work-->
<div class="welcome work" id="work">
    <div class="container">
        <div class="work-info">
            <div class="col-md-3 work-grids work-grd1 wow slideInLeft animated" data-wow-delay=".5s">
                <h3 class="title">Developers</h3>
                <p>the ones who behind this project.</p>
                <p>they believe in:</p>
                <ul>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> Simplicity</li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> Honesty</li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> professionalism</li>
                    <li><span class="glyphicon glyphicon-ok-circle"></span> Drink a lot of coffee</li>
                </ul>
            </div>
            <div class="col-md-3 work-grids wow zoomIn animated" data-wow-delay=".5s">
                <img src="images/biny.png" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Biny</h4>
                        <p>JAVA, PHP, C/C++, Front-End</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 work-grids wow zoomIn animated" data-wow-delay=".5s">
                <img src="images/mordi.png" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Mordi</h4>
                        <p>PHP, SQL, JavaScript, Back-End</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 work-grids wow zoomIn animated" data-wow-delay=".5s">
                <img src="images/eli.png" alt=""/>
                <div class="img-caption">
                    <div class="img-text">
                        <h4>Eli</h4>
                        <p>PHP, C#, ASP.net</p>
                        <p>Back-End</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//work-->
<!--slid-->
<div class="slid">
    <div class="container">
        <h3 class="wow slideInDown animated" data-wow-delay=".5s">Working Hours:<br>
            Monday – Saturday 8:00 a.m – 9:00 p.m <br>
            Sunday 10 a.m – 4 p.m <br>
            <span class="glyphicon glyphicon-earphone"></span> +11 999 8888 7777 </h3>
        <p class="wow fadeInUp animated" data-wow-delay=".5s">Pellentesque ultrices erat ut quam mattis, sed tempus lorem lacinia. Etiam ut diam rhoncus, viverra ipsum eu, semper metus. Quisque commodo maximus sagittis.
            Praesent efficitur quam metus. Duis ac tempor risus. Nulla facilisi. Fusce eget neque bibendum, gravida nibh eget, dignissim erat.</p>
    </div>
</div>
<!--//slid-->
<!--gallery-->
<div id="gallery" class="welcome gallery">
    <div class="container">
        <h3 class="title">Gallery</h3>
        <div class="gallery-info">
            <div class="col-md-6 gallery-grids glry-grid1">
                <div class="gallery-grids-top">
                    <a href="#portfolioModal1" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                        <img src="images/g1.jpg" class="img-responsive" alt=""/>
                        <div class="b-wrapper">
								<span class="b-animate b-from-left">
									<img class="img-responsive" src="images/e.png" alt=""/>
								</span>
                        </div>
                    </a>
                </div>
                <div class="gallery-grids-top">
                    <div class="col-md-6 bottom-grids">
                        <a href="#portfolioModal2" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                            <img src="images/g2.jpg" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
									<span class="b-animate b-from-left">
										<img class="img-responsive" src="images/e.png" alt=""/>
									</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 bottom-grids ">
                        <a href="#portfolioModal3" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                            <img src="images/g3.jpg" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
									<span class="b-animate b-from-left">
										<img class="img-responsive" src="images/e.png" alt=""/>
									</span>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 gallery-grids glry-grid1">
                <div class="gallery-grids-top">
                    <div class="col-md-6 bottom-grids2 ">
                        <a href="#portfolioModal4" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                            <img src="images/g4.jpg" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
									<span class="b-animate b-from-left">
										<img class="img-responsive" src="images/e.png" alt=""/>
									</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 bottom-grids2 ">
                        <a href="#portfolioModal5" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                            <img src="images/g5.jpg" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
									<span class="b-animate b-from-left">
										<img class="img-responsive" src="images/e.png" alt=""/>
									</span>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="gallery-grids-top ">
                    <a href="#portfolioModal6" class="b-link-stripe b-animate-go wow zoomIn animated" data-wow-delay=".5s" data-toggle="modal">
                        <img src="images/g6.jpg" class="img-responsive" alt=""/>
                        <div class="b-wrapper">
								<span class="b-animate b-from-left">
									<img class="img-responsive" src="images/e.png" alt=""/>
								</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- gallery Modals -->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g1.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g2.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g3.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g4.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g5.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="portfolio-container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <h3>Our Gallery</h3>
                                    <hr>
                                    <img src="images/g6.jpg" class="img-responsive img-centered" alt="">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//gallery Modals -->
        </div>
    </div>
</div>
<!--//gallery-->
<!--contact -->
<div class="welcome contact" id="contact">
    <div class="container">
        <h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Contact Us</h3>
        <div class="contact-row">
            <div class="col-md-6 contact-left">
                <iframe class="wow slideInLeft animated" data-wow-delay=".5s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 contact-right wow slideInRight animated" data-wow-delay=".5s">
                <h4>Address:</h4>
                <div class="address-left">
                    <p>Lorem ipsum dolor sit amet conse adipiscing elit. Proin in justo tortoroin consectetur lorem id massa luctus</p>
                </div>
                <div class="address-right">
                    <p>Call us : +11 222 333 4444</p>
                    <p>E-mail : <a href="mailto:info@example.com">mail@example.com</a></p>
                </div>
                <div class="clearfix"></div>
                <!--accordion-->
                <div class="info">
                    <h4>Useful Information :</h4>
                    <ul class="faq">
                        <li class="item1 wow fadeInDown animated" data-wow-delay=".5s"><a href="#"><span class="glyphicon glyphicon-chevron-down"></span> Donec ut quam ligula feugiat</a>
                            <ul>
                                <li class="subitem1"><p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p></li>
                            </ul>
                        </li>
                        <li class="item2 wow fadeInDown animated" data-wow-delay=".5s"><a href="#"><span class="glyphicon glyphicon-chevron-down"></span> The standard Lorem Ipsum passage</a>
                            <ul>
                                <li class="subitem1"><p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p></li>
                            </ul>
                        </li>
                        <li class="item3 wow fadeInDown animated" data-wow-delay=".5s"><a href="#"><span class="glyphicon glyphicon-chevron-down"></span> Consectetuer adipiscing elit</a>
                            <ul>
                                <li class="subitem1"><p>Dincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p></li>
                            </ul>
                        </li>
                        <li class="item4 wow fadeInDown animated" data-wow-delay=".5s"><a href="#"><span class="glyphicon glyphicon-chevron-down"></span> Sed diam nonummy nibh euismod</a>
                            <ul>
                                <li class="subitem1"><p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod </p></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- script for tabs -->
                    <script type="text/javascript">
                        $(function () {

                            var menu_ul = $('.faq > li > ul'),
                                    menu_a = $('.faq > li > a');

                            menu_ul.hide();

                            menu_a.click(function (e) {
                                e.preventDefault();
                                if (!$(this).hasClass('active')) {
                                    menu_a.removeClass('active');
                                    menu_ul.filter(':visible').slideUp('normal');
                                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                                } else {
                                    $(this).removeClass('active');
                                    $(this).next().stop(true, true).slideUp('normal');
                                }
                            });

                        });
                    </script>
                    <!-- script for tabs -->
                </div>
                <!--accordion-->
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-form">
            <h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Get In Touch</h3>
            <p>send us a note, tip, bug and fixes, anyway we like to here from you</p>
            <form class="wow fadeInUp animated" data-wow-delay=".5s">
                <input type="text" placeholder="Name" required="">
                <input class="email" type="text" placeholder="Email" required="">
                <input type="text" placeholder="Phone" required="">
                <textarea placeholder="Message" required=""></textarea>
                <input class="wow zoomIn animated" data-wow-delay=".5s" type="submit" value="SUBMIT">
            </form>

        </div>
    </div>
</div>
<!--//contact -->
<!--footer-->
<div class="welcome footer">
    <div class="container">
        <div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>Thanks</h3>
            <p><a href="https://msby.org">msby.org</a></p>
            <p><a href="http://msby.net">msby.net</a></p>
            <p><a href="http://yawitz.net">yawitz.net</a></p>
            <p><a href="http://stuff-group.com">stuff-group.com</a></p>
            <p></p>
            <p></p>
        </div>
        <div class="col-md-3 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>Privacy Policy</h3>
            <p>fffeqf </p>
        </div>
        <div class="col-md-5 footer-grids wow fadeInRight animated" data-wow-delay=".5s">
            <h3>Terms Of Use</h3>
            <p>license under MIT + all of the services are provide AS IS</p>
        </div>
        <div class="clearfix"></div>
        <div class="footer-copy wow slideInUp animated" data-wow-delay=".5s">
            <p>© {{ Date('Y') }} PubKeys. All rights opens | Design by <a href="http://w3layouts.com">W3layouts</a> | Graphics by <a href="http://www.freepik.com/">FreePik.com</a></p>
        </div>
    </div>
</div>
<!--//footer-->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>
</html>