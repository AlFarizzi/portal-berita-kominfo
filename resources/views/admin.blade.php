@include('admin_templates.header')
@include('admin_widgets.preloader')
@include('sweetalert::alert')
    <div id="main-wrapper">
        @include('admin_widgets.navbar')
        @include('admin_widgets.sidebar')

        <div class="page-wrapper">
            <div class="container-fluid">
               @yield('content')
            </div>

            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
    </div>
@include('admin_templates.footer')