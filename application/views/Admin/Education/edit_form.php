<!DOCTYPE html>
<html lang="en">

            <?php
            $this->load->view("admin/partials/head.php")
            ?>

            <body id="page-top">

            <?php
            $this->load->view("admin/partials/navbar.php")
            ?>

            <div id="wrapper">

                <!-- Sidebar -->
            <?php
            $this->load->view("admin/partials/sidebar.php")
            ?>

                <div id="content-wrapper">

                <div class="container-fluid">

                    <!-- Breadcrumbs-->
            <?php
            $this->load->view("admin/partials/breadcrumbs.php")
            ?>

        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Pendidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/education/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $pendidikan->id ?>" />
                <div class="form-group">
                    <label for="nama_pend">Nama Pendidikan</label>
                    <input type="text" value="<?php echo $pendidikan->nama_pend ?>" class="form-control <?php echo form_error('nama_pend') ? 'is-invalid':'' ?>" id="nama_pend" placeholder="Nama Pendidikan" name="nama_pend">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama_pend') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ket_pend">Keterangan Pendidikan</label>
                    <input value="<?php echo $pendidikan->ket_pend ?>" type="text" class="form-control <?php echo form_error('ket_pend') ? 'is-invalid':'' ?>" id="ket_pend" placeholder="Keterangan Pendidikan" name="ket_pend">
                    <div class="invalid-feedback">
                        <?php echo form_error('ket_pend') ?>
                    </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        

      <!-- Sticky Footer -->
<?php
$this->load->view("admin/partials/footer.php")
?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
<?php
$this->load->view("admin/partials/scrolltop.php")
?>

  <!-- Logout Modal-->
<?php
$this->load->view("admin/partials/modal.php")
?>

  <!-- Bootstrap core JavaScript-->
<?php
$this->load->view("admin/partials/js.php")
?>

</body>

</html>
