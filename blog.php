<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/mukti/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2025 11:30:51 GMT -->

<?php


require 'components/header.php';
require 'koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM blog");

?>

<body>
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- ========== Mobile-nav section start here ========== -->
    <?php
    require 'components/mobile.php';
    ?>
    <!-- ========== Mobile-nav section end here ========== -->


    <!-- ==========Header Section Starts Here========== -->
    <?php
    require 'components/navbar.php';
    ?>
    <!-- ==========Header Section Ends Here========== -->


    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section service-title style-1"
        style="background-image: url(assets/assets/images/pageheader/pageheader.jpg)">
        <div class="page-header-content">
            <div class="container">
                <div class="page-header-content-inner">
                    <div class="page-title">
                        <h2>Blog</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Blog Section start Here========== -->
    <section class="blog-section padding-tb">
        <div class="container">
            <div class="main-blog">
                <div class="row">
                    <?php
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <div class="col-lg-8 col-12">
                            <div class="blog-wrapper">
                                <div class="post-item">
                                    <div class="post-item-inner">
                                        <div class="post-thumb">
                                            <a href="detail.php?id_blog=<?= $d['id'] ?>"><img src="assets/assets/images/blog/04.jpg" alt="blog"></a>
                                        </div>
                                        <div class="post-content">
                                            <span class="meta">
                                                <a href="#"></a>
                                                20 Maret, 2025</span>
                                            <h3><a href="detail.php?id_blog=<?= $d['id'] ?>"><?= $d['nama_blog'] ?></a></h3>
                                            <p><?= substr($d['isi'], 0, 300) . " ..."   ?>.</p>
                                        </div>
                                        <div class="blog-footer">
                                            <a href="detail.php?id_blog=<?= $d['id'] ?>" class="viewall">Read More <i
                                                    class="icofont-double-right"></i></a>
                                            <div class="right">
                                                <a href="#" class="blog-comment"><i class="icofont-comment"></i> 2
                                                    <span class="d-none d-sm-inline-block">Comments</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="pagination-area pb-0  d-flex flex-wrap justify-content-center">
                            <ul class="pagination  d-flex flex-wrap m-0">
                                <li class="prev"><a href="#"><i class="icofont-double-left"></i></a></li>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#" class="">2</a></li>
                                <li><a href="#" class="d-none d-sm-block">3</a></li>
                                <li class="next"><a href="#"><i class="icofont-double-right"></i></a></li>
                            </ul>
                        </div> -->

                        </div>
                    <?php
                    }
                    ?>
                    <!-- <div class="col-lg-4 col-12 sticky-widget">
                        <div class="single-sidebar">
                            <div class="popular-post-widget bg-color p-30">
                                <div class="widget-title">
                                    <h3>Post Category</h3>
                                </div>
                                <div class="widget-wrapper">
                                    <ul>
                                        <li>
                                            <div class="post-content">
                                                <h6><a href="#">Foula Revunr Andin Mare Ngern Tache Create</a></h6>
                                                <span class="meta">March 24, 2021</span>
                                            </div>
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/assets/images/blog/popular/01.jpg"
                                                        alt="popular"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-content">
                                                <h6><a href="#">Revunr Andin Mare Ngern Tache Create Fanny</a></h6>
                                                <span class="meta">March 24, 2021</span>
                                            </div>
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/assets/images/blog/popular/02.jpg"
                                                        alt="popular"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-content">
                                                <h6><a href="#">Andin Mare Ngern Tache Create Medical Psd</a></h6>
                                                <span class="meta">March 24, 2021</span>
                                            </div>
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/assets/images/blog/popular/03.jpg"
                                                        alt="popular"></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-content">
                                                <h6><a href="#">Foula Revunr Andin Mare Tache Create Fanny</a></h6>
                                                <span class="meta">March 24, 2021</span>
                                            </div>
                                            <div class="post-thumb">
                                                <a href="#"><img src="assets/assets/images/blog/popular/04.jpg"
                                                        alt="popular"></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <div class="gellary-widget bg-color p-30">
                                <div class="widget-title">
                                    <h3>Mukti Archives</h3>
                                </div>
                                <div class="widget-wrapper">
                                    <ul>
                                        <li><a href="#"><img src="assets/assets/images/gellary/01.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/02.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/03.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/04.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/05.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/06.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/07.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/08.jpg" alt="gellary"></a></li>
                                        <li><a href="#"><img src="assets/assets/images/gellary/09.jpg" alt="gellary"></a></li>
                                    </ul>
                                </div>
                            </div>



                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog Section ends Here========== -->


    <!-- ==========Footer  Section Start Here========== -->

    <?php
    require 'components/footer.php';
    ?>

</body>


<!-- Mirrored from labartisan.net/demo/mukti/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2025 11:30:56 GMT -->

</html>