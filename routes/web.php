<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/our-services', [App\Http\Controllers\HomeController::class, 'services'])->name('our-services');
Route::get('/our-services/{slung}', [App\Http\Controllers\HomeController::class, 'service'])->name('our-service');

Route::group(['prefix'=>'properties'], function(){
    Route::get('/for-rent', [App\Http\Controllers\HomeController::class, 'rent'])->name('for-rent');
    Route::get('/for-sale', [App\Http\Controllers\HomeController::class, 'sale'])->name('for-sale');
    Route::get('/explore/{details}', [App\Http\Controllers\HomeController::class, 'property'])->name('details');
});

Auth::routes();
Route::group(['prefix'=>'admin'], function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [AdminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


    // SiteSettings
    Route::get('/credentials', [AdminController::class, 'systemsCredentials'])->middleware('is_admin');
    Route::get('/SiteSettings', [AdminController::class, 'SiteSettings'])->middleware('is_admin');
    Route::get('/SocialMediaSettings', [AdminController::class, 'SocialMediaSettings'])->middleware('is_admin');
    Route::get('/logo-and-favicon', [AdminController::class, 'logo_and_favicon'])->middleware('is_admin');
    Route::post('/logo-and-favicon-update', [AdminController::class, 'logo_and_favicon_update'])->middleware('is_admin');

    // mailerSettings
    Route::get('/mailerSettings', [AdminController::class, 'mailerSettings'])->middleware('is_admin');

    // Terms and Conditions
    Route::get('/terms', [AdminController::class, 'terms'])->middleware('is_admin');
    Route::get('/addTerms', [AdminController::class, 'addTerms'])->middleware('is_admin');
    Route::get('/editTerm/{id}', [AdminController::class, 'editTerm'])->middleware('is_admin');
    Route::post('/add_term', [AdminController::class, 'add_term'])->middleware('is_admin');
    Route::post('/edit_term/{id}', [AdminController::class, 'edit_term'])->middleware('is_admin');
    Route::get('/delete_term/{id}', [AdminController::class, 'delete_term'])->middleware('is_admin');

    // Privacy Policy
    Route::get('/privacy', [AdminController::class, 'privacy'])->middleware('is_admin');
    Route::get('/addPrivacy', [AdminController::class, 'addPrivacy'])->middleware('is_admin');
    Route::get('/editPrivacy/{id}', [AdminController::class, 'editPrivacy'])->middleware('is_admin');
    Route::post('/add_privacy', [AdminController::class, 'add_privacy'])->middleware('is_admin');
    Route::post('/edit_privacy/{id}', [AdminController::class, 'edit_privacy'])->middleware('is_admin');
    Route::get('/delete_privacy/{id}', [AdminController::class, 'delete_privacy'])->middleware('is_admin');

    // Frequently Asked Questions
    Route::get('/faq', [AdminController::class, 'faq'])->middleware('is_admin');
    Route::get('/addFaq', [AdminController::class, 'addFaq'])->middleware('is_admin');
    Route::get('/editFaq/{id}', [AdminController::class, 'editFaq'])->middleware('is_admin');
    Route::post('/add_Faq', [AdminController::class, 'add_Faq'])->middleware('is_admin');
    Route::post('/edit_Faq/{id}', [AdminController::class, 'edit_Faq'])->middleware('is_admin');
    Route::get('/delete_Faq/{id}', [AdminController::class, 'delete_Faq'])->middleware('is_admin');

    // Risks Declaration
    Route::get('/editRisk', [AdminController::class, 'editRisk'])->middleware('is_admin');
    Route::post('/edit_Risk', [AdminController::class, 'edit_Risk'])->middleware('is_admin');

    // How It Works
    Route::get('/how', [AdminController::class, 'how'])->middleware('is_admin');
    Route::get('/addHow', [AdminController::class, 'addHow'])->middleware('is_admin');
    Route::get('/editHow/{id}', [AdminController::class, 'editHow'])->middleware('is_admin');
    Route::post('/add_How', [AdminController::class, 'add_How'])->middleware('is_admin');
    Route::post('/edit_How/{id}', [AdminController::class, 'edit_How'])->middleware('is_admin');
    Route::get('/delete_How/{id}', [AdminController::class, 'delete_How'])->middleware('is_admin');

    // Courses
    Route::get('/courses', [AdminController::class, 'courses'])->middleware('is_admin');
    Route::get('/addCourse', [AdminController::class, 'addCourse'])->middleware('is_admin');
    Route::get('/editCourse/{id}', [AdminController::class, 'editCourse'])->middleware('is_admin');
    Route::post('/add_Course', [AdminController::class, 'add_Course'])->middleware('is_admin');
    Route::post('/edit_Course/{id}', [AdminController::class, 'edit_Course'])->middleware('is_admin');
    Route::get('/delete_Course/{id}', [AdminController::class, 'delete_Course'])->middleware('is_admin');

    // Topics
    Route::get('/topics', [AdminController::class, 'topics'])->middleware('is_admin');
    Route::get('/addTopic', [AdminController::class, 'addTopic'])->middleware('is_admin');
    Route::get('/editTopic/{id}', [AdminController::class, 'editTopic'])->middleware('is_admin');
    Route::post('/add_Topic', [AdminController::class, 'add_Topic'])->middleware('is_admin');
    Route::post('/edit_Topic/{id}', [AdminController::class, 'edit_Topic'])->middleware('is_admin');
    Route::get('/delete_Topic/{id}', [AdminController::class, 'delete_Topic'])->middleware('is_admin');

    // Copyright Statement
    Route::get('/editCopyright', [AdminController::class, 'copyright'])->middleware('is_admin');
    Route::post('/edit_Copyright', [AdminController::class, 'edit_copyright'])->middleware('is_admin');

    // About Us
    Route::get('/editAbout', [AdminController::class, 'about'])->middleware('is_admin');
    Route::post('/edit_About', [AdminController::class, 'edit_about'])->middleware('is_admin');

    // Sliders
    Route::get('/sliders', [AdminController::class, 'slider'])->middleware('is_admin');
    Route::get('/addSlider', [AdminController::class, 'addSlider'])->middleware('is_admin');
    Route::post('/add_Slider', [AdminController::class, 'add_Slider'])->middleware('is_admin');
    Route::get('/editSlider/{id}', [AdminController::class, 'editSlider'])->middleware('is_admin');
    Route::post('/edit_Slider/{id}', [AdminController::class, 'edit_Slider'])->middleware('is_admin');
    Route::get('/deleteSlider/{id}', [AdminController::class, 'deleteSlider'])->middleware('is_admin');

    // Banners
    Route::get('/banners', [AdminController::class, 'banners'])->middleware('is_admin');
    Route::get('/editBanner/{id}', [AdminController::class, 'editBanner'])->middleware('is_admin');
    Route::post('/edit_Banner/{id}', [AdminController::class, 'edit_Banner'])->middleware('is_admin');

    // Messages
    Route::get('/allMessages', [AdminController::class, 'allMessages'])->middleware('is_admin');
    Route::get('/unread', [AdminController::class, 'unread'])->middleware('is_admin');
    Route::post('/reply', [AdminController::class, 'reply'])->middleware('is_admin');
    Route::get('/read/{id}', [AdminController::class, 'read'])->middleware('is_admin');
    Route::get('/deleteMessage/{id}', [AdminController::class, 'deleteMessage'])->middleware('is_admin');

    // Categories
    Route::get('/categories', [AdminController::class, 'categories'])->middleware('is_admin');
    Route::get('/addCategory', [AdminController::class, 'addCategory'])->middleware('is_admin');
    Route::post('/add_Category', [AdminController::class, 'add_Category'])->middleware('is_admin');
    Route::get('/editCategories/{id}', [AdminController::class, 'editCategories'])->middleware('is_admin');
    Route::post('/edit_Category/{id}', [AdminController::class, 'edit_Category'])->middleware('is_admin');
    Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->middleware('is_admin');

    // Products
    Route::get('/products', [AdminController::class, 'products'])->middleware('is_admin');
    Route::get('/addProduct', [AdminController::class, 'addProduct'])->middleware('is_admin');
    Route::post('/add_Product', [AdminController::class, 'add_Product'])->middleware('is_admin');
    Route::get('/editProducts/{id}', [AdminController::class, 'editProducts'])->middleware('is_admin');
    Route::post('/edit_Product/{id}', [AdminController::class, 'edit_Product'])->middleware('is_admin');
    Route::get('/deleteProduct/{id}', [AdminController::class, 'deleteProduct'])->middleware('is_admin');

    // services
    Route::get('/services', [AdminController::class, 'services'])->middleware('is_admin');
    Route::get('/addservice', [AdminController::class, 'addservice'])->middleware('is_admin');
    Route::post('/add_service', [AdminController::class, 'add_service'])->middleware('is_admin');
    Route::get('/editService/{id}', [AdminController::class, 'editservices'])->middleware('is_admin');
    Route::post('/edit_Service/{id}', [AdminController::class, 'edit_service'])->middleware('is_admin');
    Route::get('/deleteservice/{id}', [AdminController::class, 'deleteservice'])->middleware('is_admin');



    Route::post('/add_Variation', [AdminController::class, 'add_Variation'])->middleware('is_admin');
    Route::post('/edit_Variation/{id}', [AdminController::class, 'edit_Variation'])->middleware('is_admin');
    Route::get('/addVariation/color', [AdminController::class, 'variations_color'])->middleware('is_admin');
    Route::get('/addVariation/size', [AdminController::class, 'variations_size'])->middleware('is_admin');
    Route::get('/variations/color', [AdminController::class, 'var_color'])->middleware('is_admin');
    Route::get('/variations/size', [AdminController::class, 'var_size'])->middleware('is_admin');
    Route::get('/editVariation/{id}', [AdminController::class, 'editVariation'])->middleware('is_admin');

    // Categories
    Route::get('/categories', [AdminController::class, 'categories'])->middleware('is_admin');
    Route::get('/addCategory', [AdminController::class, 'addCategory'])->middleware('is_admin');
    Route::post('/add_Category', [AdminController::class, 'add_Category'])->middleware('is_admin');
    Route::get('/editCategories/{id}', [AdminController::class, 'editCategories'])->middleware('is_admin');
    Route::post('/edit_Category/{id}', [AdminController::class, 'edit_Category'])->middleware('is_admin');
    Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory'])->middleware('is_admin');

    // Testimonials
    Route::get('/testimonials', [AdminController::class, 'testimonials'])->middleware('is_admin');
    Route::get('/addTestimonial', [AdminController::class, 'addTestimonial'])->middleware('is_admin');
    Route::post('/add_Testimonial', [AdminController::class, 'add_Testimonial'])->middleware('is_admin');
    Route::get('/editTestimonial/{id}', [AdminController::class, 'editTestimonial'])->middleware('is_admin');
    Route::post('/edit_Testimonial/{id}', [AdminController::class, 'edit_Testimonial'])->middleware('is_admin');

    // Signal
    Route::get('/signals', [AdminController::class, 'signals'])->middleware('is_admin');
    Route::get('/addSignal', [AdminController::class, 'addSignal'])->middleware('is_admin');
    Route::post('/add_Signal', [AdminController::class, 'add_Signal'])->middleware('is_admin');
    Route::get('/editSignal/{id}', [AdminController::class, 'editSignal'])->middleware('is_admin');
    Route::post('/edit_Signal/{id}', [AdminController::class, 'edit_Signal'])->middleware('is_admin');

    // Blog
    Route::get('/blog', [AdminController::class, 'blog'])->middleware('is_admin');
    Route::get('/addBlog', [AdminController::class, 'addBlog'])->middleware('is_admin');
    Route::post('/add_Blog', [AdminController::class, 'add_Blog'])->middleware('is_admin');
    Route::get('/editBlog/{id}', [AdminController::class, 'editBlog'])->middleware('is_admin');
    Route::post('/edit_Blog/{id}', [AdminController::class, 'edit_Blog'])->middleware('is_admin');
    Route::get('/delete_Blog/{id}', [AdminController::class, 'delete_Blog'])->middleware('is_admin');


    // Payments
    Route::get('/b2b', [AdminController::class, 'b2b'])->middleware('is_admin');
    Route::get('/b2c', [AdminController::class, 'b2c'])->middleware('is_admin');
    Route::get('/lnmo_api_response', [AdminController::class, 'lnmo_api_response'])->middleware('is_admin');
    Route::get('/mobile_payments', [AdminController::class, 'mobile_payments'])->middleware('is_admin');
    Route::get('/reverse_transaction', [AdminController::class, 'reverse_transaction'])->middleware('is_admin');
    Route::get('/transaction_status', [AdminController::class, 'transaction_status'])->middleware('is_admin');
    Route::get('/accountbalance', [AdminController::class, 'accountbalance'])->middleware('is_admin');
    Route::get('/approve-transaction/{id}', [AdminController::class, 'approve_transaction'])->middleware('is_admin');
    Route::get('/approve-transaction-stk/{id}', [AdminController::class, 'approve_transaction_stk'])->middleware('is_admin');

    // Enroll Users
    Route::get('/enroll-users', [AdminController::class, 'enroll_users'])->middleware('is_admin');
    Route::get('/enroll-users-post/{id}', [AdminController::class, 'enroll_users_post'])->middleware('is_admin');
    Route::post('/enroll-user-now', [AdminController::class, 'enroll_user_now'])->middleware('is_admin');

    //Manage Users
    Route::get('/users', [AdminController::class, 'users'])->middleware('is_admin');
    Route::get('/admins', [AdminController::class, 'admins'])->middleware('is_admin');
    Route::get('/addUser', [AdminController::class, 'addUser'])->middleware('is_admin');
    Route::get('/editUser/{id}', [AdminController::class, 'editUser'])->middleware('is_admin');
    Route::post('/add_User', [AdminController::class, 'add_User'])->middleware('is_admin');
    Route::post('/edit_User/{id}', [AdminController::class, 'edit_User'])->middleware('is_admin');
    Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->middleware('is_admin');
    Route::get('/switchRole/{id}', [AdminController::class, 'switchRole'])->middleware('is_admin');
    Route::get('/switchStatus/{id}', [AdminController::class, 'switchStatus'])->middleware('is_admin');

    Route::get('/updateSlung', [AdminController::class, 'updateSlung'])->middleware('is_admin');

    Route::get('/addProductToFacebookPixel', [AdminController::class, 'addProductToFacebookPixel'])->middleware('is_admin');
    Route::get('/emptyProductToFacebookPixel', [AdminController::class, 'emptyProductToFacebookPixel'])->middleware('is_admin');






    Route::get('/activitylogs', [AdminController::class, 'activitylogs'])->middleware('is_admin');


    // AJAX REQUESTS
    Route::post('/addCategoryAjaxRequest', [AdminController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
    Route::post('/deleteBlogAjax', [AdminController::class, 'deleteBlogAjax'])->middleware('is_admin');
    Route::put('/updateSiteSettingsAjax', [AdminController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
    Route::put('/updateMailerAjax', [AdminController::class, 'updateMailerAjax'])->middleware('is_admin');
    Route::put('/updateSiteSocialMediaAjax', [AdminController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
    Route::put('/updateSiteCredentials', [AdminController::class, 'updateSiteCredentials'])->middleware('is_admin');
    Route::post('/deleteCategoryAjax', [AdminController::class, 'deleteCategoryAjax'])->middleware('is_admin');
    Route::post('/deleteTestimonialAjax', [AdminController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
    Route::post('/deleteSliderAjax', [AdminController::class, 'deleteSliderAjax'])->middleware('is_admin');
    Route::post('/deleteC2BAjax', [AdminController::class, 'deleteC2BAjax'])->middleware('is_admin');
    Route::post('/deleteB2BAjax', [AdminController::class, 'deleteB2BAjax'])->middleware('is_admin');
    Route::post('/deleteB2CAjax', [AdminController::class, 'deleteB2CAjax'])->middleware('is_admin');
    Route::post('/deleteBalAjax', [AdminController::class, 'deleteBalAjax'])->middleware('is_admin');
    Route::post('/deleteSTKAjax', [AdminController::class, 'deleteSTKAjax'])->middleware('is_admin');
    Route::post('/deleteReverseAjax', [AdminController::class, 'deleteReverseAjax'])->middleware('is_admin');
    Route::post('/deleteTransactionAjax', [AdminController::class, 'deleteTransactionAjax'])->middleware('is_admin');
    Route::post('/deleteUserAjax', [AdminController::class, 'deleteUserAjax'])->middleware('is_admin');
    Route::post('/deleteFaqAjax', [AdminController::class, 'deleteFaqAjax'])->middleware('is_admin');
    Route::post('/deletePrivacyAjax', [AdminController::class, 'deletePrivacyAjax'])->middleware('is_admin');
    Route::post('/deleteTermsAjax', [AdminController::class, 'deleteTermsAjax'])->middleware('is_admin');
    Route::post('/deleteHowAjax', [AdminController::class, 'deleteHowAjax'])->middleware('is_admin');
    Route::post('/deleteCoursesAjax', [AdminController::class, 'deleteCoursesAjax'])->middleware('is_admin');
    Route::post('/deleteTopicsAjax', [AdminController::class, 'deleteTopicsAjax'])->middleware('is_admin');
    Route::post('/deleteSignalsAjax', [AdminController::class, 'deleteSignalsAjax'])->middleware('is_admin');
    Route::post('/deleteProductAjax', [AdminController::class, 'deleteProductAjax'])->middleware('is_admin');

});
