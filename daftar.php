<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Hair salon templates for mens hair cut service provider.">
    <meta name="keywords" content="hair salon website templates free download, html5 template, free responsive website templates, website layout,html5 website templates, template for website design, beauty HTML5 templates, cosmetics website templates free download">
    <title>Pendaftaran</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>

<body>
    <?php
        if (! @$_GET['menu'])
            @$_GET['menu']='daftar';
        if (! @$_POST['singlebutton'])
            @$_POST['singlebutton']='';
    ?>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="index.php"><img src="images/wk_garut.png" alt=""></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <ul>
                                <li class="active"><a href="home.php" title="Beranda">Beranda</a></li>
                                <li class="has-sub"><a href="#" title="">Pendaftaran</a>
                                    <ul>
                                        <li><a href="daftar.php?menu=daftar" title="Daftar">Daftar</a></li>
                                        <li><a href="daftar.php?menu=lht_pndftr" title="Lihat Pendaftar">Lihat Pendaftar</a></li>
                                        <li><a href="daftar.php?menu=krm_pesan" title="Kirim Pesan">Kirim Pesan</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="akun/akun.php" title="Akun">Akun</a></li>
                                <li class="has-sub"><a href="#" title="">Informasi</a>
                                    <ul>
                                        <li><a href="pengumuman.php" title="Pengumuman">Pengumuman</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="bantuan.php" title="Bantuan">Bantuan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Daftar Sekarang</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><h1><a href="home.php">Beranda</a></h1></li>
                                <li><h1>/</h1></li>
                                <li class="active"><h1>Daftar Sekarang</h1></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                        <!-- widget search -->
                        <h3 class="widget-title">Kontak Info</h3>
                        <address>
                            <strong>GARUT</strong>
                            <br> Jalan Otto Iskandardinata kampung tanjung RT 003/RW 013, Pasawahan
                            <br> , Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151
                            <br>
                            <abbr title="Phone">Tlpn :</abbr> (0262) 280 2880
                        </address>
                        <address>
                            <strong>Hubungi</strong>
                            <br>
                            <a href="mailto:#">@smkwikrama1garut</a>
                        </address>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="https://web.facebook.com/smkwikrama1garut/" class="#"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/smkwikrama1garut/" class="#"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCzb2o_r5WQXtt1e2LAcrM7w" class="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    include "config.php";
                    if($_GET['menu']=='daftar'){
                        $sql="SELECT * FROM pendaftaran WHERE menu='daftar'";
                        $content=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                        $data=mysqli_fetch_row($content);

                        echo "$data[1]";
                        if($_POST['singlebutton']=="Daftar"){
                            $query="SELECT * FROM peserta_pendaftar WHERE nisn='$a'";
                            $content1=mysqli_query($GLOBALS["___mysqli_ston"], $query);
                            $cek_nisn = mysqli_num_rows($content1);
                            if($cek_nisn>0){
                                echo"
                                    <script type='text/javascript' language='javascript'>
                                        alert('NISN sudah terdaftar. Silahkan Login ke Menu Akun untuk Mengubah Data');
                                        window.location.href='daftar.php?menu=daftar';
                                    </script>";

                            }else{
                                $sql="INSERT INTO peserta_pendaftar (nisn, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, anak_ke, jml_saudara, hp_siswa, alamat_siswa, berat_badan, tinggi_badan, gol_darah, asal_sekolah, alamat_sekolah, nama_ayah, nama_ibu, alamat_ortu, hp_ortu, kerja_ayah, kerja_ibu, penghasilan_ortu, tanggungan_anak, tahun) VALUES ('$_POST[nisn]', '$_POST[nama]', '$_POST[tmpt_lhir]', '$_POST[tgl_regis]', '$_POST[jenis_kelamin]', '$_POST[agama]', '$_POST[ank_ke]', '$_POST[jml_saudara]', '$_POST[hp_siswa]', '$_POST[almt_siswa]', '$_POST[brt_badan]', '$_POST[tgi_badan]', '$_POST[gol_darah]', '$_POST[asal_sekolah]', '$_POST[almt_sekolah]', '$_POST[nama_ayah]', '$_POST[nama_ibu]', '$_POST[almt_ortu]', '$_POST[hp_ortu]', '$_POST[kerja_ayah]', '$_POST[kerja_ibu]', '$_POST[penghasilan_ortu]', '$_POST[tggungan]', '2017')";
                                mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                                $sql1="INSERT INTO user (adm_id, username, password, type) VALUES (NULL, '$_POST[nisn]', '$_POST[nisn]', 'siswa')";
                                mysqli_query($GLOBALS["___mysqli_ston"], $sql1);
                                $sql2="INSERT INTO nilai_ijazah (id_ijazah, nisn, nilai_ujian_bindo, nilai_ujian_bing, nilai_ujian_ipa, nilai_ujian_ips, nilai_ujian_mmtk, nilai_hasil_akhir, keterangan) VALUES (NULL, '$_POST[nisn]', '', '', '', '', '', '', '');";
                                mysqli_query($GLOBALS["___mysqli_ston"], $sql2);
                                ?>
                                <script type='text/javascript' language='JavaScript'>
                                    alert('Anda Berhasil Daftar. Login ke Menu Akun Untuk Memasukkan Nilai');
                                </script>
                                <?php
                                echo "<meta http-equiv='refresh' content='0'>";
                            }
                        }
                    }else if($_GET['menu']=='lht_pndftr'){
                        $sql1="SELECT * FROM pendaftaran WHERE menu='lht_pndftr'";
                        $content1=mysqli_query($GLOBALS["___mysqli_ston"], $sql1);
                        $data1=mysqli_fetch_row($content1);
                        echo "$data1[1]";
                        $sql="SELECT * FROM peserta_pendaftar";
                        $content=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                        $i=1;
                        while ($data=mysqli_fetch_row($content)) {
                            echo "<tr>";
                            echo "<td>$i</td>";
                            echo "<td>$data[0]</td>";
                            echo "<td>$data[1]</td>";
                            echo "<td>$data[13]</td>";
                            echo "</tr>";
                            $i++;
                        }
                            echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }else{
                        if (! @$_POST['singlebutton'])
                            @$_POST['singlebutton']='';
                        $sql="SELECT * FROM pendaftaran WHERE menu='krm_pesan'";
                        $content=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                        $data=mysqli_fetch_row($content);
                        echo "$data[1]";
                        if($_POST['singlebutton']=="Kirim"){
                            $sql="INSERT INTO pesan_peserta (id_pesan, email, subject, pesan) VALUES (NULL,'$_POST[email]','$_POST[Subject]','$_POST[textarea]')";
                            mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                            echo "<meta http-equiv='refresh' content='0'>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <!-- footer-->
        <div class="container">
          <div class="footer">
              <!-- footer-->
              <div class="container">
                  <div class="footer-block">
                      <!-- footer block -->
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                              <div class="footer-widget">
                                  <h2 class="widget-title">SMK WIKRAMA 1 GARUT</h2>
                                  <ul class="listnone contact">
                                      <li><i class="fa fa-map-marker"></i> Jalan Otto Iskandardinata kampung tanjung RT 003/RW 013, Pasawahan, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151 </li>
                                      <li><i class="fa fa-phone"></i> 089 710 646 17</li>
                                      <li><i class="fa fa-fax"></i> (0262) 280 2880</li>
                                      <li><i class="fa fa-envelope-o"></i> @smkwikrama1garut</li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <div class="footer-widget footer-social">
                                  <!-- social block -->
                                  <h2 class="widget-title">MEDIA SOSIAL</h2>
                                  <ul class="listnone">
                                      <li>
                                          <a href="https://web.facebook.com/smkwikrama1garut/"> <i class="fa fa-facebook"></i> Facebook </a>
                                      </li>
                                      <li><a href="https://www.instagram.com/smkwikrama1garut/"><i class="fa fa-instagram"></i> Instagram</a></li>
                                      <li>
                                          <a href="https://www.youtube.com/channel/UCzb2o_r5WQXtt1e2LAcrM7w"> <i class="fa fa-youtube"></i>Youtube</a>
                                      </li>
                                  </ul>
                              </div>
                              <!-- /.social block -->
                          </div>
                          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                              <div class="footer-widget widget-newsletter">
                                  <!-- newsletter block -->
                                  <h2 class="widget-title">KONTAK KAMI</h2>
                                  <p>Masukkan alamat email Anda untuk menerima informasi PPDB terbaru dan informasi berguna lainnya langsung ke kotak masuk Anda</p>
                                  <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Email Address">
                                      <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">SEND</button>
                                  </span>
                                  </div>
                                  <!-- /input-group -->
                              </div>
                              <!-- newsletter block -->
                          </div>
                      </div>
                      <div class="tiny-footer">
                          <!-- tiny footer block -->
                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="copyright-content">
                                      <p>©Agustian CODEV  | Men Salon 2020 template</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /.tiny footer block -->
                  </div>
                  <!-- /.footer block -->
              </div>
          </div>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>
</body>

</html>
