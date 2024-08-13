<?php require "header.php"; ?>
<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/4.jpg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;

    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
    a{
        cursor: pointer;
    }
    tombol{
        
    }
    .tombol-container {
    display: flex;
    justify-content: center;
}
    
    
    
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>ABOUT US</h3>
            <p>Home > <a href="#" class="text-warning">About Us</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pt-4 pb-4">
    <div class="row no-gutter">
        <div class="col-sm-8 text-justify">
            <h4>ABOUT US </h4>
                <p style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="400" data-aos-delay="200">A Subagja adalah perusahaan yang berfokus pada desain dan produksi furniture bergaya modern yang memukau.
                Dengan pengalaman bertahun-tahun dalam industri ini, kami memadukan kreativitas dengan kualitas terbaik untuk menghadirkan 
                produk unggulan kepada pelanggan kami.</p>
                <p style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                Kami percaya bahwa furniture bukan hanya sekedar barang, melainkan juga ekspresi dari karakter dan gaya hidup seseorang.
                Itulah mengapa kami berkomitmen untuk menciptakan furnitur yang tidak hanya estetis, tetapi juga fungsional dan memberikan kenyamanan.
                </p>
                <p style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                Koleksi kami mencakup berbagai macam furniture, mulai dari sofa, meja, wardrobe, kitchen set hingga elemen dekoratif yang dapat dipesan secara Pre-order. Selain itu 
                Setiap desain dipilih dengan cermat untuk mencerminkan nuansa modern yang elegan, cocok untuk ruang tamu, kantor, atau bahkan ruang luar.
                </p>
                <p style="margin-bottom: 30px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                Kami tidak hanya berusaha untuk memberikan furnitur terbaik, tetapi juga layanan yang berkualitas. 
                Keinginan kami adalah memberikan pengalaman berbelanja yang memuaskan kepada setiap pelanggan kami, baik dari proses pemilihan hingga pengiriman produk.
                </p>
            
        </div>
        <div class="col-md-4">

         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/8.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
            
        
        
    </div>
</div>
<script>
  var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    // Panggil plusSlides() dengan parameter 1 setiap satu detik
    setInterval(function() {
        plusSlides(1);
    }, 2500); // Waktu dalam milidetik (1000ms = 1 detik)

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        AOS.init();
    </script>
<?php require "footer.php"; ?>