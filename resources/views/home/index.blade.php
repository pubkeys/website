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
                            <li class="menu-item"><a href="#about" class="menu-link scroll">PubKeys</a></li>
                            <li class="menu-item"><a href="#services" class="menu-link scroll">How To</a></li>
                            <li class="menu-item"><a href="#work" class="menu-link scroll">Developers</a></li>
                            <li class="menu-item"><a href="#gallery" class="menu-link scroll">Submit</a></li>
                            <li class="menu-item"><a href="#profile" class="menu-link scroll">Profile</a></li>
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

<div id="gallery" class="welcome gallery">
    <div class="container">
        <h3 class="title">Submit</h3>

        <form action="{{ url('/') }}">

        </form>
    </div>
</div>

<div id="profile" class="welcome gallery">
    <div class="container">
        <h3 class="title">Profile</h3>

        <form action="{{ url('/') }}">

        </form>
    </div>
</div>
<!--contact -->
<div class="welcome contact" id="contact">
    <div class="container">
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
            <h3>Sponsors</h3>
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
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/prisim.css" rel="stylesheet" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Stint+Ultra+Condensed' rel='stylesheet' type='text/css'>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/prisim.js"></script>
<script src="js/js.js"></script>

</body>
</html>