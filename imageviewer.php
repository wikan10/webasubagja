<?php require "headert.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include A-Frame library -->
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>   
<link rel="stylesheet" href="font.css">
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
    .back-button {
    position: absolute;
    top: 10px; /* Atur jarak dari atas */
    right: 10px; /* Atur jarak dari kanan */
    z-index: 9999;
    padding-top: 100px; 
    margin-right: 15px;
    color: #fff;
     /* Pastikan tombol berada di atas elemen lain */
    /* Gaya lain yang diperlukan untuk tombol */
}
.back-button:hover {
    color: #ffcc00; /* Change text color to desired color on hover */
}
</style>
</head>
<body>
<a href="gallery.php" class="back-button">X</a>
    <section embedded style="width: 100%; height: 100%;" mouse-cursor>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div style="width: 100%; height: 1015px; margin: auto;">

                        <!-- Your script clicking... -->

                        <a-scene embedded style="width: 100%; height: 100%;" mouse-cursor>
                            <!-- Cursor component with type set to mouse -->
                            <a-entity cursor="rayOrigin: mouse"></a-entity>
                            <!-- 360 Image -->
                            <a-entity rotation="0 180 0" animation="property: rotation; to: 0 360 0; loop: true; dur: 70000; easing: linear;">
                                <!-- Sky (360 Image) -->
                                <a-sky src="21.jpg"></a-sky>
                                <!-- Non-Rotating Logo -->
                                <a-image src="assets\img\images\logo.png" position="0 2 5" scale="-1 1 1" width="8" height="2"></a-image>
                                <!-- <a-image id="infoImage" src="assets\img\images\tv.png" rotation="0 -60 0" width="2" height="1" position="-10 3.5 7" scale="-3 3 3" visible="false"></a-image> -->
                                <!-- Clickable entity -->
                                <!-- <a-entity position="-14 3.5 3" scale="-1 1 1" rotation="0 -90 0" cursor-listener> -->
                                    <!-- <a-image src="assets\img\images\info.png" width="2" height="2"></a-image> -->
                                </a-entity>
                            </a-entity>
                            <!-- Click listener component -->
                        </a-scene>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require "footer.php"; ?>
    <script>
        // Ambil elemen tombol kembali
        var backButton = document.querySelector('.back-button');

        // Tambahkan event listener untuk klik pada tombol kembali
        backButton.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah perilaku default dari link

            // Redirect ke gallery.php saat tombol kembali diklik
            window.location.href = 'gallery.php';
        });
    </script>
</body>