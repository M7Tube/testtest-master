<?php

use App\Http\Controllers\HomePage\HomePageController;
use App\Models\NewsletterEmail;
use App\Models\Post;
use App\Models\Services;
use Illuminate\Http\Request;
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

Route::redirect('/', '/language/en');
Route::get('/{language}/changLang', function (Request $request) {
    if (app()->getLocale() == 'ar') {
        return redirect(str_replace("/ar/", "/en/", $_SERVER['HTTP_REFERER']));
    } else if (app()->getLocale() == 'en') {
        return redirect(str_replace("/en/", "/ar/", $_SERVER['HTTP_REFERER']));
    }
    return 1;
})->name('changLang');
Route::get('/language/{language}', HomePageController::class)->name('homepage');
//Single Post page
Route::view('{language}/post/{id}', 'pages.Post.post')->name('post');
//Items page
Route::view('language/{language}/items', 'pages.Items.items')->name('showAllItems');
//Services page
Route::view('language/{language}/services', 'pages.Services.services')->name('showAllServices');
//Posts page
Route::view('language/{language}/posts', 'pages.Post.AllPost')->name('showAllPosts');
//Single Item page
Route::view('/{language}/Item/{id}', 'pages.Items.ShowItem')->name('ShowItem');
//Single Service page
Route::view('/{language}/Service/{id}', 'pages.Services.ShowService')->name('ShowService');

Route::group(['prefix' => '{language}', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('pages.Dashboard.dashboard');
    })->name('dashboard');

    /*
        ===================
        ==Dashborad Pages==
        ===================
    */
    //language changer
    Route::get('/dashchangLang', function (Request $request) {
        // return 1;
        if (app()->getLocale() == 'ar') {
            return redirect(str_replace("/ar/", "/en/", $_SERVER['HTTP_REFERER']));
        } else if (app()->getLocale() == 'en') {
            return redirect(str_replace("/en/", "/ar/", $_SERVER['HTTP_REFERER']));
        }
    })->name('dashboard.changLang');
    //settings page in dashboard
    Route::view('/Settings', 'pages.Dashboard.Settings.settings')->name('Settings');
    //Statistics page in dashboard
    Route::view('/Statistics', 'pages.Dashboard.Statistics.Statistics')->name('Statistics');
    //Services page in dashboard
    Route::view('/Services', 'pages.Dashboard.Services.Services',[
        'S' => Services::latest()->paginate(5),
    ])->name('Services');
    //Edit Service page in dashboard
    Route::view('/EditService', 'pages.Dashboard.Services.EditService')->name('EditService');
    //Create Service page in dashboard
    Route::view('/CreateService', 'pages.Dashboard.Services.CreateService')->name('CreateService');
    //Posts page in dashboard
    Route::view('/Posts', 'pages.Dashboard.Posts.Posts',[
        'P' => Post::latest()->paginate(5),
    ])->name('Posts');
    //Create Post page in dashboard
    Route::view('/CreatePost', 'pages.Dashboard.Posts.CreatePost')->name('CreatePost');
    //Edit Post page in dashboard
    Route::view('/EditPost', 'pages.Dashboard.Posts.EditPost')->name('EditPost');
    //NewsletterEmails page in dashboard
    Route::view('/NewsletterEmails', 'pages.Dashboard.NewsletterEmails.NewsletterEmails')->name('NewsletterEmails');
    //Edit NewsletterEmails page in dashboard
    Route::view('/EditNewsletterEmails', 'pages.Dashboard.NewsletterEmails.EditNewsletterEmails')->name('EditNewsletterEmails');
    //Items page in dashboard
    Route::view('/Items', 'pages.Dashboard.Items.Items')->name('Items');
    //Edit Items page in dashboard
    Route::view('/EditItem', 'pages.Dashboard.Items.EditItem')->name('EditItem');
    //Create Item page in dashboard
    Route::view('/CreateItem', 'pages.Dashboard.Items.CreateItem')->name('CreateItem');
    //Skills page in dashboard
    Route::view('/Skills', 'pages.Dashboard.Skills.Skills')->name('Skills');
    //Edit Skills page in dashboard
    Route::view('/EditSkill', 'pages.Dashboard.Skills.EditSkill')->name('EditSkill');
    //Create Skill page in dashboard
    Route::view('/CreateSkill', 'pages.Dashboard.Skills.CreateSkill')->name('CreateSkill');
    //Pdf page in dashboard
    Route::view('/Pdf', 'pages.Dashboard.Pdf.pdf')->name('Pdf');
    //Edit Pdf page in dashboard
    Route::view('/EditPdf', 'pages.Dashboard.Pdf.EditPdf')->name('EditPdf');
    //Create Pdf page in dashboard
    Route::view('/CreatePdf', 'pages.Dashboard.Pdf.CreatePdf')->name('CreatePdf');
    //ClientMessages page in dashboard
    Route::view('/ClientMessages', 'pages.Dashboard.ClientMessages.ClientMessages')->name('ClientMessages');
});

require __DIR__ . '/auth.php';
