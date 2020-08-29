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

            <style>
                .love {
                    color:red
                }
                .git {
                    color: black
                }
            </style>

            <footer class="footer text-center">
               Backend Developed With <i class="love fas fa-heart"></i> By <a href="https://github.com/AlFarizzi"><i class="git fab fa-github"></i>AlFarizzi</a>
            </footer>
        </div>
    </div>
@include('admin_templates.footer')