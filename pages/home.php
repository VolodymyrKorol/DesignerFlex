<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
    <title>Design Flex</title>
</head>
<body>

<!------------------ header ------------------------------------->
<header>
    <div class="header-container">
        <div class="container">
            <div class="header-row row">
                <div class="header-logo col-6">
                    <div class="header-logo__item">
                        <a href="/">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="header-burger-wrap col-6">
                    <div class="burger-menu">
                        <span></span>
                    </div>
                </div>
                <div class="header-menu col-6">
                    <nav class="header-menu-container">
                        <div class="header-menu__item">
                            <a href="/" class="current-page">Home</a>
                        </div>
                        <div class="header-menu__item">
                            <a href="/">Works</a>
                        </div>
                        <div class="header-menu__item">
                            <a href="/">About</a>
                        </div>
                        <div class="header-menu__item">
                            <a href="/">Contacts</a>
                        </div>
                        <div class="header-menu__item login-link">
                            <?php if(empty($_SESSION['user'])):?>
                            <a href="/login">Login</a>
                            <?php else:?>
                                <div class="user-account">
                                    <h2>Hello,<?php echo $_SESSION['user']->fio ?></h2>
                                    <a href="/logout">Log out</a>
                                    <?php if ( $_SESSION['user']->roots): ?>
                                        <a href="/admin">Admin panel</a>
                                    <?php endif;?>
                                </div>
                            <?php endif;?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!------------------ header end --------------------------------->


<!------------------ hero ------------------------------------>

<div class="hero">
    <div class="hero-container">
        <div class="hero-overlay">
            <h1>By creating simple and flexible</h1>
        </div>
        <div class="hero-background">
            <img src="img/background-hero.jpg" alt="background">
        </div>
    </div>
</div>

<!------------------ hero end --------------------------------->


<!------------------ latest works  ------------------------------------>

<section class="latest-work index-section">
    <div class="latest-work-container container">
        <div class="section-title">
            <h2>Latest works</h2>
        </div>
        <div class="latest-work-row row">
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-2.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-3.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-2.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-3.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-1.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-1.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-2.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-4.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>
            <div class="latest-work-item">
                <div class="latest-work-item-background " style="background-image: url('img/design-flex-2.jpg')"></div>
                <div class="latest-work-item-overlay">
                    <h3>Title</h3>
                    <a href="/">Show details</a>
                </div>
            </div>

        </div>
    </div>
</section>


<!------------------ latest works end ------------------------------------>



<!------------------ Multimedia  ------------------------------------>
<section class="multimedia index-section">
    <div class="multimedia-container container">
        <div class="multimedia-video">
            <iframe width="100%" height="300px" src="https://www.youtube.com/embed/1wtjyv1lmKc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>


<!------------------ Multimedia end -------------------------------------->


<!------------------ About me -------------------------------------->

<section class="about-me index-section">
    <div class="section-title"><h2>A litte bit about me</h2></div>
    <div class="about-me-container container">
        <div id="about-slider">
            <div class="slider-item">
                <div class="slider-item-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio eos harum sunt voluptatum. Aut consectetur culpa ducimus eligendi enim est fugit illo reprehenderit? Asperiores at beatae consectetur consequuntur? Alias nam recusandae unde vel. Culpa odio provident quam sint totam.</p>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio eos harum sunt voluptatum. Aut consectetur culpa ducimus eligendi enim est fugit illo reprehenderit? Asperiores at beatae consectetur consequuntur? Alias nam recusandae unde vel. Culpa odio provident quam sint totam.</p>
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-container">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A distinctio eos harum sunt voluptatum. Aut consectetur culpa ducimus eligendi enim est fugit illo reprehenderit? Asperiores at beatae consectetur consequuntur? Alias nam recusandae unde vel. Culpa odio provident quam sint totam.</p>
                </div>
            </div>

        </div>
    </div>
</section>



<!------------------ About me end --------------------------------->



<!------------------ Contact --------------------------------->

<section class="contact index-section">
    <div class="section-title"><h2>Contact</h2></div>
    <div class="contact-container container">
        <div class="contact-row row">
            <div class="contact-map col-4">
                <div id="contact-map-location">

                </div>
            </div>
            <div class="contact-info col-8">
                <div class="contact-info-row row">
                    <div class="contact-info-details col-md-6">
                        <ul>
                            <li><p>Address Prospect Shevchenka 10a</p></li>
                            <li><a href="tel: 0979999999">+380999999999</a></li>
                            <li><a href="tel: 0979999999">+380999999999</a></li>
                            <li><a href="tel: 0979999999">+380999999999</a></li>
                        </ul>
                    </div>
                    <div class="contact-info-socials col-md-6">
                        <ul>
                            <li><a href=""><img src="img/pinterest.svg" alt="pinterest"></a></li>
                            <li><a href=""><img src="img/facebook.svg" alt="facebook"></a></li>
                            <li><a href=""><img src="img/twitter.svg" alt="twitter"></a></li>
                            <li><a href=""><img src="img/instagram.svg" alt="instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!------------------ Contact end --------------------------------->



<!------------------ Footer  --------------------------------->
<footer class=" footer index-section">
    <div class="footer-container container">
        <div class="footer-row row">
            <div class="footer-item col-4">
                <ul>
                    <li><h4>Menu</h4></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Works</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>
            <div class="footer-item col-4">
                <ul>
                    <li><h4>Categories</h4></li>
                    <li><a href="">House</a></li>
                    <li><a href="">Flat</a></li>
                    <li><a href="">Garden</a></li>
                    <li><a href="">Garage</a></li>
                </ul>
            </div>
            <div class="footer-item col-4">
                <ul>
                    <li><h4>Projects</h4></li>
                    <li><a href="">Summer garden</a></li>
                    <li><a href="">Sand beach</a></li>
                    <li><a href="">Flat</a></li>
                    <li><a href="">Sound studio</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="copyright">
    <p>&copy;<time>2020</time>, Powered by Volodymyr Korol</p>
</div>


<!------------------ Footer end --------------------------------->
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        var uluru = {lat: 46.460043, lng: 30.750551};
        // The map, centered at Uluru
        var map = new google.maps.Map(
                document.getElementById('contact-map-location'), {zoom: 15, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
</script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkBByjEwvdwvuNXgyndXJE50RpsVA9tAY&callback=initMap">
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="index.js"></script>


</body>
</html>