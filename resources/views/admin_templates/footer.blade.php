    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/asset_admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/asset_admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/asset_admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/asset_admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/asset_admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/asset_admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/asset_admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/asset_admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="/asset_admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/dataTables/jquery.dataTables.min.js"></script>
    <script>
        let body = document.getElementById('body');
        if (body !== null) {
            CKEDITOR.replace('body');   
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        let alert = document.getElementById('alert');
        if (alert !== null) {
            setTimeout(() => {
                alert.remove();
            }, 2000);    
        } 
    </script>
</body>
</html>