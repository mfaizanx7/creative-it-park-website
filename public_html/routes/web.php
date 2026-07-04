<?php

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\OurTeamController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\SitemapController;
// use App\Http\Controllers\Frontend\Experties;
use Illuminate\Support\Facades\Route;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

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
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/our_experts',[OurTeamController::class,'index'])->name('team');
Route::get('/experties',[OurTeamController::class,'experties'])->name('experties');
Route::get('/industries',[OurTeamController::class,'industries'])->name('industries');
Route::get('/services',[OurTeamController::class,'services'])->name('services');
Route::get('/about_us',[OurTeamController::class,'abouIindex'])->name('about_us');
Route::get('/portfolio',[OurTeamController::class,'portfolioindex'])->name('portfolio');
Route::get('/products',[OurTeamController::class,'products'])->name('products');
Route::get('/csuite',[OurTeamController::class,'csuite'])->name("csuite");
Route::get('/coworkit',[OurTeamController::class,'coworkit'])->name("coworkit");
Route::get('/services-web',[ServicesController::class,'index'])->name('services-web');
Route::get('/service-app',[ServicesController::class,'appIndex'])->name('service-app');
Route::get('/service-ui-ux',[ServicesController::class,'uiIndex'])->name('service-ui-ux');
Route::get('/service-cloud',[ServicesController::class,'cloudIndex'])->name('service-cloud');
Route::get('/content_writing',[ServicesController::class,'content_index'])->name('content_index');
// Route::get('/service-ui-ux',[ServicesController::class,'uiIndex'])->name('service-ui-ux');
// Route::get('/service-cloud',[ServicesController::class,'cloudIndex'])->name('service-cloud');

Route::get('/industry/{slug}',[ServicesController::class,'industryShow'])->name('industry.show');
Route::get('/news',[ServicesController::class,'newsIndex'])->name('news');

Route::get('/career',[ServicesController::class,'careerIndex'])->name('career.index');
Route::post('/career/store',[ServicesController::class,'careerStore'])->name('career.store');
Route::post('/contact/store',[ServicesController::class,'contactStore'])->name('contact.store');
Route::post('/subscribe/store',[ServicesController::class,'subscribeStore'])->name('subscribe.store');


Route::get('/blog',[ServicesController::class,'blogIndex'])->name('blog.index');
Route::get('/blogs/{id}',[ServicesController::class,'blogDetails'])->name('blog.show');
Route::get('/faqs',[ServicesController::class,'faqsIndex'])->name('faqs');
// Route::get('/blog', 'frontend.components.blog.blog');

// Route::view('/team', 'frontend.components.team.our-team');
// Route::view('/services-web', 'frontend.components.services-web.services-web');
// Route::view('/service-app', 'frontend.components.service-mobile-app.service-app');
// Route::view('/service-ui-ux', 'frontend.components.service-ux.service-ui-ux');
// Route::view('/service-cloud', 'frontend.components.service-cloud.service-cloud');
// Route::view('/server-management', 'frontend.components.service-server.server-management');
// Route::view('/social-media', 'frontend.components.social-media-marketing.social-media');
// Route::view('/service-graphic', 'frontend.components.service graphic designing.service-graphic');
// Route::view('/service-seo', 'frontend.components.service_seo_optimization.service_seo');
// Route::view('/content_writing', 'frontend.components.service_content_writing.content_writing');
// Route::view('/industry-edu', 'frontend.components.industries.industry-edu');
// Route::view('/industry-public', 'frontend.components.industry_public_sector.industry-public');
// Route::view('/industry_art', 'frontend.components.industry_art_recreation.industry_art');
// Route::view('/industry_food', 'frontend.components.industry_food_service.industry_food');
// Route::view('/industry_health', 'frontend.components.industry_health_care.industry_health');
// Route::view('/industry_realestate', 'frontend.components.industry_real_estate.industry_realestate');
// Route::view('/portfolio', 'frontend.components.portfolio.portfolio');
// Route::view('/news', 'frontend.components.news.news');
// Route::view('/our_news', 'frontend.components.news.our_news');
// Route::view('/contact', 'frontend.components.contact_us.contact');

// Route::get('/testroute', function() {
//     $name = "haseeb";
//     Mail::to('33384@iqraisb.edu.pk')->send(new MyTestEmail($name));
// });
// Route::get('/sendWithAttachment', function() {
//     $name = "haseeb";
//     $filePath = 'path/to/your/file.pdf';
//     Mail::to('testreceiver@gmail.com')->send(new MyTestEmail($name, $filePath));
// });

// Route::get('/sendHtmlEmail', function() {
//     $name = "haseeb";  
//     Mail::to('testreceiver@gmail.com')->send(new MyTestEmail($name));
// });

