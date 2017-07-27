<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        EDIT TRANSAKSI 
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Edit Transaksi</li> 
    </ol>

    <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Transaksi</h3>
        </div>
        <form action="<?php echo base_url('C_transaksi/v_edit');?> " method="POST">

        <script>
            $(function() {
              $( "#datepicker" ).datepicker();
              });
        </script>

        <div class="box-body">
          <div class="row">
              <div class="col-md-12">

                <input type="hidden" value="<?=$financial->row()->id_transaksi?>" name="id_transaksi"></input>

                <!-- tanggal -->
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="text"  name="tanggal" id="datepicker" class="form-control" value="<?=$financial->row()->tanggal?>">
                    
                </div>
                <!-- ID member-->
                <div class="form-group">
                  <label>Member</label>
                  <select class="form-control select2" style="width: 100%;" name="id_member">
                    <?php
                      foreach ($member->result_array() as $id_member) {
                          echo "<option value='".$id_member['id_member']."'>".$id_member['nama']."</option>";
                      }
                    ?>
                  </select>
                </div>
                <!-- /.form group ID member -->
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control select2" style="width: 100%;" name="id_kategori">
                    <?php
                      foreach ($kategori->result_array() as $id_kategori) {
                          echo "<option value='".$id_kategori['id_kategori']."'>".$id_kategori['nama_kategori']."</option>";
                      }
                    ?>
                  </select>
                </div>

                <!-- jumlah-->
                <div class="form-group">
                  <label>Jumlah Transaksi</label>
                  <input name="jml_transaksi" type="text" class="form-control" value="<?=$financial->row()->jml_transaksi?>">
                </div>
                <!-- keterangan-->
                <div class="form-group">
                  <label>Keterangan</label>
                  <input name="keterangan" type="text" class="form-control" value="<?=$financial->row()->keterangan?>">
                </div>
                <p>
                <button class="btn btn-success btn-pull-right" type="submit" value="submit" name="submit">Simpan</button>
                </p>
              </div>
              </div>
            </div>
          </div>  
      </form>
    </div>
</section>

<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/js/raphael-min.js') ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.min.js') ?>" type="text/javascript"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js') ?>" type="text/javascript"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js') ?>" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js') ?>" type="text/javascript"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>

<?php
$this->load->view('template/foot');
?>