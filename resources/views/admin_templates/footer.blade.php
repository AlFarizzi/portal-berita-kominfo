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
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/dataTables/jquery.dataTables.min.js"></script>
    <script src="/pdf_viewer/pdfobject.js"></script>
    <script>
        let files = Array.from(document.querySelectorAll('#file'));
        files.forEach(file => {
            file.addEventListener('click', () => {
                console.log(file.dataset.pdf);
                PDFObject.embed('/storage/'+file.dataset.pdf, "#example1");
            })
        })
    </script>
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
        let sub = document.getElementById('sub');
        let cho = document.querySelectorAll('#choice');
        cho.forEach(c => {
            c.addEventListener('click', () => {
                if (c.dataset.id == 1) {
                    sub.style.opacity = 1;
                } else {
                    sub.style.opacity = 0;
                }
            })
        });
    
    </script>
</body>
</html>