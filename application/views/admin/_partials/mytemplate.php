<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view("admin/_partials/navbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

            <!-- ISI MULAI DARI SINI -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>
