<footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y')?> .</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versi</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= admin_assets() ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= admin_assets() ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= admin_assets() ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= admin_assets() ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= admin_assets() ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= admin_assets() ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= admin_assets() ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= admin_assets() ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= admin_assets() ?>plugins/moment/moment.min.js"></script>
<script src="<?= admin_assets() ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= admin_assets() ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= admin_assets() ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= admin_assets() ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= admin_assets() ?>dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= admin_assets() ?>dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= admin_assets() ?>dist/js/pages/dashboard.js"></script>
</body>
</html>
