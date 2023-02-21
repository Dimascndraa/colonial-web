<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head> @include('admin.inc.header') </head>
    <body class="mod-bg-1 mod-nav-link header-function-fixed nav-function-fixed @yield('tmp_body')">
		@include('admin.inc.script_body')
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
                    @include('admin.inc.shortcuts') <!-- END Shortcuts -->
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
		@include('admin.inc.script_footer')
        
    </body>
</html>
