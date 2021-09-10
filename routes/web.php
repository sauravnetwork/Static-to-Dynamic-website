<?php
use App\Http\Controllers\EduController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EduController::class,'index']);
Route::get('/about-1', [EduController::class, 'about_1']);
Route::get('/about-2', [EduController::class,'about_2']);
Route::get('/blog-grid-2-sidebar-left', [EduController::class,'blog_grid_2_sidebar_left']);
Route::get('/blog-grid-2-sidebar', [EduController::class,'blog_grid_2_sidebar']);
Route::get('/blog-grid-2', [EduController::class,'blog_grid_2']);
Route::get('/blog-grid-3-sidebar-left', [EduController::class,'blog_grid_3_sidebar_left']);
Route::get('/blog-grid-3-sidebar', [EduController::class,'blog_grid_3_sidebar']);
Route::get('/blog-grid-3', [EduController::class,'blog_grid_3']);
Route::get('/blog-grid-4', [EduController::class,'blog_grid_4']);

Route::get('/blog-half-img-sidebar', [EduController::class,'blog_half_img_sidebar']);
Route::get('/blog-half-img-left-sidebar', [EduController::class,'blog_half_img_left_sidebar']);
Route::get('/blog-half-img', [EduController::class,'blog_half_img']);
Route::get('/blog-large-img-left-sidebar', [EduController::class,'blog_large_img_left_sidebar']);
Route::get('/blog-large-img-sidebar', [EduController::class,'blog_large_img_sidebar']);
Route::get('/blog-large-img', [EduController::class,'blog_large_img']);
Route::get('/blog-single-left-sidebar', [EduController::class,'blog_single_left_sidebar']);
Route::get('/blog-single-sidebar', [EduController::class,'blog_single_sidebar']);
Route::get('/blog-single', [EduController::class,'blog_single']);
Route::get('/coming-soon-1', [EduController::class,'coming_soon_1']);

Route::get('/coming-soon-2', [EduController::class,'coming_soon_2']);
Route::get('/contact-1', [EduController::class,'contact_1']);
Route::get('/contact-2', [EduController::class,'contact_2']);
Route::get('/contact-3', [EduController::class,'contact_3']);
Route::get('/contact-4', [EduController::class,'contact_4']);
Route::get('/courses-details', [EduController::class,'courses_details']);
Route::get('/courses', [EduController::class,'courses']);
Route::get('/error-404', [EduController::class,'error_404']);
Route::get('/error-405', [EduController::class,'error_405']);

Route::get('/event-details', [EduController::class,'event_details']);
Route::get('/event', [EduController::class,'event']);
Route::get('/faq-1', [EduController::class,'faq_1']);
Route::get('/footer-1', [EduController::class,'footer_1']);
Route::get('/footer-2', [EduController::class,'footer_2']);
Route::get('/footer-3', [EduController::class,'footer_3']);
Route::get('/footer-4', [EduController::class,'footer_4']);
Route::get('/footer-5', [EduController::class,'footer_5']);
Route::get('/footer-6', [EduController::class,'footer_6']);

Route::get('/footer-7', [EduController::class,'footer_7']);
Route::get('/footer-8', [EduController::class,'footer_8']);
Route::get('/footer-9', [EduController::class,'footer_9']);
Route::get('/footer-10', [EduController::class,'footer_10']);
Route::get('/footer-11', [EduController::class,'footer_11']);
Route::get('/footer-12', [EduController::class,'footer_12']);
Route::get('/gallery-grid-2', [EduController::class,'gallery_grid_2']);
Route::get('/gallery-grid-3', [EduController::class,'gallery_grid_3']);
Route::get('/gallery-grid-4', [EduController::class,'gallery_grid_4']);

Route::get('/header-style-1', [EduController::class,'header_style_1']);
Route::get('/header-style-2', [EduController::class,'header_style_2']);
Route::get('/header-style-3', [EduController::class,'header_style_3']);
Route::get('/header-style-4', [EduController::class,'header_style_4']);
Route::get('/header-style-5', [EduController::class,'header_style_5']);
Route::get('/header-style-6', [EduController::class,'header_style_6']);
Route::get('/header-style-dark-1', [EduController::class,'header_style_dark_1']);
Route::get('/header-style-dark-2', [EduController::class,'header_style_dark_2']);
Route::get('/header-style-dark-3', [EduController::class,'header_style_dark_3']);

Route::get('/header-style-dark-4', [EduController::class,'header_style_dark_4']);
Route::get('/header-style-dark-5', [EduController::class,'header_style_dark_5']);
Route::get('/header-style-dark-6', [EduController::class,'header_style_dark_6']);
Route::get('/help-desk', [EduController::class,'help_desk']);
Route::get('/index', [EduController::class,'index']);
Route::get('/index-2', [EduController::class,'index_2']);
Route::get('/index-3', [EduController::class,'index_3']);
Route::get('/index-4', [EduController::class,'index_4']);
Route::get('/index-5', [EduController::class,'index_5']);

Route::get('/index-6', [EduController::class,'index_6']);
Route::get('/index-7', [EduController::class,'index_7']);
Route::get('/index-8', [EduController::class,'index_8']);
Route::get('/privacy-policy', [EduController::class,'privacy_policy']);
Route::get('/services-1', [EduController::class,'services_1']);
Route::get('/services-2', [EduController::class,'services_2']);
Route::get('/shop-cart', [EduController::class,'shop_cart']);
Route::get('/shop-checkout', [EduController::class,'shop_checkout']);
Route::get('/shop-login', [EduController::class,'shop_login']);

Route::get('/shop-product-details', [EduController::class,'shop_product_details']);
Route::get('/shop-register', [EduController::class,'shop_register']);
Route::get('/shop-sidebar', [EduController::class,'shop_sidebar']);
Route::get('/shop-wishlist', [EduController::class,'shop_wishlist']);
Route::get('/shop', [EduController::class,'shop']);
Route::get('/shortcode-accordians', [EduController::class,'shortcode_accordians']);
Route::get('/shortcode-alert-box', [EduController::class,'shortcode_alert_box']);
Route::get('/shortcode-all-widgets', [EduController::class,'shortcode_all_widgets']);
Route::get('/shortcode-animation-effects', [EduController::class,'shortcode_animation_effects']);

Route::get('/shortcode-buttons', [EduController::class,'shortcode_accordians']);
Route::get('/shortcode-carousel-sliders', [EduController::class,'shortcode_carousel_sliders']);
Route::get('/shortcode-counters', [EduController::class,'shortcode_counters']);
Route::get('/shortcode-dividers', [EduController::class,'shortcode_dividers']);
Route::get('/shortcode-filters', [EduController::class,'shortcode_filters']);
Route::get('/shortcode-icon-box-styles', [EduController::class,'shortcode_icon_box_styles']);
Route::get('/shortcode-icon-box', [EduController::class,'shortcode_icon_box']);
Route::get('/shortcode-image-box-content', [EduController::class,'shortcode_image_box_content']);
Route::get('/shortcode-images-effects', [EduController::class,'shortcode_images_effects']);

Route::get('/shortcode-list-group', [EduController::class,'shortcode_list_group']);
Route::get('/shortcode-pagination', [EduController::class,'shortcode_pagination']);
Route::get('/shortcode-pricing-table', [EduController::class,'shortcode_images_effects']);
Route::get('/shortcode-shop-widgets', [EduController::class,'shortcode_shop_widgets']);
Route::get('/shortcode-tabs', [EduController::class,'shortcode_images_effects']);
Route::get('/shortcode-team', [EduController::class,'shortcode_team']);
Route::get('/shortcode-testimonials', [EduController::class,'shortcode_testimonials']);
Route::get('/shortcode-title-separators', [EduController::class,'shortcode_title_separators']);
Route::get('/shortcode-toggles', [EduController::class,'shortcode_toggles']);

Route::get('/teacher', [EduController::class,'shortcode_images_effects']);
Route::get('/teachers-profile', [EduController::class,'teachers_profile']);





