		<!-- All JS Custom Plugins Link Here here -->
        <script src="/asset_reader/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="/asset_reader/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/asset_reader/assets/js/popper.min.js"></script>
        <script src="/asset_reader/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="/asset_reader/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/asset_reader/assets/js/owl.carousel.min.js"></script>
        <script src="/asset_reader/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="/asset_reader/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="/asset_reader/assets/js/wow.min.js"></script>
		<script src="/asset_reader/assets/js/animated.headline.js"></script>
        <script src="/asset_reader/assets/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="/asset_reader/assets/js/jquery.ticker.js"></script>
        <script src="/asset_reader/assets/js/site.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="/asset_reader/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/asset_reader/assets/js/jquery.nice-select.min.js"></script>
		<script src="/asset_reader/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/asset_reader/assets/js/contact.js"></script>
        <script src="/asset_reader/assets/js/jquery.form.js"></script>
        <script src="/asset_reader/assets/js/jquery.validate.min.js"></script>
        <script src="/asset_reader/assets/js/mail-script.js"></script>
        <script src="/asset_reader/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/asset_reader/assets/js/plugins.js"></script>
        <script src="/asset_reader/assets/js/main.js"></script>
        




        <script src="/vendor/lazyload/lazysizes.min.js" async></script>
    {{-- PDF Viewer --}}
    <script src="/vendor/pdf_viewer/pdfobject.js"></script>
    <script>
        let files = Array.from(document.querySelectorAll('#file'));
        files.forEach(file => {
            file.addEventListener('click', () => {
                console.log(file.dataset.file);
                console.log(file.dataset.pdf);
                PDFObject.embed('/storage/'+file.dataset.pdf, "#example1");
            })
        })
    </script>

{{-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
<script>
    $('.single-item').slick({
        autoplay:true,
        arrows: false,
        autoplaySpeed:1250,
        mobileFirst: true,
    });
</script>

    </body>
</html>