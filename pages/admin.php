<?php
include 'libphp/User.php';

if (empty($_SESSION['user'])){
    header('Location: /');
    exit();
}else{
    if (!$_SESSION['user']->roots){
        echo '<h1 class="error-text" style="font-size: 22px;">You have no roots for this page!</h1>';
    }
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

<div class="content">
    <div class="user-list container">
    <?php

    $user_obj = new User();
    $users = $user_obj->getUsers();

    foreach ($users as $user){
        ?>

        <div class="user-list-item" data-user-id="<?php echo $user->id?>">

            <div class="user-id">
                <span>#<?php echo $user->id?></span>
            </div>
            <br>
            <label>
                <span>Fio</span>
                <input type="text" class="form-control name-admin user-edit-field" name="name-admin" value="<?php echo $user->fio?>">
            </label>

            <label>
                <span>Phone</span>
                <input type="text" class="form-control phone-admin user-edit-field" name="phone-admin" value="<?php echo $user->phone?>">
            </label>

            <label>
                <span>Email</span>
                <input type="text" class="form-control email-admin user-edit-field" name="email-admin" value="<?php echo $user->email?>">
            </label>

            <label>
                <span>Roots</span>
                <input type="checkbox" class="form-control roots-admin user-edit-field" name="roots-admin" <?php echo $user->roots ? 'checked': ''?>>
            </label>

            <label>
                <span>Password</span>
            <input type="text" class="form-control password-admin user-edit-field" name="password-admin" value="<?php echo $user->password?>">
            </label>

        </div>
        <?php
    }
    ?>
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

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="index.js"></script>


</body>
</html>