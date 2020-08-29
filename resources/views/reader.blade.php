@include('reader_templates.header')       
    <!-- Preloader Start -->
     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                {{-- <div class="preloader-circle"> --}}
                    <img src="/preloader.gif" alt="">
                {{-- </div> --}}
                {{-- <div class="preloader-img pere-text"> --}}
                    {{-- <img src="/asset_reader/assets/img/logo/logo.png" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header"s>
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li>{{date('l, d M Y')}} </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="https://github.com/AlFarizzi/" target="blank"><i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div style="background-color:#1474ae !important;" class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="{{route('reader.index')}}"><img src="/asset_reader/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    {{-- <img src="/asset_reader/logo.png" alt=""> --}}
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="{{route('reader.index')}}"><img src="/asset_reader/logo.png"" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="{{route('reader.index')}}">Beranda</a></li>
                                            <li><a href="#">Berita</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('index.kementrian')}}">Berita Kemetrian</a></li>
                                                    <li><a href="{{route('index.pemerintahan')}}">Berita Pemerintahan</a></li>
                                                    <li><a href="{{route('index.pers')}}">Sorotan Pers</a></li>
                                                    <li><a href="{{route('index.media')}}">Siaran Media</a></li>
                                                    <li><a href="{{route('index.artikel')}}">Artikel</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Informasi Publik</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('index.berkala')}}">Berkala</a></li>
                                                    <li><a href="{{route('index.setiap-saat')}}">Setiap Saat</a></li>
                                                    <li><a href="{{route('index.serta-merta')}}">Serta Merta</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Publikasi</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('index.hoaks')}}">Hoaks</a></li>
                                                    <li><a href="{{route('index.keuangan')}}">Keuangan</a></li>
                                                    <li><a href="{{route('index.tahunan')}}">Tahunan</a></li>
                                                    <li><a href="{{route('index.kinerja')}}">Kinerja</a></li>
                                                    <li><a href="{{route('index.pelayanan')}}">Pelayanan Informasi Publik</a></li>
                                                    <li><a href="{{route('index.hasil')}}">Hasil Survey Pelayanan Publik</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            {{-- <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" class="form-control"  placeholder="Search">           
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>
        @yield('content')
    </main>


    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
             <div class="container">
                 <div class="row d-flex justify-content-between">
                     <div class="col-md-6">
                         <div class="single-footer-caption">
                             <div class="single-footer-caption">
                                 <!-- logo -->
                                 <div class="footer-logo">
                                    <img src="/logo_footer.png" alt="">
                                 </div>
                                 <div class="footer-tittle">
                                     <div class="footer-pera">
                                         <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida sodales  Suscipit mauris pede for sectetuer.</p>
                                     </div>
                                 </div>
                                 <!-- social -->
                                 <div class="footer-social">
                                     <a href="https://github.com/AlFarizzi/" target="blank"><i class="fab fa-github"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-6">
                         <h6 class="text-white text-center">MENTERI KOMINFO</h6>
                        <img class="mx-auto d-block w-25 img-thumbnail img-fluid" src="/menteri.jpeg" alt="">
                    </div>
                 </div>
             </div>
         </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center justify-content-between">
                         <div class="col-lg-6">
                             <div class="footer-menu f-right">
                                 <ul>                             
                                     <li><a href="#">Terms of use</a></li>
                                     <li><a href="#">Privacy Policy</a></li>
                                     <li><a href="#">Contact</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

@include('reader_templates.footer')