    <style>
        .list-unstyled li a {
            color: black;
            text-decoration: none;
        }

        .list-unstyled li a:hover {
            color: rgb(163, 211, 255);
            text-decoration: none;
        }
        input.btn.i {
            border: 2px solid gray;
            width: 75%;
            padding: 7px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        button.btn.o {
            border: 2px solid gray;
            padding: 7px;
            font-weight: bold;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        ::placeholder {
            color: black;
        }

        footer {
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
    <footer>
        <div class="page-footer font-small indigo --bs-light mt-3 fontpp">
            <div class="container-fluid text-center text-md-left">
                <div class="row text-black">                     
                    <div class="col-md-8 mx-auto text-center">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">CONTACT US</h5>
                        <ul class="list-unstyled">
                            +62 8132 2036 541 <br>
                            @a.subagja.official <br>
                            JL. Sukahaji RT.01 RW.27 Cimekar Cileunyi Bandung
                        </ul>
                    </div>
                </div>  
            </div>
            <div class="justify-content-center text-center mb-5 .text-secondary">
            <a href="https://www.instagram.com/a.subagja.official/" target="_blank">
    <img src="assets/img/icon/ig.PNG" height="50px" width="50px" alt="Instagram">
</a>
<a href="https://wa.me/6281322036541" target="_blank">
    <img src="assets/img/icon/twitter.png" height="50px" width="50px" alt="Twitter">
</a>
                        </div>
            <div class="footer-copyright text-center py-3 bg-dark text-white">©2023 Copyright :
                <a href="#"> asubagja.com</a>
            </div>
        </div>
    </footer>

    </body>
    <!-- Js Dasar -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper/popper.min.js"></script>
    <!-- Owl Carausel -->
    <script src="assets/js/owl/owl.carousel.js"></script>
    <!-- Sweetalert -->
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>

    <!-- Stok Detail Produk -->
    <!-- Plugins js -->
    <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Plugins Init js -->
    <script src="admin/assets/pages/form-advanced.js"></script>

    <!-- Datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>

    </html>