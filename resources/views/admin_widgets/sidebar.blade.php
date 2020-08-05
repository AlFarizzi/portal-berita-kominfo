<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.index')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Berita </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('berita.store')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Tambah Berita </span></a></li>
                        {{-- <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Tambah Kategori Berita </span></a></li> --}}
                        <li class="sidebar-item"><a href="{{route('kementrian.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Berita Kementrian </span></a></li>
                        <li class="sidebar-item"><a href="{{route('pemerintah.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Berita Pemerintah </span></a></li>
                        <li class="sidebar-item"><a href="{{route('pers.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Siaran Pers </span></a></li>
                        <li class="sidebar-item"><a href="{{route('media.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Sorotan Media </span></a></li>
                        <li class="sidebar-item"><a href="{{route('artikel.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Artikel </span></a></li>
                        {{-- <li class="sidebar-item"><a href="{{route('foto.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Galeri Foto </span></a></li>
                        <li class="sidebar-item"><a href="{{route('video.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Galeri Video </span></a></li>
                        <li class="sidebar-item"><a href="{{route('next.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> KOMINFONEXT </span></a></li> --}}
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Layanan</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Informasi Publik </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Informasi Berkala </span></a></li>
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Informasi Setiap Saat </span></a></li>
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Informasi Serta Merta </span></a></li>
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Permohonan Informasi </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Publikasi </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('laporan.store')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tambah Laporan</span></a></li>
                        <li class="sidebar-item"><a href="{{route('hoaks.index')}}" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Laporan Hoaks</span></a></li>
                        <li class="sidebar-item"><a href="{{route('keuangan.index')}}" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Laporan Keuangan </span></a></li>
                        <li class="sidebar-item"><a href="{{route('tahunan.index')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Laporan Tahunan </span></a></li>
                        <li class="sidebar-item"><a href="{{route('kinerja.index')}}" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Laporan Kinerja </span></a></li>
                        <li class="sidebar-item"><a href="{{route('layanan.index')}}" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Pelayanan Informasi Publik </span></a></li>
                        <li class="sidebar-item"><a href="{{route('survey.index')}}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Hasil Survey Pelayanan Publik </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Logout </span></a></li>
               
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>