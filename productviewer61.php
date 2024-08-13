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
    #model-viewer {
            width: 100%;
            height: 90vh;
        }
        .custom-btn {
            margin-bottom: 5px;
            /* Atur warna latar belakang dan teks */
            background-color: #ffffff;
            color: #000000;
            /* Atur padding dan border */
            padding: 8px 27px;
            border: none;
            transition: background-color 0.3s ease;
            border-radius: 20px; /* Atur border-radius untuk membuat tombol lebih bulat */
            cursor: pointer;
           
            
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 10px; /* Memberikan jarak antara tombol-tombol */
            margin-top: 20px; /* Memberikan jarak di bagian atas container */
        }
        /* Efek hover saat kursor di atas tombol */
        .custom-btn:hover {
            background-color: #c8c8c8;
        }
        bbt{
            margin-right: 10px;
        }    
</style>
</head>
<body>
    <div id="model-viewer"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r126/three.min.js" integrity="sha512-n8IpKWzDnBOcBhRlHirMZOUvEq2bLRMuJGjuVqbzUJwtTsgwOgK5aS0c1JA647XWYfqvXve8k3PtZdzpipFjgg==" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/three@0.126.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/examples/js/controls/OrbitControls.js">
    </script>
    <script>
        var scene, camera, renderer, controls;

        function init() {
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
            scene.background = new THREE.Color(0xdddddd);
            renderer = new THREE.WebGLRenderer();
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.getElementById('model-viewer').appendChild(renderer.domElement);

            const light = new THREE.HemisphereLight(0xffffbb, 0x080820, 0.5);
            scene.add(light);

            const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambientLight);

            const spotLight = new THREE.SpotLight(0xffffff, 1);
            spotLight.position.set(-55, 20, -40);
            scene.add(spotLight);

            camera.position.z = 20;

            // Menambahkan kontrol kamera
            controls = new THREE.OrbitControls(camera, renderer.domElement);

            animate();
        }

        function animate() {
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
            controls.update(); // Update kontrol setiap frame
        }

        function loadModel(textureURL) {
            var loader = new THREE.GLTFLoader();
            loader.load('corner_sofa.glb', function (gltf) {
                var model = gltf.scene;

                // Memuat tekstur kayu dan menerapkan pada material
                var textureLoader = new THREE.TextureLoader();
                textureLoader.load(textureURL, function (texture) {
                    var woodMaterial = new THREE.MeshStandardMaterial({ map: texture });
                    model.traverse((child) => {
                        if (child.isMesh) {
                            child.material = woodMaterial;
                        }
                    });
                });

                scene.add(model);
            });
        }
        window.onload = init;
        function refreshPage() {
        location.reload(); // Ini akan memuat ulang halaman ketika tombol diklik
        }
        window.onload = function () {
            init();
            document.getElementById('kayu').addEventListener('click', function () {
                
                // Memuat model dengan tekstur "kayu a" saat tombol diklik
                loadModel('');
                
            });
            // Menambahkan event listener untuk tombol "kayu a"
            document.getElementById('kayuA').addEventListener('click', function () {
                // Memuat model dengan tekstur "kayu a" saat tombol diklik
                loadModel('kayu.jpg');
            });
            document.getElementById('kayuB').addEventListener('click', function () {
                // Memuat model dengan tekstur "kayu a" saat tombol diklik
                loadModel('kayuputih.jpg');
            });
            document.getElementById('kayuC').addEventListener('click', function () {
                // Memuat model dengan tekstur "kayu a" saat tombol diklik
                loadModel('kayu2.jpg');
            });
            document.getElementById('kayuD').addEventListener('click', function () {
                // Memuat model dengan tekstur "kayu a" saat tombol diklik
                loadModel('kayu3.jpg');
            });
        };
    </script>
    <script>
    function selectItem(itemId) {
        // Menghapus kelas 'selected' dari semua tombol
        var buttons = document.getElementsByClassName('custom-btn');
        for (var i = 0; i < buttons.length; i++) {
            buttons[i].classList.remove('selected');
        }

        // Menambahkan kelas 'selected' pada tombol yang dipilih
        var selectedButton = document.getElementById(itemId);
        selectedButton.classList.add('selected');

        // Menghapus elemen sebelumnya jika ada
        var itemContainer = document.getElementById('itemContainer');
        while (itemContainer.firstChild) {
            itemContainer.removeChild(itemContainer.firstChild);
        }

        // Menambahkan elemen di sekitar tombol yang dipilih
        var newItem = document.createElement('div');
        newItem.innerText = 'Item terpilih untuk ' + itemId;
        itemContainer.appendChild(newItem);
    }
</script>

    <div class="container">
    <button id="kayu" class="custom-btn">Original</button> 
    <button id="kayuA" class="custom-btn" onclick="selectItem('kayuA')" style="background-image: url('kayu.jpg');"></button>
    <button id="kayuB" class="custom-btn" onclick="selectItem('kayuB')" style="background-image: url('kayuputih.jpg');"></button>
    <button id="kayuC" class="custom-btn" onclick="selectItem('kayuC')" style="background-image: url('kayu2.jpg');"></button>
    <button id="kayuD" class="custom-btn" onclick="selectItem('kayuD')" style="background-image: url('kayu3.jpg');"></button>
    <button class="custom-btn" id="kembaliBtn">Kembali</button>
    </div>
    <script>
    document.getElementById('kembaliBtn').addEventListener('click', function() {
        window.location.href = 'http://localhost/webasubagja/shop.php';
    });
    </script>
</body>
<?php require "footer.php"; ?>