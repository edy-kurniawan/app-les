<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar - App Les</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/assets/modules/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/assets/Tempo/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v2.1.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Daftar</h2>
          <h3>Daftarkan Sebagai <span>Pengajar</span></h3>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.8593964226027!2d110.8089190636208!3d-7.57841308881967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a16783dbd32eb%3A0xe852ba0aa1842158!2sUniversitas%20Duta%20Bangsa!5e0!3m2!1sen!2sid!4v1600221048473!5m2!1sen!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Tipes, Serengan, Surakarta , Jawa Tengah 57154</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>udb@ac.id</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="<?php echo site_url('user/register/add_guru'); ?>" method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="password" name="pass" class="form-control" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" name="pass2" placeholder="Ulangi password" data-rule="minlen:4" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="number" name="telp" class="form-control" placeholder="No Hp" data-rule="minlen:10" data-msg="Please enter at least 4 chars" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="text" class="form-control datepicker" name="tgl" id="datepicker" placeholder="Tgl Lahir" data-msg="Please enter a valid email" required/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <select name="jenis" class="form-control" required>
                      <option value="">Jenis Kelamin</option>
                      <option value="L">Laki - Laki</option>
                      <option value="P">Perempuan</option>                      
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="mapel" placeholder="Mata Pelajaran yg ingin anda ajarkan & jenjang (Matematika - SMP)." data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="lampiran" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Upload lampiran anda berupa ijasah, transkrip nilai, dan dokomen pendukung lainya pada penyimpanan online seperti google drive & lampirkan alamat / urlnya pada field ini."></textarea>
                <div class="validate"></div>
              </div>
                <?php echo $this->session->flashdata('message');?>
                <?php echo validation_errors(); ?>
              <div class="text-center"><button type="submit" class="btn btn-danger">Daftar</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tempo</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Tempo</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>/assets/Tempo/assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> 
 
  <script type="text/javascript">
  $(function(){
  $(".datepicker").datetimepicker({
    format: 'YYYY-MM-DD',
  });
  });
</script>

</body>

</html>