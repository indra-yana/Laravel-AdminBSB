<?php

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

Route::get('/', function () {
    return view('template/dashboard.index');
})->name('adminBSB.dashboard.index');

Route::group(['prefix' => 'adminBSB-example'], function () {
    // TYPOGRAPHY
    Route::get('typography', function () {
        return view('template/typography.typography');
    })->name('adminBSB.typography');

    // HELPER CLASSES
    Route::get('helper-classes', function () {
        return view('template/helper-classes.helper-classes');
    })->name('adminBSB.helper-classes');

    // WIDGET
    Route::get('widgets/cards/basic', function () {
        return view('template/widgets/cards.basic');
    })->name('adminBSB.widgets.cards.basic');

    Route::get('widgets/cards/colored', function () {
        return view('template/widgets/cards.colored');
    })->name('adminBSB.widgets.cards.colored');

    Route::get('widgets/cards/no-header', function () {
        return view('template/widgets/cards.no-header');
    })->name('adminBSB.widgets.cards.no-header');

    Route::get('widgets/infobox/infobox-1', function () {
        return view('template/widgets/infobox.infobox-1');
    })->name('adminBSB.widgets.infobox.infobox-1');

    Route::get('widgets/infobox/infobox-2', function () {
        return view('template/widgets/infobox.infobox-2');
    })->name('adminBSB.widgets.infobox.infobox-2');

    Route::get('widgets/infobox/infobox-3', function () {
        return view('template/widgets/infobox.infobox-3');
    })->name('adminBSB.widgets.infobox.infobox-3');

    Route::get('widgets/infobox/infobox-4', function () {
        return view('template/widgets/infobox.infobox-4');
    })->name('adminBSB.widgets.infobox.infobox-4');

    Route::get('widgets/infobox/infobox-5', function () {
        return view('template/widgets/infobox.infobox-5');
    })->name('adminBSB.widgets.infobox.infobox-5');

    // UI
    Route::get('ui/alerts', function () {
        return view('template/ui.alerts');
    })->name('adminBSB.ui.alerts');

    Route::get('ui/animations', function () {
        return view('template/ui.animations');
    })->name('adminBSB.ui.animations');

    Route::get('ui/badges', function () {
        return view('template/ui.badges');
    })->name('adminBSB.ui.badges');

    Route::get('ui/breadcrumbs', function () {
        return view('template/ui.breadcrumbs');
    })->name('adminBSB.ui.breadcrumbs');

    Route::get('ui/buttons', function () {
        return view('template/ui.buttons');
    })->name('adminBSB.ui.buttons');

    Route::get('ui/collapse', function () {
        return view('template/ui.collapse');
    })->name('adminBSB.ui.collapse');

    Route::get('ui/colors', function () {
        return view('template/ui.colors');
    })->name('adminBSB.ui.colors');

    Route::get('ui/dialogs', function () {
        return view('template/ui.dialogs');
    })->name('adminBSB.ui.dialogs');

    Route::get('ui/icons', function () {
        return view('template/ui.icons');
    })->name('adminBSB.ui.icons');

    Route::get('ui/labels', function () {
        return view('template/ui.labels');
    })->name('adminBSB.ui.labels');

    Route::get('ui/list-group', function () {
        return view('template/ui.list-group');
    })->name('adminBSB.ui.list-group');

    Route::get('ui/media-object', function () {
        return view('template/ui.media-object');
    })->name('adminBSB.ui.media-object');

    Route::get('ui/modals', function () {
        return view('template/ui.modals');
    })->name('adminBSB.ui.modals');

    Route::get('ui/notifications', function () {
        return view('template/ui.notifications');
    })->name('adminBSB.ui.notifications');

    Route::get('ui/pagination', function () {
        return view('template/ui.pagination');
    })->name('adminBSB.ui.pagination');

    Route::get('ui/preloaders', function () {
        return view('template/ui.preloaders');
    })->name('adminBSB.ui.preloaders');

    Route::get('ui/progressbars', function () {
        return view('template/ui.progressbars');
    })->name('adminBSB.ui.progressbars');

    Route::get('ui/range-sliders', function () {
        return view('template/ui.range-sliders');
    })->name('adminBSB.ui.range-sliders');

    Route::get('ui/sortable-nestable', function () {
        return view('template/ui.sortable-nestable');
    })->name('adminBSB.ui.sortable-nestable');

    Route::get('ui/tabs', function () {
        return view('template/ui.tabs');
    })->name('adminBSB.ui.tabs');

    Route::get('ui/thumbnails', function () {
        return view('template/ui.thumbnails');
    })->name('adminBSB.ui.thumbnails');

    Route::get('ui/tooltips-popovers', function () {
        return view('template/ui.tooltips-popovers');
    })->name('adminBSB.ui.tooltips-popovers');

    Route::get('ui/waves', function () {
        return view('template/ui.waves');
    })->name('adminBSB.ui.waves');

    // FORMS
    Route::get('forms/advanced-form-elements', function () {
        return view('template/forms.advanced-form-elements');
    })->name('adminBSB.forms.advanced-form-elements');

    Route::get('forms/basic-form-elements', function () {
        return view('template/forms.basic-form-elements');
    })->name('adminBSB.forms.basic-form-elements');

    Route::get('forms/editors', function () {
        return view('template/forms.editors');
    })->name('adminBSB.forms.editors');

    Route::get('forms/form-examples', function () {
        return view('template/forms.form-examples');
    })->name('adminBSB.forms.forms-examples');

    Route::get('forms/form-validation', function () {
        return view('template/forms.form-validation');
    })->name('adminBSB.forms.form-validation');

    Route::get('forms/form-wizard', function () {
        return view('template/forms.form-wizard');
    })->name('adminBSB.forms.form-wizard');

    // TABLES
    Route::get('tables/normal-table', function () {
        return view('template/tables.normal-table');
    })->name('adminBSB.tables.normal-table');

    Route::get('tables/jquery-datatable', function () {
        return view('template/tables.jquery-datatable');
    })->name('adminBSB.tables.jquery-datatable');

    Route::get('tables/editable-table', function () {
        return view('template/tables.editable-table');
    })->name('adminBSB.tables.editable-table');

    // MEDIA
    Route::get('media/carousel', function () {
        return view('template/media.carousel');
    })->name('adminBSB.media.carousel');

    Route::get('media/image-gallery', function () {
        return view('template/media.image-gallery');
    })->name('adminBSB.media.image-gallery');

    // CHARTS
    Route::get('chart/morris', function () {
        return view('template/chart.morris');
    })->name('adminBSB.chart.morris');

    Route::get('chart/flot', function () {
        return view('template/chart.flot');
    })->name('adminBSB.chart.flot');

    Route::get('chart/chart-js', function () {
        return view('template/chart.chart-js');
    })->name('adminBSB.chart.chart-js');

    Route::get('chart/sparkline', function () {
        return view('template/chart.sparkline');
    })->name('adminBSB.chart.sparkline');

    Route::get('chart/jquery-knob', function () {
        return view('template/chart.jquery-knob');
    })->name('adminBSB.chart.jquery-knob');

    // EXAMPLE PAGE
    Route::get('example-pages/404', function () {
        return view('template/example-pages.404');
    })->name('adminBSB.example-pages.404');

    Route::get('example-pages/500', function () {
        return view('template/example-pages.500');
    })->name('adminBSB.example-pages.500');

    Route::get('example-pages/blank-page', function () {
        return view('template/example-pages.blank-page');
    })->name('adminBSB.example-pages.blank-page');

    Route::get('example-pages/forgot-password', function () {
        return view('template/example-pages.forgot-password');
    })->name('adminBSB.example-pages.forgot-password');

    Route::get('example-pages/profile', function () {
        return view('template/example-pages.profile');
    })->name('adminBSB.example-pages.profile');

    Route::get('example-pages/sign-in', function () {
        return view('template/example-pages.sign-in');
    })->name('adminBSB.example-pages.sign-in');

    Route::get('example-pages/sign-up', function () {
        return view('template/example-pages.sign-up');
    })->name('adminBSB.example-pages.sign-up');

    // MAPS
    Route::get('maps/google', function () {
        return view('template/maps.google');
    })->name('adminBSB.maps.google');

    Route::get('maps/jvectormap', function () {
        return view('template/maps.jvectormap');
    })->name('adminBSB.maps.jvectormap');

    Route::get('maps/yandex', function () {
        return view('template/maps.yandex');
    })->name('adminBSB.maps.yandex');
});
