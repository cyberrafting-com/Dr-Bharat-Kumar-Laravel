<?php           

// use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ContactController;
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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');      
})->name('home');

Route::get('about', function () {
    return view('about');      
})->name('about');

Route::get('contact', function () {
    return view('contact');      
})->name('contact');

// testimonials
Route::group(['prefix' => "testimonials"], function () {

    Route::get('video-testimonials', function () {
        return view('testimonials.video-testimonials'); 
    })->name('video-testimonials');

    Route::get('google-reviews', function () {
        return view('testimonials.testimonials'); 
    })->name('testimonials');
});  

// gallery
Route::group(['prefix' => "gallery"], function () {

    Route::get('images', function () {
        return view('gallery.gallery'); 
    })->name('gallery');

    Route::get('patient-education', function () {
        return view('gallery.patient-education'); 
    })->name('patient-education');

});  

// gallery
Route::group(['prefix' => "services"], function () {

    Route::get('hip-replacement', function () {
        return view('services.hip-replacement'); 
    })->name('hip-replacement');

    Route::get('knee-replacement', function () {
        return view('services.knee-replacement'); 
    })->name('knee-replacement');

    Route::get('sport-injury-treatment', function () {
        return view('services.sport-injury-treatment'); 
    })->name('sport-injury-treatment');

    Route::get('sport-injury-treatment', function () {
        return view('services.sport-injury-treatment'); 
    })->name('sport-injury-treatment');

    Route::get('arthritis-treatment', function () {
        return view('services.arthritis-treatment'); 
    })->name('arthritis-treatment');

    Route::get('fracture-treatment', function () {
        return view('services.fracture-treatment'); 
    })->name('fracture-treatment');

    Route::get('robotic-knee-replacement-surgery-kharghar-navi-mumbai', function () {
        return view('services.robotic-knee-replacement-surgery-kharghar-navi-mumbai'); 
    })->name('robotic-knee-replacement-surgery-kharghar-navi-mumbai');

});  

Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');     
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');