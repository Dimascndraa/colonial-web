<?php

use App\Models\About;
use App\Models\Category;
use App\Models\SocialMedia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardReviewController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardFacilityController;
use App\Http\Controllers\DashboardRoomTypeController;
use App\Http\Controllers\DashboardAnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('beranda');

// ====================================== Pages
Route::get('/pages/book', [PagesController::class, 'book'])->name('booking');
Route::get('/pages/covid', [PagesController::class, 'covid'])->name('covid');
Route::get('/pages/dining', [PagesController::class, 'dining'])->name('dinning');
Route::get('/pages/donate', [PagesController::class, 'donate'])->name('donate');
Route::get('/pages/map', [PagesController::class, 'map'])->name('map');
Route::get('/pages/facility', [PagesController::class, 'facility'])->name('facility');
Route::get('/pages/team', [PagesController::class, 'team'])->name('team');
Route::get('/pages/review', [PagesController::class, 'review'])->name('review');
Route::get('/pages/posts', [PostController::class, 'index'])->name('posts');
Route::get('/pages/posts/{post:slug}', [PostController::class, 'show'])->name('detail_posts');

// Route::get('/pages/categories/{category:slug}', function (Category $category) {
//     $about = About::all()->first();
//     $socialMedia = SocialMedia::all()->first();

//     return view('pages.category', [
//         'title' => "Latest News",
//         'socialMedia' => $socialMedia,
//         'name' => "$about->name",
//         'about' => $about,
//         'category' => Category::all()
//     ]);
// });

// Route::get('/pages/authors/{user:username}', function (User $user) {
//     $about = About::all()->first();
//     $socialMedia = SocialMedia::all()->first();

//     return view('pages.posts', [
//         'title' => "Latest News",
//         'socialMedia' => $socialMedia,
//         'name' => "$about->name",
//         'about' => $about,
//         'posts' => $user->posts
//     ]);
// });


Route::get('/admin', function () {
    return view('auth.register');
});


// ====================================== Authorizatiom
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'CekLevel:admin'])->name('dashboard');

require __DIR__ . '/auth.php';

// ======================================= Admin

// INTEL
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/dashboard', function () {
        $about = About::all()->first();
        return view('admin.index', [
            'title' => 'Dashboard',
            'about' => $about
        ]);
    })->name('dashboard');
    Route::resource('/dashboard/about', DashboardAboutController::class)->name('edit', 'dashboardAbout');
    Route::resource('/dashboard/gallery', DashboardGalleryController::class)->name('index', 'dashboardGallery');
    Route::resource('/dashboard/contact', DashboardContactController::class)->name('index', 'dashboardContact');
    Route::resource('/dashboard/announcement', DashboardAnnouncementController::class)->name('index', 'dashboardAnnouncement');
    Route::resource('/dashboard/review', DashboardReviewController::class)->name('index', 'dashboardReview');
    Route::resource('/dashboard/users', DashboardAdminController::class)->name('index', 'dashboardAdmin');
    Route::resource('/dashboard/facility', DashboardFacilityController::class)->name('index', 'dashboardFacility');


    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class)->name('index', 'dashboardPosts');

    Route::resource('/dashboard/room_types', DashboardRoomTypeController::class)->name('index', 'dashboardRoomType');
    // Route for room types
    Route::group(['prefix' => 'room_types', 'middleware' => 'auth'], function () {
        // Rutes for Room Type Images
        Route::get('/{id}/image', 'ImageController@index');
        Route::get('/{id}/image/create', 'ImageController@create');
        Route::post('/{id}/image', 'ImageController@store');
        Route::get('/{id}/image/{image_id}/edit', 'ImageController@edit');
        Route::put('/{id}/image/{image_id}/edit', 'ImageController@update');
        Route::get('/{id}/image/create_multiple', 'ImageController@create_multiple');
        Route::post('/{id}/image/create_multiple', 'ImageController@store_multiple');
        Route::delete('/{id}/image/{image_id}', 'ImageController@destroy');

        // Routes for Rooms
        Route::get('/{id}/room', 'RoomController@index');
        Route::get('/{id}/room/create', 'RoomController@create');
        Route::post('/{id}/room', 'RoomController@store');
        Route::get('/{id}/room/{room_id}/edit', 'RoomController@edit');
        Route::put('/{id}/room/{room_id}/edit', 'RoomController@update');
        Route::delete('/{id}/room/{image_id}', 'RoomController@destroy');
    });

    Route::get('/intel_marketing_dashboard', function () {
        return view('admin.pages.intel_marketing_dashboard', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/intel_introduction', function () {
        return view('admin.pages.intel_introduction', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/intel_privacy', function () {
        return view('admin.pages.intel_privacy', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/intel_build_notes', function () {
        return view('admin.pages.intel_build_notes', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    // SETTING
    Route::get('/settings_how_it_works', function () {
        return view('admin.pages.settings_how_it_works', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/settings_layout_options', function () {
        return view('admin.pages.settings_layout_options', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/settings_skin_options', function () {
        return view('admin.pages.settings_skin_options', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/settings_saving_db', function () {
        return view('admin.pages.settings_saving_db', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    // INFO
    Route::get('/info_app_docs', function () {
        return view('admin.pages.info_app_docs', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/info_app_licensing', function () {
        return view('admin.pages.info_app_licensing', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/info_app_flavors', function () {
        return view('admin.pages.info_app_flavors', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    // UI
    Route::get('/ui_alerts', function () {
        return view('admin.pages.ui_alerts', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/ui_accordion', function () {
        return view('admin.pages.ui_accordion', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/ui_badges', function () {
        return view('admin.pages.ui_badges', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/ui_breadcrumbs', function () {
        return view('admin.pages.ui_breadcrumbs', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/ui_buttons', function () {
        return view('admin.pages.ui_buttons', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/ui_button_group', function () {
        return view('admin.pages.ui_button_group', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_cards', function () {
        return view('admin.pages.ui_cards', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_carousel', function () {
        return view('admin.pages.ui_carousel', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_collapse', function () {
        return view('admin.pages.ui_collapse', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_dropdowns', function () {
        return view('admin.pages.ui_dropdowns', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_list_filter', function () {
        return view('admin.pages.ui_list_filter', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_modal', function () {
        return view('admin.pages.ui_modal', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_navbars', function () {
        return view('admin.pages.ui_navbars', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_panels', function () {
        return view('admin.pages.ui_panels', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_pagination', function () {
        return view('admin.pages.ui_pagination', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_popovers', function () {
        return view('admin.pages.ui_popovers', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_progress_bars', function () {
        return view('admin.pages.ui_progress_bars', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_scrollspy', function () {
        return view('admin.pages.ui_scrollspy', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_side_panel', function () {
        return view('admin.pages.ui_side_panel', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_spinners', function () {
        return view('admin.pages.ui_spinners', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_tabs_pills', function () {
        return view('admin.pages.ui_tabs_pills', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_toasts', function () {
        return view('admin.pages.ui_toasts', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/ui_tooltips', function () {
        return view('admin.pages.ui_tooltips', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    // utilities

    Route::get('/utilities_borders', function () {
        return view('admin.pages.utilities_borders', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_clearfix', function () {
        return view('admin.pages.utilities_clearfix', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_color_pallet', function () {
        return view('admin.pages.utilities_color_pallet', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_display_property', function () {
        return view('admin.pages.utilities_display_property', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_fonts', function () {
        return view('admin.pages.utilities_fonts', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_flexbox', function () {
        return view('admin.pages.utilities_flexbox', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_helpers', function () {
        return view('admin.pages.utilities_helpers', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_position', function () {
        return view('admin.pages.utilities_position', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_responsive_grid', function () {
        return view('admin.pages.utilities_responsive_grid', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_sizing', function () {
        return view('admin.pages.utilities_sizing', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_spacing', function () {
        return view('admin.pages.utilities_spacing', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/utilities_typography', function () {
        return view('admin.pages.utilities_typography', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //font

    Route::get('/icons_fontawesome_light', function () {
        return view('admin.pages.icons_fontawesome_light', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_fontawesome_regular', function () {
        return view('admin.pages.icons_fontawesome_regular', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_fontawesome_solid', function () {
        return view('admin.pages.icons_fontawesome_solid', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_fontawesome_brand', function () {
        return view('admin.pages.icons_fontawesome_brand', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_nextgen_general', function () {
        return view('admin.pages.icons_nextgen_general', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_nextgen_base', function () {
        return view('admin.pages.icons_nextgen_base', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_stack_showcase', function () {
        return view('admin.pages.icons_stack_showcase', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_stack_generate', function () {
        return view('admin.pages.icons_stack_generate', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });


    //tabel
    Route::get('/tables_basic', function () {
        return view('admin.pages.tables_basic', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/tables_generate_style', function () {
        return view('admin.pages.tables_generate_style', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });


    //Form Stuff
    Route::get('/form_basic_inputs', function () {
        return view('admin.pages.form_basic_inputs', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/form_checkbox_radio', function () {
        return view('admin.pages.form_checkbox_radio', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/form_input_groups', function () {
        return view('admin.pages.form_input_groups', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/form_validation', function () {
        return view('admin.pages.form_validation', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_elements', function () {
        return view('admin.pages.form_elements', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    //Core Plugins

    Route::get('/plugin_faq', function () {
        return view('admin.pages.plugin_faq', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_waves', function () {
        return view('admin.pages.plugin_waves', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_pacejs', function () {
        return view('admin.pages.plugin_pacejs', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_smartpanels', function () {
        return view('admin.pages.plugin_smartpanels', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_bootbox', function () {
        return view('admin.pages.plugin_bootbox', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_slimscroll', function () {
        return view('admin.pages.plugin_slimscroll', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_throttle', function () {
        return view('admin.pages.plugin_throttle', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_navigation', function () {
        return view('admin.pages.plugin_navigation', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_i18next', function () {
        return view('admin.pages.plugin_i18next', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/plugin_appcore', function () {
        return view('admin.pages.plugin_appcore', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //datatabel

    Route::get('/datatables_basic', function () {
        return view('admin.pages.datatables_basic', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_autofill', function () {
        return view('admin.pages.datatables_autofill', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_buttons', function () {
        return view('admin.pages.datatables_buttons', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_export', function () {
        return view('admin.pages.datatables_export', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_colreorder', function () {
        return view('admin.pages.datatables_colreorder', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_columnfilter', function () {
        return view('admin.pages.datatables_columnfilter', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_fixedcolumns', function () {
        return view('admin.pages.datatables_fixedcolumns', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_fixedheader', function () {
        return view('admin.pages.datatables_fixedheader', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_keytable', function () {
        return view('admin.pages.datatables_keytable', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_responsive', function () {
        return view('admin.pages.datatables_responsive', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/datatables_responsive_alt', function () {
        return view('admin.pages.datatables_responsive_alt', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/datatables_rowgroup', function () {
        return view('admin.pages.datatables_rowgroup', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/datatables_rowreorder', function () {
        return view('admin.pages.datatables_rowreorder', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_scroller', function () {
        return view('admin.pages.datatables_scroller', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_select', function () {
        return view('admin.pages.datatables_select', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/datatables_alteditor', function () {
        return view('admin.pages.datatables_alteditor', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    // statistik

    Route::get('/statistics_flot', function () {
        return view('admin.pages.statistics_flot', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_chartjs', function () {
        return view('admin.pages.statistics_chartjs', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_chartist', function () {
        return view('admin.pages.statistics_chartist', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_c3', function () {
        return view('admin.pages.statistics_c3', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_peity', function () {
        return view('admin.pages.statistics_peity', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_sparkline', function () {
        return view('admin.pages.statistics_sparkline', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_easypiechart', function () {
        return view('admin.pages.statistics_easypiechart', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/statistics_dygraph', function () {
        return view('admin.pages.statistics_dygraph', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //notifikasi

    Route::get('/notifications_sweetalert2', function () {
        return view('admin.pages.notifications_sweetalert2', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/notifications_toastr', function () {
        return view('admin.pages.notifications_toastr', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //form plugins

    Route::get('/form_plugins_colorpicker', function () {
        return view('admin.pages.form_plugins_colorpicker', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugins_datepicker', function () {
        return view('admin.pages.form_plugins_datepicker', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugins_daterange_picker', function () {
        return view('admin.pages.form_plugins_daterange_picker', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugins_dropzone', function () {
        return view('admin.pages.form_plugins_dropzone', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugins_ionrangeslider', function () {
        return view('admin.pages.form_plugins_ionrangeslider', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugins_inputmask', function () {
        return view('admin.pages.form_plugins_inputmask', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugin_imagecropper', function () {
        return view('admin.pages.form_plugin_imagecropper', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugin_select2', function () {
        return view('admin.pages.form_plugin_select2', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/form_plugin_summernote', function () {
        return view('admin.pages.form_plugin_summernote', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //Miscellaneous

    Route::get('/miscellaneous_fullcalendar', function () {
        return view('admin.pages.miscellaneous_fullcalendar', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/miscellaneous_lightgallery', function () {
        return view('admin.pages.miscellaneous_lightgallery', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //Page Views

    Route::get('/page_chat', function () {
        return view('admin.pages.page_chat', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/page_contacts', function () {
        return view('admin.pages.page_contacts', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    // Forum

    Route::get('/page_forum_list', function () {
        return view('admin.pages.page_forum_list', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/page_forum_threads', function () {
        return view('admin.pages.page_forum_threads', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
    Route::get('/page_forum_discussion', function () {
        return view('admin.pages.page_forum_discussion', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //pages inbox
    Route::get('/page_inbox_general', function () {
        return view('admin.pages.page_inbox_general', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_inbox_read', function () {
        return view('admin.pages.page_inbox_read', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_inbox_write', function () {
        return view('admin.pages.page_inbox_write', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //Invoice (printable)

    Route::get('/page_invoice', function () {
        return view('admin.pages.page_invoice', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });


    //Authentication
    Route::get('/page_forget', function () {
        return view('admin.pages.page_forget', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_locked', function () {
        return view('admin.pages.page_locked', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_login', function () {
        return view('admin.pages.page_login', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_login-alt', function () {
        return view('admin.pages.page_login-alt', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_register', function () {
        return view('admin.pages.page_register', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_confirmation', function () {
        return view('admin.pages.page_confirmation', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //Error Pages

    Route::get('/page_error', function () {
        return view('admin.pages.page_error', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_error_404', function () {
        return view('admin.pages.page_error_404', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/page_error_announced', function () {
        return view('admin.pages.page_error_announced', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //Profile

    Route::get('/page_profile', function () {
        return view('admin.pages.page_profile', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });


    //search
    Route::get('/page_search', function () {
        return view('admin.pages.page_search', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    //blank
    Route::get('/blank', function () {
        return view('admin.pages.blank', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });


    //search
    Route::get('/form_samples', function () {
        return view('admin.pages.form_samples', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });

    Route::get('/icons_construct_', function () {
        return view('admin.pages.icons_construct_', [
            'title' => 'Default Menu',
            'about' => About::all()->first()
        ]);
    });
});
