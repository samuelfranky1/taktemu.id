<?php
include "config/config.php";

session_start();
if(!isset($_SESSION['id_session'])){
    $ids = date("YmdHis");
    $_SESSION['id_session'] = $ids;
}
$id_session=$_SESSION['id_session'];

error_reporting(0);
$id = $_GET['id'];
$queryRowProduct = $connect->query("SELECT * FROM barang where id = '".$id."'");
$rowProduct = mysqli_fetch_array($queryRowProduct);
    /*
    if (isset($_POST['ubah']) {  
    
      if (!empty($_FILES) && $_FILES['product_images']['size'] >0 && $_FILES['user_foto']['error'] == 0){  
            //$random = substr(number_format(time() * rand(),0,'',''),0,10);
            $images = $_FILES['product_images']['name'];
            $move = move_uploaded_file($_FILES['product_images']['tmp_name'],'assets/images/product/'.$images);  

            if ($move) {  
              $queryUpdate  = mysql_query("UPDATE product SET
                                    product_name      = '".$_POST['product_name']."',
                                    product_price     = '".str_replace(".", "", $_POST['product_price'])."',
                                    product_desc      = '".$_POST['product_desc']."',
                                    product_images    = '".$images."',
                                    product_stock     = '".str_replace(".", "", $_POST['product_stock'])."',
                                    category_id       = '".$_POST['product_category']."'
                                    WHERE product_id     = '".$id."'
                                     ");
                $file = "assets/images/product/".$rowProduct['product_images'];
                unlink($file);

            }

      }else{
        */


          if(isset($_POST['ubah'])){
                $queryUpdate=$connect->query("UPDATE barang SET
                                                    nmbrg = '".$_POST['product_name']."',
                                                    harga = '".str_replace(".", "", $_POST['product_price'])."',
                                                    stock = '".str_replace(".", "", $_POST['product_stock'])."',
                                                    category_id = '".$_POST['product_category']."' ,
                                                    nmsatuan = '".$_POST['satuan']."'
                                                    WHERE id    = '".$id."' ");
         if($queryUpdate === TRUE){

echo "<script> alert('Data Berhasil Diubah'); location.href='home.php?hal=master/barang/list' </script>";exit;
           }else{
            echo "ERROR UBAH DATA =" .$sql->connect_error;
           }
            }

     // if ($queryUpdate) {
       //  echo "<script> alert('Data Berhasil Diubah'); location.href='home.php?hal=master/barang/list' </script>";exit;
      //}
    //}
 ?>
<html>
    <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Taktemu.id - Elearning Design</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.jpg" rel="icon" />
    <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />


  </head>
   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="home.php">Taktemu.id</a></h1>
            <i class="arrow-left-circle"></i>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="home.php">About</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#product">Produk</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <li><a href="#">Merch</a></li>
            <a href="logout.php" class="get-started-btn scrollto">Logout</a>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Produk ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <h1>Produk Esensial</h1>
            <h2><i>"Mohon Maaf produk sedang maintenance"</i></h2>
            <a href="https://www.youtube.com/watch?v=4lX2IFB5wlo&list=PLShjTWZBzEQcyNNQEfL63NvSWCbMfDec5&index=1" class="glightbox play-btn mb-4"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

    </head>
    <body>
        <div>
        <section id="product" class="product">
        <!--body wrapper start-->
       <div class="wrapper">
        <div class="row">

        <div class="col-sm-7">
            <section class="panel">
  
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Kode Barang</th>
                                <th width="20%">Nama</th>
                                <th width="15%">Harga</th>
                                <th width="15%">Stock</th>
                                <!--<th>Deskripsi</th>-->
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $queryProduct = $connect->query("SELECT barang.id, barang.kdbrg, barang.nmbrg, barang.harga, barang.stock, category.category_id, category.category_name, satuan.id_satuan, satuan.nmsatuan
                             FROM barang
                             JOIN category ON barang.category_id = category.category_id
                             JOIN satuan ON barang.id_satuan = satuan.id_satuan
                             ORDER BY id DESC");
                            while ($rowProduct = mysqli_fetch_array($queryProduct)) {
                                ?>
                                 <tr class="">
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $rowProduct['kdbrg'] ?></td>
                                    <td><?php echo $rowProduct['nmbrg'] ?></td>
                                    <td>Rp. <?php echo number_format($rowProduct['harga'], 0, ',', '.'); ?></td>
                                    <td><?php echo $rowProduct['stock'] ?></td>
                                   <!-- <td><?php echo $rowProduct[''] ?></td>-->
                                    <td>
                                        <a href="cart.php?&input=add&id_barang=<?=$rowProduct['id']?>&id_session=<?=$id_session?>">
                                            <button type="button class="btn btn-primary" type="submit"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                Pilih
                                            </button>
                                        </a>
                                        <!-- <a href="?hal=master/barang/list&hapus=<?php echo $rowProduct['id']; ?>">
                                        <button type="button" class="btn btn-danger" type="submit" name="hapus"><i
                                                        class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a> -->
                                    </td>
                                </tr>
                                <!--
                                <tr class="">
                                    <td><img src="assets/images/product/<?php echo $rowProduct['product_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowProduct['product_name'] ?></td>
                                    <td>Rp. <?php echo number_format($rowProduct['product_price'], 0, ',', '.'); ?></td>
                                    <td><?php echo $rowProduct['product_stock'] ?></td>
                                    <td><?php echo $rowProduct['product_desc'] ?></td>
                                    <td>
                                        <a href="?hal=master/product/edit&id=<?php echo $rowProduct['product_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/product/list&hapus=<?php echo $rowProduct['product_id']; ?>">
                                        <button type="button" class="btn btn-danger" type="submit" name="hapus"><i
                                                        class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>-->
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
           <div class="col-md-5">
            <div class="panel">
                <div class="panel-body">

                    <div class="blog-post">

                        <div class="media">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <td></td>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Qty</th>
                                        <th>Sub Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $query = "SELECT keranjang.id_keranjang, keranjang.id_session, keranjang.tgl_keranjang, keranjang.jam_keranjang, keranjang.qty,
                        barang.id, barang.kdbrg, barang.nmbrg, barang.harga, barang.stock
                        FROM keranjang
                        JOIN barang ON keranjang.id_barang = barang.id
                        WHERE id_session='$id_session'";

                                    $result = mysqli_query($connect, $query);
                                    $no = 1;
                                    $total = 0;

                                    while ($data = mysqli_fetch_array($result)) {
                                        $sub_total = +$data['harga'] * $data['qty'];
                                        $total += $sub_total;
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="cart_remove.php<?=$data['id_keranjang']?>&id_session=<?=$data['id_session'] ?>"><i
                                                            class="fa fa-times" style="color: red"></i></a>
                                            </td>
                                            <td>
                                                <?php echo $data['nmbrg'] ?></td>
                                            <td><?php echo number_format($data['harga'], 0, ',', '.'); ?></td>
                                            <td><?php echo $data['qty']; ?></td>
                                            <td><?php echo number_format($sub_total, 0, ',', '.'); ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="4">
                                            Total
                                        </td>
                                        <td>
                                            <?php echo number_format($total, 0, ',', '.'); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" align="right">

                                            <button type="button" class="btn btn-primary" type="submit" data-bs-toggle="modal"
                                                    data-bs-target="#myModal"><i class="fa fa-shopping-cart"></i> Bayar
                                            </button>
                                        </td>
                                                    </div>
            

                            <center>
                                <div class="caption">
                                    <h3>Menu</h3>
                                        <p><a href="home.php" role="button" class="btn btn-primary btn-block">Kembali</a></p>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
                               
                                                        </div>
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                             aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-hidden="true">&times;
                                                        </button>
                                                        <?php

                                                        ?>
                                                        <h4 class="modal-title">GRAND TOTAL :
                                                            Rp. <?php echo number_format($total, 0, ',', '.'); ?></h4>
                                                    </div>

                                                    <div class="modal-body row">
                                                        <div class="col-md-12">
                                                        
                                                            <!--<form method="POST" action="?hal=cetak">-->
                                                                <form method="POST" action="cetak.php">
                                                                <div class="form-group">
                                                                    <label> Cash</label>

                                                                </div>


                                                                <div class="form-group">
                                                                    <input type="hidden" id="type1" name="grand_total"
                                                                           onKeyUp="kalkulatorTambah(getElementById('type1').value,this.value);"
                                                                           value="<?php echo number_format($total, 0, ',', '.'); ?>"/>

                                                                    <input type="text" class="form-control input-lg"
                                                                           id="type2" name="cash"
                                                                           onKeyUp="kalkulatorTambah(getElementById('type1').value,this.value);"
                                                                           />


                                                                </div>

                                                                <div class="form-group">

                                                                    <label> Kembalian</label>
                                                                    <input type="hidden" name="kembalian"
                                                                           id="kembalian">
                                                                    <h1>

                                                               <span id="result">
                                                                </span></h1>
                                                                </div>

                                                                <div class="pull-right">

                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                            type="submit"><i
                                                                                class="fa fa-check-square-o"></i> OK
                                                                    </button>
                                                                    <button type="button" class="btn btn-warning btn-sm"
                                                                            data-bs-dismiss="modal" aria-hidden="true"
                                                                            type="button"><i class="fa fa-times"></i>
                                                                        Batalkan- (Ngutang Dulu)
                                                                    </button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- end modal -->
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!--body wrapper end-->

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
        <h3>Taktemu.id</h3>
        <p>by Franky Samuel Octavianus</p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/taktemu.id/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/franky-samuel-octavianus/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright 2021
          <strong
            ><span><taktemu class="id"></taktemu></span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
          Designed by <a href="https://www.instagram.com/samoctvns/">FSO</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

        </div>
    </body>
</html>




<!-- <script type="text/javascript" src="jquery-1.11.2.min.js"></script> -->
<script>
    function searchFilter(page_num) {
        // page_num = page_num?page_num:0;
        var keywords = $('#keywords').val();
        // var sortBy = $('#sortBy').val();
        $.ajax({
            type: 'GET',
            url: 'getProduct.php',
            data: '?hal=post&keywords=' + keywords,
            beforeSend: function () {
                $('.loading-overlay').show();
            },
            success: function (html) {
                $('#show_product').html(html);
                $('.loading-overlay').fadeOut("slow");
            }
        });
    }

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    function convertToRupiah(angka) {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++) if (i % 3 == 0) rupiah += angkarev.substr(i, 3) + '.';
        return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

    function kalkulatorTambah(type1, type2) {

        var a = parseInt(type1.replace(/,.*|[^0-9]/g, ''), 10); //eval(type1);
        var b = parseInt(type2.replace(/,.*|[^0-9]/g, ''), 10);
        var hasil = b - a;

        var jumlah = 'Rp. ' + hasil.toFixed(0).replace(/(d)(?=(ddd)+(?!d))/g, "$1.");
        //var total = NilaiRupiah(hasil);
        // console.info('hahah')
        document.getElementById('result').innerHTML = convertToRupiah(hasil);

        document.getElementById("kembalian").value = convertToRupiah(hasil); //document.getElementById("type2").value;

    }

    /* Tanpa Rupiah */
    var tanpa_rupiah = document.getElementById('type1');
    tanpa_rupiah.addEventListener('keyup', function (e) {
        tanpa_rupiah.value = formatRupiah(this.value);
    });

    var puser = document.getElementById('type2');
    puser.addEventListener('keyup', function (e) {
        puser.value = formatRupiah(this.value);
    });

</script>