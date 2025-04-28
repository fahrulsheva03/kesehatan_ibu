<div class="mobile-menu">
    <div class="container">
        <div class="mobile-menu-wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/assets/images/logo/logo.png" alt="Mukti">
                </a>
            </div>
            <div class="open-menu"><i class="icofont-navigation-menu"></i></div>
        </div>
        <nav id="mobile-nav">

            <ul class="depart-nav">
                <li class="depart">
                    <a href="index.php">Home</a>
                </li>
            </ul>
            <ul class="depart-nav">
                <li class="depart">
                    <a href="blog.php">Blog</a>
                </li>
            </ul>
            <ul class="depart-nav">
                <li class="depart">
                    <a href="about.php">About Us</a>
                </li>
            </ul>

            <?php
            if (!isset($_SESSION['login'])) {
            ?>
                <ul class="depart-nav">
                    <li class="depart">
                        <a href="login.php">Login</a>
                    </li>
                </ul>

            <?php
            } else {
            ?>
                <ul class="depart-nav">
                    <li class="depart">
                        <a href=""> Welcome Ulfa</a>
                    </li>
                </ul>
                <ul class="depart-nav">
                    <li class="depart">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            <?php } ?>


        </nav>
    </div>
</div>