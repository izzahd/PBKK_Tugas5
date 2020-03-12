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
            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/services/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/services/edit/ID --->

							<input type="hidden" name="id" value="<?php echo $service->service_id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Service name" value="<?php echo $service->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Price</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="number" name="price" min="0" placeholder="Service price" value="<?php echo $service->price ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $service->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Service description..."><?php echo $service->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-info" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>

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
