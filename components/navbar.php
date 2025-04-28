<header class="header-section d-none d-lg-block">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center px-15">
                <div class="header-logo">
                    <a href="index.html" class="logo"><img src="assets/assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <!-- <ul class="header-contact-info d-flex align-items-center">
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/assets/images/header/1.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Number :</span>
                                    <p>+880123456789</p>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/assets/images/header/2.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Email :</span>
                                    <p>Mukti@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <div class="item-inner">
                                <div class="item-thumb">
                                    <img src="assets/assets/images/header/3.png" alt="">
                                </div>
                                <div class="item-content">
                                    <span>Address :</span>
                                    <p>12 North West New York 100</p>
                                </div>
                            </div>
                        </li>
                    </ul> -->
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <nav class="container">
            <div class="primary-menu">
                <div class="menu-area">
                    <div class="row justify-content-between px-15">
                        <ul class="main-menu d-flex">

                            <li><a href="index.php">Home</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="about.php">About Us</a></li>

                        </ul>
                        <ul class="nav-widget d-flex justify-content-between align-items-center">

                            <?php
                            if (!isset($_SESSION['login'])) {
                            ?>
                                <a href="login.php" class="lab-btn">Login
                                </a>
                            <?php
                            } else {
                            ?>

                                <!-- <a href="about.php" class="lab-btn">Aliando
                                </a> -->
                                <a href="logout.php" class="lab-btn">Logout
                                </a>

                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>