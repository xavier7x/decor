</div>
<!-- ./wrapper -->

<?php
    for($f=0; $f<count($varAcceso['framework']); $f++){
        switch($varAcceso['framework'][$f]){       
            case 'jquery':
                echo '<script type="text/javascript" language="javascript" src="lib/js/jquery/jquery-2.2.4.min.js"></script>';
                break;
            case 'jquery-ui':
                echo '<script type="text/javascript" language="javascript" src="lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>';
                break;
            case 'bootstrap':
                echo '<script type="text/javascript" language="javascript" src="lib/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>';
                break;
            case 'bootstrap-datepicker':                    
                echo '<script type="text/javascript" language="javascript" src="lib/js/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="lib/js/bootstrap-datepicker-master/dist/locales/bootstrap-datepicker.es.min.js"></script>';
                break;                    
            case 'bootboxjs':                    
                echo '<script type="text/javascript" language="javascript" src="lib/js/bootboxjs/bootbox.min.js"></script>';
                break;
            case 'jqgrid':
                echo '<script type="text/javascript" language="javascript" src="lib/js/Guriddo_jqGrid_JS_5.1.1/js/i18n/grid.locale-es.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="lib/js/Guriddo_jqGrid_JS_5.1.1/js/jquery.jqGrid.min.js"></script>';
                break;
            case 'jquery-treeview':
                echo '<script type="text/javascript" language="javascript" src="lib/js/jzaefferer-jquery-treeview/jquery.treeview.js"></script>';
                break;
            case 'highcharts':
                echo '<script type="text/javascript" language="javascript" src="lib/js/Highcharts-4.2.5/js/highcharts.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="lib/js/Highcharts-4.2.5/js/modules/exporting.js"></script>';
                break;
        }
    }
?>
<script type="text/javascript" language="javascript" src="js/cabpie/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>
<script type="text/javascript" language="javascript" src="js/<?php echo $pagina; ?>/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<!-- jQuery 3 -->
<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
<!-- Bootstrap 3.3.7 -->
<!--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>