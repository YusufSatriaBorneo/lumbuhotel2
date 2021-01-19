<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("tamu/head.php") ?>

  <!-- favivon Lumbu -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="ico/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="ico/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="ico/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="ico/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="ico/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="ico/mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="ico/mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="ico/mstile-310x310.png" />
  <!-- Endfile -->
</head>

<body id="page-top">

  <?php $this->load->view("tamu/navbar.php") ?>

  <div id="wrapper">

    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- search box-->
        <div class="container-fluid">
          <br><br><br><br><br>

          <center>
            <h2>Reservasi Sangkima Meetings Rooms</h2>
          </center>

          <!--end search box-->

          <div class="row">

            <div class="col-lg-9 col-sm-9 mx-auto mt-5">
              <?php echo form_open('welcome/saran_aksi'); ?>

              <input type="text" class="form-control" name="nama_saran" placeholder="Nama">
              <input type="text" class="form-control" name="email_saran" placeholder="Email ">
              <input type="number" class="form-control" name="tlp_saran" placeholder="Telp">
              <textarea rows="6" class="form-control" name="isi_saran" placeholder="Keperluan"></textarea><br>
              <button type="submit" class="btn btn-success" name="Submit" onclick="return confirm('Apakah Data Anda Sudah Benar?');">Send Message</button>
              <?php echo form_close(); ?>



            </div>


            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("tamu/footer.php") ?>

          </div>
          <!-- /.content-wrapper -->

        </div>
      </div>
    </div>
  </div>
  <!-- /#wrapper -->


  <?php $this->load->view("tamu/scrolltop.php") ?>
  <?php $this->load->view("tamu/modal.php") ?>
  <?php $this->load->view("tamu/js.php") ?>

</body>

</html>