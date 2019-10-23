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
        <!-- Modall -->
        <section class="content">
        <div class="container-fluid">
          <div class="card">
          <div class="card-header">

            <h3 class="card-title">Data Pengalaman</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Pengalaman
            </button>
          </div>

          <!-- card header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th style="width: 10%;">Id</th>
            <th style="width: 20%;">Nama Pengalaman</th>
            <th style="width: 20%;">Waktu Pengalaman</th>
            <th style="width: 20%;">Keterangan</th>
            <th style="width: 20%;">Action</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($pengalaman as $data) {?>
            <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->nama_peng ?></td>
            <td><?php echo $data->waktu_peng ?></td>
            <td><?php echo $data->ket_peng ?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo site_url('admin/experience/edit/'.$data->id)?>">
                <i class="fa fa-edit"></i>
              </a>

              </a>
              <a type="button" rel="tooltip" title="Hapus" class="btn btn-danger" onclick="deleteConfirm('<?php echo site_url('admin/experience/delete/'.$data->id)?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                    </a>
                   </td>
                    <!-- MODAL DELETE -->
                    <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true" style="top:-100px|important;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="hapusLabel">Hapus Pengalaman</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p style="text-align: center;">Apakah anda ingin menghapus data ini?</p>
                        <div class="modal-footer">
                          <a id="btn-delete">
                            <button type="submit" class="btn btn-danger btn-fill pull-left" style="margin-left: 40%;">Hapus</button>
                          </a>
                        </div>
                      </div>
                    </div>
                   </td>

            </td>
            </td>
            </tr>
            <?php } ?>
            </tfoot>
          </table>
          </div>

          <!-- card-body -->
          </div>
        <!-- container fluid   -->
        </div> 
      </section>
      <!-- content -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengalaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="<?= base_url('admin/experience/add')?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Nama Pengalaman</label>
                    <input type="text" name="nama_peng" class="form-control" placeholder="Nama Pengalaman . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Waktu Pengalaman</label>
                    <input type="text" name="waktu_peng" class="form-control" placeholder="Waktu Pengalaman . ." value="">
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-grup">
                    <label>Keterangan</label>
                    <input type="text" name="ket_peng" class="form-control" placeholder="Nama Pendidikan . ." value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div> 
          </div>
        </div>
      </div>

      <!-- Sticky Footer -->

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

<script>
  function deleteConfirm(url)
    {
      $('#btn-delete').attr('href', url);
      $('#hapus').modal();
    }
</script>

</body>

</html>
