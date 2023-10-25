<?php

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

// Route::get('/address', function () {
//     echo 'Miasto';
// });

// Route::get('/address1/{city}', function (string $city) {
//     echo 'Miasto: $city';
// });

// Route::get('/addres2/{city}/{street}', function (string $city,string $street) {
//     echo <<< ADDRESS
//     Miasto: $city<br>
//     Ulica: $street
//     <hr>
//     ADDRESS;
// });

// Route::get('/address3/{city?}/{street?}/{zipCode?}', function (string $city = "-",string $street = "-",int $zipCode = null) {
//     echo <<< ADDRESS
//     Kod pocztowy: $zipCode<br>
//     Miasto: $city<br>
//     Ulica: $street
//     <hr>
//     ADDRESS;
// });

// Route::get('/address4/{city?}/{street?}/{zipCode?}', function (string $city = "-",string $street = "-",int $zipCode = null) {
//     if(is_null($zipCode)){
//             $zipCode = "Brak danych";
//     }
//     else{
//     $zipCode=substr($zipCode,0,2)."-".substr($zipCode,2,3);
//     }
//     echo <<< ADDRESS
//     Kod pocztowy: $zipCode<br>
//     Miasto: $city<br>
//     Ulica: $street
//     <hr>
//     ADDRESS;
// });


Route::get('/address4/{city?}/{street?}/{zipCode?}', function (string $city = "-",string $street = "-",int $zipCode = null) {

    $zipCode = is_null($zipCode) ? "Brak danych" : substr($zipCode,0,2)."-".substr($zipCode,2,3);

    echo <<< ADDRESS
    Kod pocztowy: $zipCode<br>
    Miasto: $city<br>
    Ulica: $street
    <hr>
    ADDRESS;
})->name('address');

Route::redirect('/adres/{city?}/{street?}/{zipCode?}','/address4/{city?}/{street?}/{zipCode?}');
