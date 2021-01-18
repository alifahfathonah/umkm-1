
 
    <!-- Main content -->  
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row"> 
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
           <a href="<?php echo base_url() ?>umkm">
            <div class="small-box bg-red img-thumbnail" style="border-width: 3px; border-color: #ffffff;">
              <div class="inner">
                <h3><?php echo $umkm ?></h3>

                <p>DATA UMKM</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
         <a href="<?php echo base_url() ?>bumn">
          <div class="small-box bg-green img-thumbnail" style="border-width: 3px; border-color: #ffffff;">
            <div class="inner">
              <h3><?php echo $bumn ?></h3>

              <p>RUMAH BUMN</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
          </div>
        </a>
        </div>

      </div>

      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Pendaftar terbaru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <table class="table table-bordered table-responsive">
            <thead>
              <tr>
                <td>No</td>
                <td>Username</td>
                <td>Sebagai</td>
                <td>Tangal</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
                <?php foreach ($data as $key): ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $key['user_name'] ?></td>
                    <td><?=($key['user_level'] == 1)?'BUMN':'UMKM' ?></td>
                    <td><?php echo $key['user_tanggal'] ?></td>
                  </tr>
               <?php $i++ ?>
              <?php endforeach ?>
            </tbody>
          </table>

        </div>
        <!-- /.box-body -->
      </div>


          <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>adminLTE/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>adminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>adminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>adminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>adminLTE/dist/js/demo.js"></script>

<script src="<?php echo base_url() ?>adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/chart/Chart.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>adminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- FLOT CHARTS -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/Flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/Flot/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/Flot/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/Flot/jquery.flot.categories.js"></script>
<!-- Page script -->

<!-- Select2 -->
<script src="<?php echo base_url() ?>adminLTE/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="<?php echo base_url() ?>adminLTE/bower_components/ckeditor/ckeditor.js"></script>


  <script type="text/javascript">
    <!--
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
 
    function checkTime(i) {
        if (i < 0) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->
    </script>
 
    <!-- Menampilkan Hari, Bulan dan Tahun -->
    
    <script type='text/javascript'>

      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 000) ? yy + 1900 : yy;
      document.getElementById('date').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
    </script>