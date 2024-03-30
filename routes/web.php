<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutsettingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FreelanchingController;
use App\Http\Controllers\ClientmessageController;
use App\Http\Controllers\FooterController;


// Route::get('contreact', function () {
//     return view('welcome');
// });

Auth::routes();
//HomeController Start
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile/{user_id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('profileupdate/{user_id}', [App\Http\Controllers\HomeController::class, 'profileupdate'])->name('profileupdate');
//HomeController End
//=================BannerController Start================================================================================================================>
Route::get('banner', [BannerController::class, 'banner'])->name('banner');
Route::post('banner/post', [BannerController::class, 'bannerpost'])->name('bannerpost');
Route::get('banner/edit/{banner_id}', [BannerController::class, 'banneredit'])->name('banneredit');
Route::post('bannerupdate/update/{banner_id}', [BannerController::class, 'bannerupdate'])->name('bannerupdate');
Route::get('banner/delete/{banner_id}', [BannerController::class, 'bannerdelete'])->name('bannerdelete');
Route::get('banner/restore/{banner_id}', [BannerController::class, 'bannerrestore'])->name('bannerrestore');
Route::get('banner/forcedelete/{banner_id}', [BannerController::class, 'bannerforcedelete'])->name('bannerforcedelete');
//=================BannerController End================================================================================================================>

//=================FrontendController Start================================================================================================================>
Route::get('/', [FrontendController::class,'codeblaze'])->name('codeblaze');
Route::get('about', [FrontendController::class,'about'])->name('about');
Route::get('service/details/{service_id}', [FrontendController::class,'servicedetails'])->name('servicedetails');
Route::get('our/blog/details/{blog_id}', [FrontendController::class,'blogdetails'])->name('blogdetails');
Route::get('our/project/force/details/{project_id}', [FrontendController::class,'projectdetails'])->name('projectdetails');
//=================FrontendController End================================================================================================================>

//=================AboutsettingController Start================================================================================================================>
Route::get('about/setting', [AboutsettingController::class,'aboutsetting'])->name('aboutsetting');
Route::post('about/post/setting', [AboutsettingController::class,'aboutsettingpost'])->name('aboutsettingpost');
Route::post('about/photo/setting', [AboutsettingController::class,'aboutsettingphoto'])->name('aboutsettingphoto');
Route::get('aboutphoto/edit/{aboutphoto_id}', [AboutsettingController::class,'aboutphotoedit'])->name('aboutphotoedit');
Route::post('aboutphoto/update/{aboutphoto_id}', [AboutsettingController::class,'aboutphotoupdate'])->name('aboutphotoupdate');
Route::get('aboutphoto/delete/{aboutphoto_id}', [AboutsettingController::class,'aboutphotodelete'])->name('aboutphotodelete');
//=================AboutsettingController End================================================================================================================>

//=================SettingController Start================================================================================================================>
Route::get('setting', [SettingController::class,'setting'])->name('setting');
Route::post('setting/post', [SettingController::class,'settingpost'])->name('settingpost');
//=================SettingController End================================================================================================================>
//=================SettingController Start================================================================================================================>
Route::get('resume', [ResumeController::class,'resume'])->name('resume');
Route::post('resume/post', [ResumeController::class,'resumepost'])->name('resumepost');
Route::get('resume/edit/{resume_id}', [ResumeController::class,'resumedite'])->name('resumedite');
Route::post('resume/update/{resume_id}', [ResumeController::class,'resumeupdate'])->name('resumeupdate');
Route::get('resume/delete/{resume_id}', [ResumeController::class,'resumedelete'])->name('resumedelete');
Route::get('resume/restore/{resume_id}', [ResumeController::class,'resumerestore'])->name('resumerestore');
//=================SettingController End================================================================================================================>

//=================ServiceController Start================================================================================================================>
Route::get('service', [ServiceController::class,'service'])->name('service');
Route::post('service/post', [ServiceController::class,'servicepost'])->name('servicepost');
Route::get('service/edit/{service_id}', [ServiceController::class,'servicedit'])->name('servicedit');
Route::post('service/update/{service_id}', [ServiceController::class,'serviceupdate'])->name('serviceupdate');
Route::get('service/delete/{service_id}', [ServiceController::class,'servicedelete'])->name('servicedelete');
Route::get('service/restore/{service_id}', [ServiceController::class,'servicestore'])->name('servicestore');
Route::get('service/forcedelete/{service_id}', [ServiceController::class,'serviceforcedelete'])->name('serviceforcedelete');
//=================ServiceController End================================================================================================================>

//=================SkillController Start================================================================================================================>
Route::get('skill', [SkillController::class,'skill'])->name('skill');
Route::post('skill/post', [SkillController::class,'skillepost'])->name('skillepost');
Route::get('skill/edit/{skill_id}', [SkillController::class,'skilledite'])->name('skilledite');
Route::post('skill/update/{skill_id}', [SkillController::class,'skillupdate'])->name('skillupdate');
Route::get('skill/delete/{skill_id}', [SkillController::class,'skilldelete'])->name('skilldelete');
Route::get('skill/restore/{skill_id}', [SkillController::class,'skillrestore'])->name('skillrestore');
Route::get('skill/forcedelete/{skill_id}', [SkillController::class,'skillforcedelete'])->name('skillforcedelete');
//=================SkillController End================================================================================================================>

//=================ProjectController End================================================================================================================>
Route::get('our/project', [ProjectController::class,'ourproject'])->name('ourproject');
Route::post('our/project/post', [ProjectController::class,'projectpost'])->name('projectpost');
Route::get('our/project/edit/{project_id}', [ProjectController::class,'projectedite'])->name('projectedite');
Route::post('our/project/update/{project_id}', [ProjectController::class,'projectupdate'])->name('projectupdate');
Route::get('our/project/delete/{project_id}', [ProjectController::class,'projectdelete'])->name('projectdelete');
Route::get('our/project/restore/{project_id}', [ProjectController::class,'projectrestore'])->name('projectrestore');
Route::get('our/project/force/delete/{project_id}', [ProjectController::class,'projectforcedelete'])->name('projectforcedelete');

//=================ProjectController End================================================================================================================>

//=================BlogController Start================================================================================================================>
Route::get('our/blog', [BlogController::class,'blog'])->name('blog');
Route::post('our/blog/post', [BlogController::class,'blogpost'])->name('blogpost');
Route::get('our/blog/edit/{blog_id}', [BlogController::class,'blogedit'])->name('blogedit');
Route::post('our/blog/update/{blog_id}', [BlogController::class,'blogupdate'])->name('blogupdate');
Route::get('our/blog/delete/{blog_id}', [BlogController::class,'blogdelete'])->name('blogdelete');
Route::get('our/blog/retore/{blog_id}', [BlogController::class,'blogrestore'])->name('blogrestore');
Route::get('our/blog/force/delete/{blog_id}', [BlogController::class,'blogforcedelete'])->name('blogforcedelete');

//=================BlogController End================================================================================================================>

//=================CounterController Start================================================================================================================>
Route::get('counter', [CounterController::class,'counter'])->name('counter');
Route::post('counter/post', [CounterController::class,'counterpost'])->name('counterpost');
Route::get('counter/edit/{counter_id}', [CounterController::class,'countedit'])->name('countedit');
Route::post('counter/update/{counter_id}', [CounterController::class,'counterupdate'])->name('counterupdate');
Route::get('counter/delete/{counter_id}', [CounterController::class,'counterdelete'])->name('counterdelete');
//=================CounterController End================================================================================================================>

//=================FreelanchingController Start================================================================================================================>
Route::get('freelanching', [FreelanchingController::class,'freelanching'])->name('freelanching');
Route::post('freelanching/post', [FreelanchingController::class,'freelancingpost'])->name('freelancingpost');
Route::get('freelanching/delete/{free_id}', [FreelanchingController::class,'freelancingdelete'])->name('freelancingdelete');
Route::get('freelanching/edit/{free_id}', [FreelanchingController::class,'freelancingedit'])->name('freelancingedit');
Route::post('freelanching/update/{free_id}', [FreelanchingController::class,'freelancingupdate'])->name('freelancingupdate');
//=================FreelanchingController End================================================================================================================>

//=================ContactController Start================================================================================================================>
Route::get('contact', [ContactController::class,'contact'])->name('contact');
Route::post('contact/post', [ContactController::class,'contactgpost'])->name('contactgpost');
//=================ContactController End================================================================================================================>

//=================ClientmessageController Start================================================================================================================>
Route::get('client/message', [ClientmessageController::class,'clientmessage'])->name('clientmessage');
Route::post('client/message/post', [ClientmessageController::class,'clientmessagepost'])->name('clientmessagepost');
Route::get('client/message/delete/{client_id}', [ClientmessageController::class,'clientmessagedelete'])->name('clientmessagedelete');
Route::get('client/message/restore/{client_id}', [ClientmessageController::class,'clientmessagerestore'])->name('clientmessagerestore');
Route::get('client/message/all/delete', [ClientmessageController::class,'clientdeleteall'])->name('clientdeleteall');
Route::get('client/message/force/all/delete', [ClientmessageController::class,'clientallforcedelete'])->name('clientallforcedelete');
//=================ClientmessageController End================================================================================================================>

//=================FooterController Start================================================================================================================>
Route::get('footer', [FooterController::class,'footer'])->name('footer');
Route::post('footer/post', [FooterController::class,'footerPost'])->name('footer.post');
//=================FooterController End================================================================================================================>

//=================SettingController End================================================================================================================>
//=================SettingController End================================================================================================================>


