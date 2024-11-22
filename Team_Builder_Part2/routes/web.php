<?php

use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\admin\MainController as AdminMainController;
use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;

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



Route::get('/capnhatweb', function () {
    return view('capnhatweb');
})->name('capnhatweb');

// Route::get('/register', [AuthController::class, 'register'])->name('DangKy');
// Route::post('/register', [AuthController::class, 'registerPost'])->name('DangKySubmit');

Route::group(['prefix' => 'account'], function() {
   
    //Guest middleware
    Route::group(['middleware' => 'guest'], function() {
        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class,'register'])->name('account.DangKy');
        Route::post('process-register', [LoginController::class,'processRegister'])->name('account.processRegister');
        Route::post('authenticate', [LoginController::class,'authenticate'])->name('account.authenticate');
    });

    //Authenticated middleware
    Route::group(['middleware' => 'auth'], function() {
        Route::post('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('main', [MainController::class,'index'])->name('account.main');
    });
});

Route::get('main', [MainController::class,'index'])->name('main');

Route::group(['prefix' => 'admin'], function() {
   
    //Guest middleware
    Route::group(['middleware' => 'admin.guest'], function() {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class,'authenticate'])->name('admin.authenticate');
    });

    //Authenticated middleware
    Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('main', [AdminMainController::class, 'index'])->name('admin.main');
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });

});

// Tổng hợp anime
Route::get('/the-new-gate', function () {
    return view('ANIME.THENEWGATE', 
    ['title' => 'Xem phim The New Gate']);
})->name('THE_NEW_GATE');

Route::get('/kage-no-jitsuryokusha_ni_naritakute', function () {
    return view('ANIME.KAGENOJITSURYOKUSHANINARITAKUTE',
    ['title' => 'Xem phim Kage no jitsuryokusha ni naritakute']);
})->name('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE');

Route::get('/kage-no-jitsuryokusha_ni_naritakute_2nd_season', function () {
    return view('ANIME.KAGENOJITSURYOKUSHANINARITAKUTE2NDSEASON',
    ['title' => 'Xem phim Kage no jitsuryokusha ni naritakute 2nd Season']);
})->name('KAGE_NO_JITSURYOKUSHA_NI_NARITAKUTE_2ND_SEASON');

Route::get('/eighty-six', function () {
    return view('ANIME.EIGHTYSIX',
    ['title' => 'Xem phim 86(eighty-six)']);
})->name('eighty-six');
Route::get('/kimetsu-no-yaiba', function () {
    return view('ANIME.KNY',
    ['title' => 'Xem phim Kimetsu no yaiba']);
})->name('KNY');

Route::get('/tsuki-ga-michibiku-isekai-douchuu', function () {
    return view('ANIME.TSUKIGAMICHIBIKUISEKAIDOUCHUU',
    ['title' => 'Xem phim Tsuki ga michibiku isekai douchuu']);
})->name('TSUKI-GA-MICHIBIKU-ISEKAI-DOUCHUU');

Route::get('/genjitsu-shugi-yuusha-no-oukoku-saikenki', function () {
    return view('ANIME.GENJITSUSHUGIYUUSHANOOUKOKUSAIKENKI',
    ['title' => 'Xem phim Genjitsu shugi yuusha no oukoku saikenki']);
})->name('GENJITSU-SHUGI-YUUSHA-NO-OUKOKU-SAIKENKI');

Route::get('/otonari-no-tenshi-sama-ni-itsunomanika-dame-ningen-ni-sareteita-ken', function () {
    return view('ANIME.OTONARINOTENSHI-SAMANIITSUNOMANIKADAMENINGENNISARETEITAKEN',
    ['title' => 'Xem phim Otonari no tenshi sama ni itsunomanika dame ningen ni sareteita ken']);
})->name('OTONARI-NO-TENSHI-SAMA-NI-ITSUNOMANIKA-DAME-NINGEN-NI-SARETEITA-KEN');

Route::get('/kimetsu-no-yaiba-hashira-geiko-hen', function () {
    return view('ANIME.KNY-HASHIRA-GEIKO-HEN',
    ['title' => 'Xem phim Kimetsu no yaiba: Hashira geiko hen']);
})->name('KNY-HASHIRA-GEIKO-HEN');

Route::get('/tsuki-ga-michibiku-isekai-douchuu-2nd-season', function () {
    return view('ANIME.TSUKIGAMICHIBIKUISEKAIDOUCHUU2NDSEASON',
    ['title' => 'Xem phim Tsuki ga michibiku isekai douchuu 2nd Season']);
})->name('TSUKI-GA-MICHIBIKU-ISEKAI-DOUCHUU-2ND-SEASON');

Route::get('/tensei-kizoku-kantei-sukiru-de-nariagaru', function () {
    return view('ANIME.TENSEIKIZOKUKANTEISUKIRUDENARIAGARU',
    ['title' => 'Xem phim Tensei kizoku kantei sukiru de nariagaru']);
})->name('tensei-kizoku-kantei-sukiru-de-nariagaru');

Route::get('/blue-archive-the-animation', function () {
    return view('ANIME.BLUEARCHIVETHEANIMATION',
    ['title' => 'Xem phim Blue archive the animation']);
})->name('BLUE-ARCHIVE-THE-ANIMATION');




