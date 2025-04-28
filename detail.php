<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from labartisan.net/demo/mukti/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2025 11:30:56 GMT -->
<?php
require 'components/header.php';
require 'koneksi.php';

$id_blog = $_GET['id_blog'];
$blog = mysqli_query($koneksi, "SELECT * FROM blog where id = $id_blog");
$sql = mysqli_query($koneksi, "SELECT * FROM komentar 
JOIN
user 
ON komentar.id_user = user.id 
JOIN
blog
ON
komentar.id_blog = blog.id
WHERE id_blog = $id_blog
");

$data_blog = mysqli_fetch_assoc($blog);
$data_komentar = mysqli_fetch_assoc($sql);


$jumlah_komen = mysqli_num_rows($sql);

if (isset($_SESSION['login'])) {
    $nama = $_SESSION['user'];
}


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
                        <h2>Blog Single Page</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li class="active">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Blog Section start Here========== -->
    <section class="blog-section padding-tb pb-lg-110">
        <div class="container">
            <div class="main-blog">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog-wrapper">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="assets/assets/images/blog/04.jpg" alt="blog">
                                    </div>
                                    <div class="post-content">
                                        <span class="meta">By <a href="#">Ulfa</a> 20 March, 2025</span>
                                        <h2>Panduan Pola Makan Sehat Untuk Ibu Hamil Dengan Anemia</h2>
                                        <p>Pola makan mencerminkan jenis dan jumlah makanan yang dikonsumsi
                                            seseorang setiap hari. Pola makan yang tidak seimbang dapat menjadi
                                            salah satu penyebab terjadinya anemia pada ibu hamil, terutama akibat
                                            kurangnya asupan makanan yang mengandung zat besi (Yazah et al., 2023). Anemia pada ibu hamil dapat berdampak serius terhadap kesehatan
                                            ibu dan perkembangan janin, karena tubuh memerlukan lebih banyak zat besi untuk mendukung peningkatan volume
                                            darah dan pertumbuhan janin. Oleh karena itu, menerapkan pola makan sehat dan seimbang sangat penting dalam
                                            mencegah dan mengatasi anemia selama kehamilan.</p>
                                        <p>
                                            Penelitian yang dilakukan oleh Liana et al. (2023) mengidentifikasi bahwa pola makan yang tidak sehat berperan terhadap tingginya
                                            kejadian anemia pada ibu hamil. Studi ini menemukan bahwa ibu hamil dengan pola makan kurang baik lebih beresiko mengalami anemia
                                            dibandingkan dengan mereka yang mengomsumsi makanan bergizi seimbang. Oleh karena itu, di anjurkan untuk mengkonsumsi makanan yang
                                            kaya zat besi, seperti daging merah, hati, sayuran hijau, dan kacang-kacangan guna mencegah anemia (Andini et al., 2021). Selain itu
                                            vitamin C dari buah-buahan seperti jeruk dapat membantu meningkatkan penyerapan zat besi dalam tubuh (Alfiah et al., 2024). Suplementasi
                                            zat besi juga direkomendasikan sebagai salah satu dari intervensi gizi untuk mencegah dan mengatasi anemia selama kehamilan. Menurut World
                                            Health Organization (2016) menyarankan mengomsumsi suplemen zat besi harian dengan dosis 30-60 mg zat besi untuk mencegah
                                            anemia akibat defisiensi besi serta mengurangi resiko komplikasi selama kehamilan.
                                        </p>
                                        <h3>Konsep Anemia Pada Ibu Hamil</h3>
                                        <h4>1. Definisi Anemia</h4>
                                        <p>Anemia adalah kondisi di mana jumlah sel darah merah atau kadar hemoglobin (Hb) dalam darah lebih rendah dari nilai normal,
                                            yang menyebabkan berkurangnya kapasitas darah dalam mengangkut oksigen ke jaringan tubuh. Menurut World Health Organization (WHO),
                                            anemia didefinisikan sebagai penurunan kadar Hb kurang dari 12,0 g/dL pada wanita dan kurang dari 13,0 g/dL pada pria. WHO menggunakan
                                            kadar Hb untuk menentukan keparahan/derajat anemia. Pembagian derajat anemia ini terdiri dari anemia ringan, sedang, dan berat. Penge
                                            lompokan ini mempertimbangkan usia, jenis kelamin, status kehamilan, faktor genetik, lingkungan, dan ras. Proses terjadinya anemia sa
                                            ngat bervariasi, tergantung pada penyebab utamanya. Salah satu faktor utama menyebabkan anemia di antaranya adalah ialah kekurangan n
                                            utrisi dan penyerapan nutrisi yang tidak cukup (WHO, 2023). Selain dari asupan nutrisi, kekurangan zat besi juga terjadi karena kehilangan
                                            darah,
                                            gangguan penyerapan, dan terjadinya peningkatan kebutuhan. </p>
                                        <h4>2. Anemia Pada Ibu Hamil</h4>
                                        <p>Anemia pada ibu terjadi ketika kadar hemaglobin (Hb) dalam darah lebih rendah dari batal normal, yang dapat menimbulkan berbagai komplikasi
                                            pada ibu hamil dan janin. Menurut World Health Organization (WHO) anemia pada kehamilan didefinisikan sebagai kondisi di mana kadar hemog
                                            lobin (Hb) kurang dari 11 g/dL, tanpa membedakan antara trimester kehamilan. WHO tidak merekomendasikan batas ambang kadar Hb yang berbed
                                            a berdasarkan trimester kehamilan. Namun, beberapa literatur lain menyebutkan bahwa anemia pada ibu hamil didefinisikan sebagai kadar Hb
                                            kurang dari 11 g/dL pada trimester pertama dan ketiga, serta kurang dari 10,5 g/dL pada trimester kedua (Naconha, 2021). Anemia pada ibu
                                            hamil umumnya disebabkan oleh kekurangan zat besi, asam folat, serta vitamin B12, yang berperan penting dalam pembentukan sel darah merah
                                            yang sehat
                                            (Kementerian Kesehatan RI, 2022). </p>
                                        <p>Anemia dapat menyebabkan kelelahan, pusing, serta gangguan kognitif yang dapat mengganggu aktivitas
                                            sehari-hari ibu hamil. Pada anemia berat, gejalanya bisa lebih parah seperti kesulitan bernafas bahkan saat istirahat,
                                            pembengkakan pada tubuh, serta peningkatan resiko gagal jantung. </p>
                                        <h4>3. Penyebab dan Faktor Resiko Anemia Pada Ibu Hamil</h4>
                                        <p>
                                            Anemia pada ibu hamil umumnya disebabkan oleh kekurangan zat besi, yang berperan penting dalam pembentukan hemaglobin untuk mengangkut oksigen ke seluruh tubuh.
                                            Selain itu, faktor-faktor lain yang berperan dalam terjadinya anemia pada ibu hamil adalah :
                                        </p>
                                        <h6>a. Kekurangan asupan zat besi dan nutrisi lain </h6>
                                        <p>Diet yang tidak seimbang atau kekurangan asam folat, vitamin B12,
                                            dan zat besi dalam makanan dapat menghasilkan anemia
                                            (Suryawan et al., 2023).</p>
                                        <h6>b. Penyakit infeksi dan penyakit kronis</h6>
                                        <p>Infeksi seperti malaria, tubercolosis (TBC), dan HIV/AIDS dapat memicu anemia.
                                            Penyakit ginjal kronis dan gangguan hati juga
                                            dapat menyebabkan anemia akibat gangguan produksi sel darah merah (Wibowo et al., 2021).</p>

                                        <h6>c. Konsumsi makanan yang dapat menghambat penyerapan zat besi serta pola makan yang tidak seimbang </h6>
                                        <p>
                                            Minuman seperti teh, kopi, dan makanan tinggi kalsium dapat menghambat penyerapan zat besi, protein,
                                            dan vitamin dapat meningkatkan resiko anemia (Ana safitri et al., 2022).
                                        </p>

                                        <h6>d. Jarak kehamilan yang terlalu dekat</h6>
                                        <p>
                                            Kehamilan yang terlalu sering tanpa adanya periode pemulihan yang cukup dapat mengurangi
                                            cadangan zat besi ibu, berpotensi menyebabkan anemia
                                            defisiensi zat besi pada kehamilan berikutnya (Mersil, 2021).
                                        </p>

                                        <h6>e. Kondisi medis lainnya</h6>
                                        <p>
                                            Ibu dengan riwayat anemia sebelumya, kelainan darah, gangguan penyerapan zat besi lebih berisiko untuk mengalami
                                            anemia selama kehamilan. Selain itu, faktor genetik dan konsisi medis tertentu, seperti infeksi cacing juga dapat
                                            memengaruhi status zat besi ibu hamil (Suryadinata et al., 2022)
                                        </p>

                                        <h4>4. Dampak Anemia Pada Ibu Hamil Dan Janin </h4>
                                        <p></p>
                                        <h6>a. Dampak Anemia pada Ibu Hamil</h6>
                                        <p>
                                            Ibu hamil yang mengalami anemia berisiko lebih tinggi terhadap berbagai komplikasi, seperti pendarahan antepartum, infeksi setelah
                                            pacapersalinan, kebutuhan transfusi darah, pendarahan postpartum, dan preeklampsia. Selain itu, anemia dapat menyebabkan kelelahan,
                                            sesak nafas, dan penurunan daya tahan tubuh, yang dapat berdampak pada kualitas hidup sehari-hari. Penelitian menunjukkan bahwa anemia
                                            pada ibu hamil
                                            juga dapat meningkatkan resiko komplikasi obstetri dan perinatal (Wibowo et al., 2021).
                                        </p>

                                        <h6>b. Dampak Anemia pada Janin</h6>
                                        <p>Bagi janin, anemia pada ibu dapat menyebabkan pertumbuhan janin terhambat (Intrauterine Growth Restriction/IUGR),
                                            kelahiran prematur, berat badan lahir rendah (BBLR), dan bahkan kematian janin dalam kandungan. Kekuarangan hemaglobin
                                            mengakibatkan suplai oksigen dan nutrisi ke janin berkurang, yang berdampak pada perkembangan organ dan sistem tubuh janin.
                                            Penelitian menunjukkan bahwa anemia pada ibu hamil
                                            meningkatkan resiko BBLR dan IURG (Farhan & Dhanny, 2021).</p>

                                    </div>


                                </div>
                            </div>
                            <h2>VIDEO : </h2>

                            <div class="post-thumb">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/FDH9bo39HaU?si=OoOQoeff2X-6v6B7"></iframe>
                                </div>
                            </div>
                            <br>

                            <div class="post-thumb">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/niCpDfqUJGc?si=XEGcx6OF5YcX6JwF"></iframe>
                                </div>
                            </div>
                            <br>



                            <div id="comments" class="comments">

                                <div class="widget-title">
                                    <h3><?= $jumlah_komen ?> Komen</h3>
                                </div>

                                <?php
                                foreach ($sql as $d) :
                                ?>

                                    <ul class="comment-list">
                                        <li class="comment" id="li-comment-2">
                                            <div class="com-image">
                                                <img alt="" src="assets/assets/images/blog/comment/01.png"
                                                    class="avatar avatar-90 photo" height="90" width="90">
                                            </div>
                                            <div class="com-content">
                                                <div class="com-title">
                                                    <div class="com-title-meta">
                                                        <h4><a href="#" class="url"><?= $d['nama'] ?></a></h4>
                                                        <span> <?= $d['tanggal'] ?> </span>
                                                    </div>
                                                    <span class="reply">
                                                        <a href="#" class="comment-reply-link" onclick="toggleReplyForm(2)">
                                                            <i class="icofont-reply-all"></i> Balas
                                                        </a>
                                                    </span>
                                                </div>
                                                <p> <?= $d['isi_komentar'] ?> </p>

                                                <!-- Form Reply (Tersembunyi Awal) -->
                                                <form id="reply-form-2" class="reply-form" style="display: none;" method="POST">
                                                    <input type="hidden" name="parent_id" value="2">
                                                    <input type="text" hidden x name="user_name" placeholder="Nama" required>
                                                    <textarea name="comment" placeholder="Tulis balasan..." required></textarea>
                                                    <button type="submit">Kirim</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>


                            </div>


                            <?php
                            if (!isset($_SESSION['login'])) {
                            ?>
                                <div id="respond" class="comment-respond">
                                    <div class="add-comment">
                                        <div class="widget-title">
                                            <h3>Silahkan Login Terlebih Dahulu Sebelum Komen !</h3>
                                        </div>
                                        <form action="service/komentar.php" method="post" id="commentform" class="comment-form" novalidate="">
                                            <input class="comment-input" disabled name="author" type="text" value="None"
                                                placeholder="Full Name">
                                            <input class="comment-input" disabled name="email" type="text" value="None"
                                                placeholder="Your Email">
                                            <textarea class="comment-input" disabled id="comment-reply" name="comment" cols="45"
                                                rows="5" placeholder="None" aria-required="true"></textarea>
                                        </form>
                                        <a href="login.php">
                                            <button class="lab-btn" type="submit"><span>LOGIN</span></button>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div id="respond" class="comment-respond">
                                    <div class="add-comment">
                                        <div class="widget-title">
                                            <h3>Silahkan Tinggalkan Komentar : </h3>
                                        </div>
                                        <form action="service/komentar.php" method="post" id="commentform" class="comment-form" novalidate="">
                                            <input class="comment-input" hidden type="text" name="id_user" value="<?= $nama['id'] ?>"
                                                placeholder="Full Name">
                                            <input class="comment-input" hidden type="text" name="id_blog" value="<?= $id_blog ?>"
                                                placeholder="Full Name">

                                            <input class="comment-input" type="text" disabled value=" Nama : <?= $nama['nama'] ?>"
                                                placeholder="Full Name">

                                            <input class="comment-input" type="text" disabled value=" Email : <?= $nama['email'] ?>"
                                                placeholder="Your Email">
                                            <textarea class="comment-input" id="comment-reply" name="isi" cols="45"
                                                rows="5" placeholder="Type Here Message" aria-required="true"></textarea>
                                            <button class="lab-btn" type="submit" name="komentar"><span>Kirim Komentar</span></button>
                                        </form>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12 sticky-widget">
                        <div class="single-sidebar">



                            <!-- <div class="popular-post-widget bg-color p-30">
                                <div class="widget-title">
                                    <h3>Post Category</h3>
                                </div>
                                <div class="widget-wrapper">
                                    <ul>
                                        <li>
                                            <div class="post-thumb">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe src="https://www.youtube.com/embed/s-U5GcMeAbo"></iframe>
                                                </div>
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
                            </div> -->

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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog Section ends Here========== -->

    <script>
        function toggleReplyForm(commentId) {
            var form = document.getElementById("reply-form-" + commentId);
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>



    <!-- ==========Footer  Section Start Here========== -->
    <?php
    require 'components/footer.php';
    ?>
</body>


<!-- Mirrored from labartisan.net/demo/mukti/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2025 11:30:57 GMT -->

</html>