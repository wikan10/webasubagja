<?php require "header.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include A-Frame library -->
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/mayognaise/aframe-zoom-look-controls/v2.0.3/dist/aframe-zoom-look-controls.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="font.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title>A Subagja</title>
    <style>
    .carousel li {
        margin-bottom: 80px;
    }

    .carousel-caption {
        margin-bottom: 250px;
    }

    .filters {
        margin-top: -50px;
    }

    .filters .filter-box {
        width: 100%;
        height: auto;
        border-radius: 10px;
        background-color: rgb(231, 231, 231);
        box-shadow: 0 4px 8px 0 rgba(98, 98, 98, 0.8), 0 6px 20px 0 rgba(100, 100, 100, 0.6);
        position: relative;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-"] {
        padding-left: 3px;
        padding-right: 3px;
        margin-bottom: 6px;
    }

    .banner .img {
        width: 100%;
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        background-color: rgb(41, 41, 41, 0.7);
    }

    #box,
    #box-b {
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    #box::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 15px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box-b::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 25px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box:hover::after,
    #box-b:hover::after {
        top: 75%;
    }

    .item:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 3px 10px 0 rgba(0, 0, 0, 0.4);
    }
</style>
</head>
<body>
    <section>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <div style="width: 100%; height: 615px; margin: auto;">

    <!-- script clicking -->
    <script>
    AFRAME.registerComponent('cursor-listener', {
        init: function () {
            var el = this.el;
            var sceneRotation = document.querySelector('a-scene').getAttribute('rotation');
            
            

            el.addEventListener('click', function () {
                // Log a message when the button is clicked
                console.log('Button clicked!');
                infoImage.setAttribute('visible', 'true');
            });
        }
    });
</script>
    <a-scene embedded style="width: 100%; height: 100%;" mouse-cursor>
  <!-- Cursor component with type set to mouse -->
  <a-entity cursor="rayOrigin: mouse"></a-entity>
  <!-- 360 Image -->
  <a-entity rotation="0 180 0" animation="property: rotation; to: 0 360 0; loop: true; dur: 70000; easing: linear;">
    <!-- Sky (360 Image) -->
    <a-sky src="21.jpg"></a-sky>
    <!-- Non-Rotating Logo -->
    <a-image src="assets\img\images\logo.png" position="0 2 5" scale="-1 1 1" width="8" height="2"></a-image>
    <a-image id="infoImage" src="assets\img\images\tv.png" rotation="0 -60 0"width="2" height="1" position="-10 3.5 7" scale="-3 3 3" visible="false"></a-image> 
    <!-- Clickable entity -->
    <a-entity position="-14 3.5 3" scale="-1 1 1" rotation="0 -90 0" cursor-listener>
      <a-image src="assets\img\images\info.png" width="2" height="2"></a-image>
    </a-entity>
    </a-entity>
  <!-- Click listener component --> 
    </a-scene>


        </div>
        <!-- <div class="carousel-caption">
            
        </div>
    </div>

 
    <div class="carousel-item">
        <img class="d-block" src="assets/img/7.jpeg" alt="Second slide" width="100%" height="615px">
        <div class="carousel-caption">
           
        </div>
    </div>

    <div class="carousel-item">
        <img class="d-block" src="assets/img/13.jpg" alt="Third slide" width="100%" height="615px">
        <div class="carousel-caption"> -->
            <!-- <h3>New York</h3>
                <p>We love the Big Apple!</p> -->
        </div>
    </div>

    <!-- Controls -->
    <!-- <div class="aaa">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div> -->


<!-- <div class="filters">
    <div class="container filter-box">
        <div class="row pt-4">
            <div class="col-12">
                <form action="">
                    <div class="input-group">
                        <input class="form-control" width="100%" type="text" name="select" placeholder="Search"
                            style="border-radius: 4px;">
                        <span class="input-group-btn ml-2">
                            <button class="btn btn-warning pl-5 pr-5" type="submit" name="cari"
                                id="addressSearch">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
</div> -->
    </section>
<!-- /.container -->
<section data-aos="fade-up" data-aos-duration="800" class="custom-background" style="background-image: url('assets/img/PNGs/Lamps.png'); background-size: 540px; background-position: top right; background-repeat: no-repeat; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);">
<div>
    <img src="assets/img/icon/tamu.png" height="45px" width="45px">
</div>
<div class="container bg-white rounded">
    
    <div class="atas">
        <div class="row mb-4">
            <div class="col-12 text-secondary">
                <?php 
                if (isset($_GET['select'])) {
                    $cari = $_GET['select'];
                    echo "<h4><i>Hasil pencarian : ".$cari."</i></h4>";
                }
                ?>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <?php
            if (isset($_GET['select'])) {
                $cari = $_GET['select'];
                $query="SELECT * FROM tbl_pos WHERE judul LIKE '%".$cari. "%'ORDER BY id_pos desc";
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_assoc($result)) {
                $tgl = $data['tgl'];
                $kalimat= $data['isi'];
                $huruf_maksimal=110;
                $hasil=substr($kalimat, 0, $huruf_maksimal);
        ?>
            <div class="col-md-6 p-3">
                <div class="">
                    <img src="admin/assets/images/foto_pos/<?php echo $data['gambar'];?>" height="320px" width="100%"
                        alt="...">
                </div>
                <h5 class="mt-2">
                    <a href="detail-postingan.php?id=<?php echo $data['id_pos'] ?>" class="font-weight-bold text-dark"
                        style="text-decoration: none;"><?php echo $data['judul']; ?></a>
                </h5>
                <hr align="left" class="mb-1" style="width: 20%;">
                <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i>
                    <?php echo date("F d, Y", strtotime($tgl)); ?>
                </p>
                <div class="text-justify"><?php echo $hasil.' . . .'; ?></div>
            </div>
            <?php }} ?>
        </div>
        <div class="row">
            <div class="col text-center">
                <h3 class="fontpp2"><span class="">Ada apa di </span><span class="text-warning" style="display: inline-block; background-color: rgb(33, 33, 33); padding: 5px 10px; ">A Subagja?</span></h3>
                <p class="fontpp">A Subagja menciptakan furnitur dan produk dekoratif buatan tangan berkualitas tinggi yang dirancang khusus untuk ruangan sesuai keinginan anda. A Subagja menghadirkan rangkaian produk yang berbeda dari filosofi desain arus utama dalam hal estetika, fungsionalitas, dan juga daya tahan.</p>
            </div>
        </div>

        <div class="container-fluid justify-content-center">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="image-box">
                <img src="assets/img/homeprev/image2.png" alt="Image 2">
            </div>
            <div class="caption" >Ruang studio Full Furnish.</div>
        </div>
        <div class="col-md-5">
            <div class="image-box justify-content-center">
                <img src="assets/img/homeprev/image3.png" alt="Image 1">
            </div>
            <div class="caption" >Lemari dengan backlit mirror.</div>
        </div>
        
        <style>
    .nav-link {
        text-decoration: none;
        position: relative;
        color: black; /* Set your desired text color */
        transition: color 0.3s, background-position 0.3s;
    }

    .nav-linka:hover {
        color: blue; /* Set your desired text color on hover */
        background: linear-gradient(to right, transparent 50%, rgb(214, 214, 214));
        background-size: 200% 100%;
        background-position: -100% 0;
    }
</style>
        <div class="row">
            <div class="col text-center mt-5 mb-5">
                <h3 class="fontpp2"><a class="nav-linka text-black" href="gallery.php" style="color: black;">Lihat selengkapnya di menu Gallery >></a></h3>
            </div>
        </div>  

    </div>
                </div>
   <!-- disini if we need it back. -->
    </div>
</div>
                </section>

                <div class="row text-center" style="padding: 3rem 0;">
<div class="col-12 mb-4 pb-3">
<h2 class="display-7 text-center mb-6 ">Tahapan bekerja sama dengan kami</h2>
</div>
<div class="card-service col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="800" >
    <a class="bot-space" href=""></a> <img class="lazyloaded mb-2" src="assets/img/icon/contact.png" width=55px>
<div class="text-dark">
<h4 class="center-service">Kontak kami</h4>
<p>Kami akan membantu dalam memenuhi kebutuhan furnitur anda.</p></div>
</div>
<div class="card-service col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
    <a class="bot-space" href=""></a> <img class="lazyloaded mb-3" src="assets/img/icon/form.png" width=55px>
<div class="text-dark">
<h4 class="center-service">Mengisi Detail</h4>
<p>Kami dapat mengubah imajinasi anda menjadi nyata.<br>
</p></div>
</div>
<div class="card-service col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
    <a class="bot-space" href=""></a> <img class="lazyloaded mb-3" src="assets/img/icon/design.png" width=55px>
<div class="text-dark">
<h4 class="center-service">Proses Desain interior</h4>
<p>Dapatkan rancangan dari kami yang sudah anda impikan!<br>
</p></div>
</div>
<div class="card-service col-md-3 col-xs-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
    <a class="bot-space" href=""></a> <img class="lazyloaded mb-2" src="assets/img/icon/sit.png" width=55px>
<div class="text-dark">
<h4 class="center-service">Duduk manis!</h4>
<p>Relax! Dan cek status pengerjaan di dalam tab "Shop".<br>
</p></div>
</div>
</div>
<div class="row text-center" style="padding: 3rem 0;">
<div class="col-12">
<h2 class="display-7 text-center mb-4">Atau</h2>
</div>
<div class="card-service col-md-12 col-xs-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400"><a class="bot-space" href=""></a> <img class="lazyloaded" src="assets/img/icon/preorder.png" width=55px>
<div class="text-dark">
<h4 class="center-service">Pre Order!</h4>
<p>Kamu bisa lakukan preorder untuk desain furniture yang sudah ada dalam katalog kami!</p></div>
</div>
                </div>

<div data-aos="fade-up" data-aos-duration="800" class="banner">
    <div class="container-fluid img text-white mt-3 mb-3"
        style="background-image: url(assets/img/3.jpg); background-size: cover;">
        <div class="container-fluid box pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center fs-7" >
                        <h3 style="font-size: 40px;"><span class="text-warning">KENAPA </span>MEMILIH <span class="text-warning">A SUBAGJA?</span></h3><br>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="800"  class="row mb-3">
                    <div class="col-xl-1 col-lg-1 col-md-12 pt-2">
                        <img src="assets/img/icon/apart.png" height="65px" width="65px">
                    </div>
                    <div class="col-xl-11 col-lg-11 col-md-12">
                        <h5 class="text-warning">Kualitas Handmade yang Tinggi</h5>
                        <p>A Subagja membanggakan diri dalam menciptakan furnitur dan produk dekoratif berkualitas tinggi yang dibuat secara handmade. 
                            Setiap produk dibuat dengan teliti dan penuh perhatian oleh pengrajin yang berpengalaman, menjamin kualitas yang superior.</p>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="row mb-3">
                    <div class="col-xl-1 col-lg-1 col-md-12 pt-2">
                        <img src="assets/img/icon/tamu.png" height="65px" width="65px">
                    </div>
                    <div class="col-xl-11 col-lg-11 col-md-12">
                        <h5 class="text-warning">Desain Khusus untuk Ruangan</h5>
                        <p> Produk-produk dari A Subagja dirancang khusus untuk menciptakan suasana yang unik dalam ruangan Anda. 
                            Filosofi desain arus utama menjadi landasan dalam menciptakan estetika yang menarik, fungsionalitas yang optimal, 
                            dan produk yang sesuai dengan berbagai gaya ruangan.</p>
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="800" data-aos-delay="600" class="row mb-3">
                    <div class="col-xl-1 col-lg-1 col-md-12 pt-2">
                        <img src="assets/img/icon/apart.png" height="65px" width="65px">
                    </div>
                    <div class="col-xl-11 col-lg-11 col-md-12">
                        <h5 class="text-warning">Ragam Produk yang Luas</h5>
                       <p> A Subagja menyajikan rangkaian produk yang beragam, memenuhi kebutuhan berbagai tipe ruangan. Mulai dari furnitur hingga produk dekoratif, 
                        setiap item mencerminkan keahlian dan inovasi A Subagja dalam menciptakan solusi desain yang holistik.</p>
                        
                    </div>
                </div>
                <div data-aos="fade-right" data-aos-duration="800" data-aos-delay="900" class="row mb-3">
                    <div class="col-xl-1 col-lg-1 col-md-12 pt-2">
                        <img src="assets/img/icon/makan.png" height="65px" width="65px">
                    </div>
                    <div class="col-xl-11 col-lg-11 col-md-12">
                        <h5 class="text-warning">Daya Tahan yang Tinggi</h5>
                        <p> Produk A Subagja tidak hanya menonjol dalam hal estetika, tetapi juga dibangun untuk daya tahan jangka panjang. 
                            Material berkualitas tinggi dan proses produksi yang cermat menghasilkan produk yang tidak hanya indah, tetapi juga tahan lama.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section data-aos="fade-up" data-aos-duration="800">
<div  class="container bg-white">
    <div class="row pt-3">
        <div class="col text-center">
            <h3 class="fontpp2"><span class="fontpp2">OUR</span> CLIENTS</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, commodi modi sunt incidunt praesentium
                eius ut maiores dignissimos, aliquid minima alias unde placeat enim culpa, laboriosam asperiores
                suscipit aperiam amet.</p> -->
        </div>
    </div>
    <div>
    <img src="assets/img/companies/companies.png" height="100%" width="100%">
    <p class="text-center pb-3"></p>
    </div>
                </section>    
    <!-- <div class="row pb-3">
        <?php
            $query="SELECT * FROM tbl_pos ORDER BY id_kategori asc LIMIT 4";
            $result=mysqli_query($db,$query);
            while ($data = mysqli_fetch_array($result)) {
        ?>
        <div class="col-md-6 col-sm-6 col-xs-12" id="box-b" data-text="<?php echo $data['judul']; ?>">
            <a href="detail-blog.php?id=<?php echo $data['id_pos'] ?>"><img
                    src="admin/assets/images/foto_pos/<?php echo $data['gambar'];?>" height="330px" width="100%"></a>
        </div>
        <?php } ?>
    </div> -->
</div>
</div>
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 5,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    })
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
<?php require "footer.php"; ?>