 





 <!-- jQuery 2.1.4 -->
    <script src="assets/js/jquery-1.12.0.min.js"></script>
    <!--data tables -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- form validation -->
    <script type="text/javascript" src="assets/js/parsley/parsley.min.js"></script>
    <!-- chart js -->
    <script src="assets/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="assets/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="assets/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="assets/js/icheck/icheck.min.js"></script>

    <script src="assets/js/custom.js"></script>
               <script>
                    $(document).ready(function() {
                        $('#example1').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'copyHtml5',
                                'excelHtml5',
                                'csvHtml5',
                                'pdfHtml5'
                            ]
                        } );
                    } );
                </script>

  </body>
</html>