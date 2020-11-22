<?php
if (!empty($_POST['submit'])){
    include './libphp/Authorization.php';
    $auth = new Authorization();
    $is_authorized = $auth->authorize($_POST);
    if ($is_authorized){
        header('Location: /');
    }
}else{
    $is_authorized = true;
}

?>

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
                            <a href="/registration">Registration</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!------------------ header end --------------------------------->

<div class="content">
    <div class="login-block">
        <form class="login-form" action="/login" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check" style="margin-bottom: 3px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <?php if(!$is_authorized): ?>
                <p class="error-text">Login or password is incorrect!Please try again.</p>
            <?php endif; ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</div>


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