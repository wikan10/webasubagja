<?php require "header.php"; ?>
<head>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135974525-2"></script>
    <link rel="stylesheet" href="font.css">
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
    
</head>
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

    .col-md-4 {
        padding: 3px;
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
        padding: 23px;
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
    .modal-dialog {
    max-width: 80%;
    width: auto;
}
</style>
<div class="banner mb-3 mt-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>GALLERY</h3>
            <p>Home > <a href="gallery.php" class="text-warning">Gallery</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded">
    <div class="row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
        <?php
        $query = "SELECT * FROM tbl_pos ORDER BY id_pos desc";
        $result = mysqli_query($db, $query);

        while ($data = mysqli_fetch_array($result)) {
            $imagePath = "admin/assets/images/foto_pos/" . $data['gambar'];
            $is360Image = ($data['gambar'] === '21.jpg' || $data['gambar'] === '22.png');
            
        ?>
            <div class="col-md-4" id="box" data-text="<?php echo $data['judul']; ?>">
                <?php if ($is360Image) { ?>
                    <a href="#" data-toggle="modal" data-target="#myModal" data-src="<?php echo $imagePath; ?>" data-is360="true" class="popup-link">
                        <img src="<?php echo $imagePath; ?>" alt="" width="100%" height="280px">
                    </a>
                <?php } else { ?>
                    <a href="detail-blog.php?id=<?php echo $data['id_pos']; ?>">
                        <img src="<?php echo $imagePath; ?>" alt="" width="100%" height="280px">
                    </a>
                <?php } ?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<!-- Bootstrap Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Image Viewer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="aframe-container">
                    <p>Hello, this is a test content.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript to redirect to imageviewer.php when clicking the images
    $(document).on("click", ".popup-link", function (event) {
        event.preventDefault(); // Prevent the default action of the anchor tag
        var imageSrc = $(this).data('src');

        if (imageSrc === 'admin/assets/images/foto_pos/21.jpg') {
            // Redirect to imageviewer.php
            window.location.href = 'imageviewer.php';
        }
        if (imageSrc === 'admin/assets/images/foto_pos/22.png') {
            // Redirect to imageviewert.php
            window.location.href = 'imageviewert.php';
        }
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
        AOS.init();
    </script>






<?php require "footer.php"; ?>