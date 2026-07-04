<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\websiteController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TestimonialController;

// Dashboard
Route::get('/', 'HomeController@index')->name('home');

// Bypass Login
Route::get('/bypass-login', function () {
    \Auth::guard('admin')->loginUsingId(1);
    return redirect('/admin');
});
// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::middleware('admin.auth:admin')->group(function () {

  Route::get('send/email/', 'websiteController@sendEmailToAllSubscribers');

  //Users//
  Route::resource('user', UserController::class);

  // Route::get('about/index',[SettingController::class,'aboutindex'])->name('about.index');
  Route::get('home_about/create', [SettingController::class, 'homeAboutCreate'])->name('home_about.create');
  Route::post('home_about/store', [SettingController::class, 'homeAboutStore'])->name('home_about.store');

  Route::get('about/create', [SettingController::class, 'aboutCreate'])->name('about.create');
  Route::post('about/store', [SettingController::class, 'aboutStore'])->name('about.store');

  // Route::get('about/index',[SettingController::class,'aboutindex'])->name('about.index');
  Route::get('footer/create', [SettingController::class, 'footerCreate'])->name('footer.create');
  Route::post('footer/store', [SettingController::class, 'footerStore'])->name('footer.store');

  //Roles and Permissions
  Route::resource('/roles', RoleController::class);
  Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
  Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
  Route::resource('/permissions', PermissionController::class);
  Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
  Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
  //Users//
  Route::resource('users', UserController::class);
  Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
  Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
  Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
  Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

  Route::post('team/inactive/{id}', [TeamController::class, 'inactive'])->name('team.inactive');
  Route::post('team/active/{id}', [TeamController::class, 'active'])->name('team.active');
  Route::resource('team', TeamController::class);

  Route::get('app/index', [websiteController::class, 'appIndex'])->name('app.index');
  Route::get('app/create', [websiteController::class, 'AppCreate'])->name('app.create');
  Route::post('app/store', [websiteController::class, 'appStore'])->name('app.store');
  Route::get('app/edit/{id}', [websiteController::class, 'AppEdit'])->name('app.edit');
  Route::post('app/update/{id}', [websiteController::class, 'appUpdate'])->name('app.update');
  Route::delete('app/destroy/{id}', [websiteController::class, 'appDestroy'])->name('app.destroy');

  Route::get('ui/index', [websiteController::class, 'uiIndex'])->name('ui.index');
  Route::get('ui/create', [websiteController::class, 'uiCreate'])->name('ui.create');
  Route::post('ui/store', [websiteController::class, 'uiStore'])->name('ui.store');
  Route::get('ui/edit/{id}', [websiteController::class, 'uiEdit'])->name('ui.edit');
  Route::post('ui/update/{id}', [websiteController::class, 'uiUpdate'])->name('ui.update');
  Route::delete('ui/destroy/{id}', [websiteController::class, 'uiDestroy'])->name('ui.destroy');

  Route::get('cloud/index', [websiteController::class, 'cloudIndex'])->name('cloud.index');
  Route::get('cloud/create', [websiteController::class, 'cloudCreate'])->name('cloud.create');
  Route::post('cloud/store', [websiteController::class, 'cloudStore'])->name('cloud.store');
  Route::get('cloud/edit/{id}', [websiteController::class, 'cloudEdit'])->name('cloud.edit');
  Route::post('cloud/update/{id}', [websiteController::class, 'cloudUpdate'])->name('cloud.update');
  Route::delete('cloud/destroy/{id}', [websiteController::class, 'cloudDestroy'])->name('cloud.destroy');

  Route::get('portfolio/index', [websiteController::class, 'portfolioIndex'])->name('portfolio.index');
  Route::get('portfolio/create', [websiteController::class, 'portfolioCreate'])->name('portfolio.create');
  Route::post('portfolio/store', [websiteController::class, 'portfolioStore'])->name('portfolio.store');
  Route::get('portfolio/edit/{id}', [websiteController::class, 'portfolioEdit'])->name('portfolio.edit');
  Route::post('portfolio/update/{id}', [websiteController::class, 'portfolioUpdate'])->name('portfolio.update');
  Route::delete('portfolio/destroy/{id}', [websiteController::class, 'portfolioDestroy'])->name('portfolio.destroy');

  Route::get('client/index', [websiteController::class, 'clientIndex'])->name('client.index');
  Route::get('client/create', [websiteController::class, 'clientCreate'])->name('client.create');
  Route::post('client/store', [websiteController::class, 'clientStore'])->name('client.store');
  Route::get('client/edit/{id}', [websiteController::class, 'clientEdit'])->name('client.edit');
  Route::post('client/update/{id}', [websiteController::class, 'clientUpdate'])->name('client.update');
  Route::delete('client/destroy/{id}', [websiteController::class, 'clientDestroy'])->name('client.destroy');

  Route::get('industry/index', [websiteController::class, 'industryIndex'])->name('industry.index');
  Route::get('industry/create', [websiteController::class, 'industryCreate'])->name('industry.create');
  Route::post('industry/store', [websiteController::class, 'industryStore'])->name('industry.store');
  Route::get('industry/edit/{id}', [websiteController::class, 'industryEdit'])->name('industry.edit');
  Route::post('industry/update/{id}', [websiteController::class, 'industryUpdate'])->name('industry.update');
  Route::delete('industry/destroy/{id}', [websiteController::class, 'industryDestroy'])->name('industry.destroy');

  Route::get('news/index', [websiteController::class, 'newsIndex'])->name('news.index');
  Route::get('news/create', [websiteController::class, 'newsCreate'])->name('news.create');
  Route::post('news/store', [websiteController::class, 'newsStore'])->name('news.store');
  Route::get('news/edit/{id}', [websiteController::class, 'newsEdit'])->name('news.edit');
  Route::post('news/update/{id}', [websiteController::class, 'newsUpdate'])->name('news.update');
  Route::delete('news/destroy/{id}', [websiteController::class, 'newsDestroy'])->name('news.destroy');

  Route::get('events/index', [websiteController::class, 'eventsIndex'])->name('events.index');
  Route::get('events/create', [websiteController::class, 'eventsCreate'])->name('events.create');
  Route::post('events/store', [websiteController::class, 'eventsStore'])->name('events.store');
  Route::get('events/edit/{id}', [websiteController::class, 'eventsEdit'])->name('events.edit');
  Route::post('events/update/{id}', [websiteController::class, 'eventsUpdate'])->name('events.update');
  Route::delete('events/destroy/{id}', [websiteController::class, 'eventsDestroy'])->name('events.destroy');

  Route::get('blogs/index', [websiteController::class, 'blogsIndex'])->name('blogs.index');
  Route::get('blogs/create', [websiteController::class, 'blogsCreate'])->name('blogs.create');
  Route::post('blogs/store', [websiteController::class, 'blogsStore'])->name('blogs.store');
  Route::get('blogs/edit/{id}', [websiteController::class, 'blogsEdit'])->name('blogs.edit');
  Route::post('blogs/update/{id}', [websiteController::class, 'blogsUpdate'])->name('blogs.update');
  Route::delete('blogs/destroy/{id}', [websiteController::class, 'blogsDestroy'])->name('blogs.destroy');

  Route::post('upload-image/img', [websiteController::class, 'uploadMediackeditor'])->name('uploadMediackeditor');


  Route::get('faqs/index', [websiteController::class, 'faqsIndex'])->name('faqs.index');
  Route::get('faqs/create', [websiteController::class, 'faqsCreate'])->name('faqs.create');
  Route::post('faqs/store', [websiteController::class, 'faqsStore'])->name('faqs.store');
  Route::get('faqs/edit/{id}', [websiteController::class, 'faqsEdit'])->name('faqs.edit');
  Route::post('faqs/update/{id}', [websiteController::class, 'faqsUpdate'])->name('faqs.update');
  Route::delete('faqs/destroy/{id}', [websiteController::class, 'faqsDestroy'])->name('faqs.destroy');

  Route::get('contact/index', [websiteController::class, 'contactIndex'])->name('contact.index');
  Route::get('subscribe/index', [websiteController::class, 'subscribeIndex'])->name('subscribe.index');
  Route::resource('website', websiteController::class);

});