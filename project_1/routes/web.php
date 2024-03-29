<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('city_old', function(){
    return 'Miasto';
});

Route::get('city', function(){
    return view('city');
});

Route::get('info', function(){
    return view('info', ['firstname' => 'Janusz','lastname'=>'Nowak','city'=>'Poznań']);
});

Route::get('info_wiek/{age}',function($age){
    return view('info',['firstname' => 'Janusz','lastname'=>'Nowak','city'=>'Poznań','age'=>$age]);
});
Route::get('pages/{page}',function($page){
    $pages = [
        'about'=> "Strona informacyjna",
        'home'=> "Strona domowa",
        'contact'=> "Strona kontaktowa"
    ];
    return $pages[$page];
});

Route::redirect('miasto','city');
Route::redirect('/','city');

//home contatct about
//  Route::get('pages/home',function(){
//      return "Strona kontaktowa";
//  });
// Route::get('pages/contact',function(){
//     return "Strona kontaktowa";
// });
// Route::get('pages/about',function(){
//     return "Strona informacyjna";
// });
// Route::get('pages/{list}',function($list){
//     $list = ['home'=>"Strona",'contact'=>"Strona kontaktowa",'about'=>"strona info"];
//     if('pages/home'==true){
//         return "Strona domowa";
//     }else if('pages/contact'==true){
//         return "Strona kontaktowa";
//     }else if('pages/about'==true){
//         return "strona info";
//     }
// });