<!-- BEGIN Left Aside -->
<aside class="page-sidebar">
    <div class="page-logo">
        <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
            data-toggle="modal" data-target="#modal-shortcut">
            <img src="/img/logo.png" alt="{{ $about->name }}" aria-roledescription="logo">
            <span class="page-logo-text mr-1">{{ $about->name }}</span>
            <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
            <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
        </a>
    </div>
    <!-- BEGIN PRIMARY NAVIGATION -->
    <nav id="js-primary-nav" class="primary-nav" role="navigation">
        <div class="nav-filter">
            <div class="position-relative">
                <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off"
                    data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                    <i class="fal fa-chevron-up"></i>
                </a>
            </div>
        </div>
        <div class="info-card">
            <img src="{{ asset('storage/' . auth()->user()->image) }}" class="profile-image rounded-circle"
                alt="Dr. Codex Lantern">
            <div class="info-card-text">
                <a href="#" class="d-flex align-items-center text-white">
                    <span class="text-truncate text-truncate-sm d-inline-block">
                        {{ auth()->user()->name }}
                    </span>
                </a>
            </div>
            <img src="/img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">
            <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle"
                data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                <i class="fal fa-angle-down"></i>
            </a>
        </div>
        <ul id="js-nav-menu" class="nav-menu">
            <li class="@yield('dashboard')">
                <a href="{{ url('/dashboard') }}" title="Dashboard">
                    <i class="fal fa-tachometer-alt"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="@yield('dashboardAbout')">
                <a href="javascript:voisd(0)" title="Identitas">
                    <i class="fal fa-info-circle"></i>
                    <span class="nav-link-text">Identitas</span>
                </a>
                <ul>
                    <li class="@yield('editAbout')">
                        <a href="{{  url('/dashboard/about/1/edit') }}" title="Edit Identitas">
                            <span class="nav-link-text">Edit Identitas</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@yield('dashboardFacility')">
                <a href="javascript:void(0)" title="Fasilitas">
                    <i class="fal fa-chess-queen"></i>
                    <span class="nav-link-text">Fasilitas</span>
                </a>
                <ul>
                    <li class="@yield('showFacility')">
                        <a href="{{ route('dashboardFacility') }}" title="Lihat Fasilitas">
                            <span class="nav-link-text">Lihat Fasilitas</span>
                        </a>
                    </li>
                    <li class="@yield('createFacility')">
                        <a href="{{ url('/dashboard/facility/create') }}" title="Buat Fasilitas Baru">
                            <span class="nav-link-text">Tambah Fasilitas</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@yield('dashboardRoomType')">
                <a href="javascript:void(0)" title="Tipe Kamar">
                    <i class="fal fa-chess-queen"></i>
                    <span class="nav-link-text">Tipe Kamar</span>
                </a>
                <ul>
                    <li class="@yield('showRoomType')">
                        <a href="{{ route('dashboardRoomType') }}" title="Lihat Tipe Kamar">
                            <span class="nav-link-text">Lihat Tipe Kamar</span>
                        </a>
                    </li>
                    <li class="@yield('createRoomType')">
                        <a href="{{ url('/dashboard/room_types/create') }}" title="Buat Tipe Kamar Baru">
                            <span class="nav-link-text">Tambah Tipe Kamar</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="@yield('dashboardGallery')">
                <a href="javascript:void(0)" title="Galeri">
                    <i class="fal fa-images"></i>
                    <span class="nav-link-text">Galeri</span>
                </a>
                <ul>
                    <li class="@yield('showGallery')">
                        <a href="{{ route('dashboardGallery') }}" title="Lihat Galeri">
                            <span class="nav-link-text">Lihat Galeri</span>
                        </a>
                    </li>
                    <li class="@yield('createGallery')">
                        <a href="{{ url('/dashboard/gallery/create') }}" title="Buat Galeri Baru">
                            <span class="nav-link-text">Tambah Galeri</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="@yield('dashboardContact')">
                <a href="{{ route('dashboardContact') }}" title="List Kontak dari Web">
                    <i class="fal fa-id-card"></i>
                    <span class="nav-link-text">Kontak</span>
                </a>
            </li>
            <li class="@yield('dashboardAnnouncement')">
                <a href="{{ route('dashboardAnnouncement') }}" title="Pengumuman">
                    <i class="fal fa-bullhorn"></i>
                    <span class="nav-link-text">Pengumuman</span>
                </a>
            </li>
            <li class="@yield('dashboardReview')">
                <a href="{{ route('dashboardReview') }}" title="Ulasan" data-filter-tags="review">
                    <i class="fal fa-star"></i>
                    <span class="nav-link-text" data-i18n="nav.review">Ulasan</span>
                </a>
            </li>

            <li class="@yield('dashboardNews')">
                <a href="javascript:void(0)" title="Berita">
                    <i class="fal fa-newspaper"></i>
                    <span class="nav-link-text">Berita</span>
                </a>
                <ul>
                    <li class="@yield('showNews')">
                        <a href="{{ route('dashboardPosts') }}" title="Lihat Berita">
                            <span class="nav-link-text">Lihat Berita</span>
                        </a>
                    </li>
                    <li class="@yield('createNews')">
                        <a href="{{ url('/dashboard/posts/create') }}" title="Buat Berita Baru">
                            <span class="nav-link-text">Tambah Berita</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="@yield('dashboardAdmin')">
                <a href="javascript:void(0)" title="Berita">
                    <i class="fal fa-user"></i>
                    <span class="nav-link-text">Admin</span>
                </a>
                <ul>
                    <li class="@yield('showAdmin')">
                        <a href="{{ route('dashboardAdmin') }}" title="Admin">
                            <span class="nav-link-text">Lihat Admin</span>
                        </a>
                    </li>
                    <li class="@yield('createAdmin')">
                        <a href="{{ url('/dashboard/users/create') }}" title="Buat Admin Baru">
                            <span class="nav-link-text">Tambah Admin</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="@yield('dashboardMenu')">
                <a href="javascript:void(0)" title="Menu">
                    <i class="fal fa-barcode-alt"></i>
                    <span class="nav-link-text">Default Menu</span>
                </a>
                <ul>
                    @include('admin.inc.nav-default')
                </ul>
            </li>
            <li class="@yield('pages')">
                <a href="{{ route('beranda') }}" title="Analytics Dashboard" data-filter-tags="Pages">
                    <i class="fal fa-window"></i>
                    <span class="nav-link-text" data-i18n="nav.pages">Pages</span>
                </a>
            </li>

            </li>
        </ul>
        <div class="filter-message js-filter-message bg-success-600"></div>
    </nav>
    <!-- END PRIMARY NAVIGATION -->
    <!-- NAV FOOTER -->
    <div class="nav-footer shadow-top">
        <a href="#" onclick="return false;" data-action="toggle" data-class="nav-function-minify"
            class="hidden-md-down">
            <i class="ni ni-chevron-right"></i>
            <i class="ni ni-chevron-right"></i>
        </a>
        <ul class="list-table m-auto nav-footer-buttons">
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Chat logs">
                    <i class="fal fa-comments"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Support Chat">
                    <i class="fal fa-life-ring"></i>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Make a call">
                    <i class="fal fa-phone"></i>
                </a>
            </li>
        </ul>
    </div> <!-- END NAV FOOTER -->
</aside>
<!-- END Left Aside -->