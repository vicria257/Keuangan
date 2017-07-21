<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        TRANSAKSI 
        <small>Daftar Transaksi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Transaksi</li>
    </ol>
  	<!-- Main content -->
    <section class="content">
          <div class="row">
            <div class="col-md-12">
            <p>
            <a class="btn btn-success" href="<?php echo base_url('C_transaksi/tambah')?>" type="submit">Tambah transaksi</a>
            </p>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Transaksi</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Tanggal</th>
                      <th>ID_member</th>
                      <th>Kategori</th>
                      <th>Type</th>
                      <th>Jumlah</th>
                      <th>Keterangan</th>
                      <th>Action</th>
                    </tr>
                    <?php  
                  $id_transaksi=1;
                  foreach ($financial as $transaksi) {
                    echo "<tr>";
                    echo '<td>'.$transaksi['id_transaksi']."</td>";
                    echo '<td>'.$transaksi['tanggal']."</td>";
                    echo '<td>'.$transaksi['id_member']."</td>";
                    echo '<td>'.$transaksi['id_kategori']."</td>";
                    echo '<td>'.$transaksi['tipe']."</td>";
                    echo '<td>'.$transaksi['jml_transaksi']."</td>";
                    echo '<td>'.$transaksi['keterangan']."</td>";
                    //echo '<td>'.anchor('buku/edit/'.$buku['idNovel'],'Edit')."</td>";
                    //echo '<td><a data-toggle="modal" id="test" data-target="#m_delete" data-href="'.base_url()."buku/hapus/".$buku['idNovel'].'"> Hapus</td>';
                    //echo '<td>'.anchor('buku/hapus/'.$buku['idNovel'],'Hapus')."</td>";
                    echo "</tr>";

                  }
                  ?>
                  </table>
              	</div><!-- /.box -->
    			</div>
    		  </div>
    		</div>
    </section>
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