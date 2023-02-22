<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title', 'My App') - @yield('mywebname', 'SmartAdmin')
    </title>
    <meta name="description" content="Analytics Dashboard">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="/css/vendors.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/app.bundle.css">
    <link id="mythemes" rel="stylesheet" media="screen, print" href="/css/themes/cust-theme-3.css">
    <link id="myskins" rel="stylesheet" media="screen, print" href="/css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/reactions/reactions.css">
    <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/jqvmap/jqvmap.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="/css/fa-regular.css">
    <link rel="stylesheet" media="screen, print" href="/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/statistics/chartjs/chartjs.css">
    <link rel="stylesheet" media="screen, print" href="/css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="/css/statistics/c3/c3.css">
    <link rel="stylesheet" media="screen, print" href="/css/statistics/dygraph/dygraph.css">
    <link rel="stylesheet" media="screen, print" href="/css/notifications/sweetalert2/sweetalert2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/notifications/toastr/toastr.css">
    <link rel="stylesheet" media="screen, print"
        href="/css/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" media="screen, print"
        href="/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/dropzone/dropzone.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/ion-rangeslider/ion-rangeslider.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/cropperjs/cropper.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/formplugins/summernote/summernote.css">
    <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="/css/page-invoice.css">
    <link rel="stylesheet" media="screen, print" href="/css/theme-demo.css">

    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/logo.ico" type="image/x-icon">

    <!-- DataTables -->
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    {{-- SweetAlert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-grup="file-tools"] {
            display: none;
        }
    </style>
    <!-- BEGIN Body -->
    <!-- Possible Classes
    
    * 'header-function-fixed'         - header is in a fixed at all times
    * 'nav-function-fixed'            - left panel is fixed
    * 'nav-function-minify'			  - skew nav to maximize space
    * 'nav-function-hidden'           - roll mouse on edge to reveal
    * 'nav-function-top'              - relocate left pane to top
    * 'mod-main-boxed'                - encapsulates to a container
    * 'nav-mobile-push'               - content pushed on menu reveal
    * 'nav-mobile-no-overlay'         - removes mesh on menu reveal
    * 'nav-mobile-slide-out'          - content overlaps menu
    * 'mod-bigger-font'               - content fonts are bigger for readability
    * 'mod-high-contrast'             - 4.5:1 text contrast ratio
    * 'mod-color-blind'               - color vision deficiency
    * 'mod-pace-custom'               - preloader will be inside content
    * 'mod-clean-page-bg'             - adds more whitespace
    * 'mod-hide-nav-icons'            - invisible navigation icons
    * 'mod-disable-animation'         - disables css based animations
    * 'mod-hide-info-card'            - hides info card from left panel
    * 'mod-lean-subheader'            - distinguished page header
    * 'mod-nav-link'                  - clear breakdown of nav links
    
    >>> more settings are described inside documentation page >>>
    -->
</head>

<body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed @yield('tmp_body')">
    <!-- DOC: script to save and load page settings -->
    <script>
        /**
             *	This script should be placed right after the body tag for fast execution 
                *	Note: the script is written in pure javascript and does not depend on thirdparty library
                **/
            'use strict';
        
            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c? Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("Heads up! Theme settings is empty or does not exist, loading default settings...");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }
        
    </script>
    <!-- BEGIN Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-inner">
            <!-- BEGIN Left Aside -->
            @include('admin.inc.page_sidebar')
            <!-- END Left Aside -->
            <div class="page-content-wrapper">
                <!-- BEGIN Page Header -->
                @include('admin.inc.page_header')
                <!-- END Page Header -->
                <!-- BEGIN Page Content -->
                <!-- the #js-page-content id is needed for some plugins to initialize -->
                @yield('content')
                <!-- this overlay is activated only when mobile menu is triggered -->
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
                <!-- END Page Content -->
                <!-- BEGIN Page Footer -->
                @include('admin.inc.footer')
                <!-- END Page Footer -->
                <!-- BEGIN Shortcuts -->
                <!-- modal shortcut -->
                @include('admin.inc.shortcuts')
                <!-- END Shortcuts -->
            </div>
        </div>
    </div>

    @if (session()->has('success'))
    <script>
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            })
    </script>
    <script>
        function konfirmasi() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
    </script>
    @endif
    <!-- END Page Wrapper -->
    <!-- BEGIN Quick Menu -->
    <!-- to add more items, please make sure to change the variable '$menu-items: number;' in your _page-components-shortcut.scss -->
    @include('admin.inc.quickmenu')
    <!-- END Quick Menu -->
    <!-- BEGIN Messenger -->
    @include('admin.inc.messenger')
    <!-- END Messenger -->
    <!-- BEGIN Page Settings -->
    @include('admin.inc.setting')
    <!-- END Page Settings -->
    <!-- base vendor bundle: 
    DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
    + pace.js (recommended)
    + jquery.js (core)
    + jquery-ui-cust.js (core)
    + popper.js (core)
    + bootstrap.js (core)
    + slimscroll.js (extension)
    + app.navigation.js (core)
    + ba-throttle-debounce.js (core)
    + waves.js (extension)
    + smartpanels.js (extension)
    + src/../jquery-snippets.js (core) -->
    <!-- jQuery -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
                $("#datatab").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                    "buttons": ["excel", "pdf", "colvis"]
                }).buttons().container().appendTo('#datatab_wrapper .col-md-6:eq(0)');
            });
    </script>

    <!-- ChartJS -->
    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

    <script src="/js/vendors.bundle.js"></script>
    <script src="/js/app.bundle.js"></script>
    <script type="text/javascript">
        /* Activate smart panels */
    	$('#js-page-content').smartPanel();
    </script>

    @yield('plugin')


</body>

</html>