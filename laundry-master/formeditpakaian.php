<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="table-06/css/style.css">
</head>
<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li><a href="index.html">Beranda</a></li>
                                    <li><a href="about.html">Pelayanan</a></li>
                                    <li class="active"><a href="datacustomer.php">Data Customer</a></li>
                                    <li><a href="services.php">Data Transaksi</a></li>
                                    <li><a onclick="Keluar()">Keluar</a></li>
                                    <script>
        function Keluar(){
            let hapus = confirm("Apakah Anda Yakin Keluar?");
            if(hapus){
                window.location.href='FormLogin.php';
            }else{
                window.location.href='datacustomer.php';
            }
        }
    </script>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt=""> 0852-2374-6177</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section">Edit Data Pakaian</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">  
                           <?php 
                           include 'Config.php';
                           if (isset($_GET['kode_pakaian'])) {
    $kode_pakaian = $_GET['kode_pakaian'];
    $data = mysqli_query($con,"SELECT * from pakaian where kode_pakaian='$kode_pakaian'");
    foreach ($data as $d) :
                         ?>
                         <form action="editpakaian.php" method="POST" name="forminputdata.php">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">

        <tr height="46">
            <td> </td>
            <td style="color: black;">Jenis pakaian</td>
            <td><input type="hidden" name="kode_pakaian" value="<?php echo $d['kode_pakaian']; ?>">
                <input type="text" name="jenis_pakaian" size="50" maxlength="30 " value="<?php echo $d['jenis_pakaian']; ?>" ></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td style="color: black;">Jumlah</td>
            <td><input type="text" name="jumlah" size="50" maxlength="30"  value="<?php echo $d['jumlah']; ?>"></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td style="color: black;">Harga</td>
            <td><input type="text" name="harga" size="50" maxlength="12"  value="<?php echo $d['harga']; ?>"></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
        </tr>
    </table>
                        </form>
                        <?php 
                        endforeach;
    }
    ?>
                </div>
            </div>
        </div>
    </section>    


<!-- JS here -->

<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>