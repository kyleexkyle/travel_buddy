<?php

use App\Domain\Listing\Models\Listing;
use App\Http\Web\Controllers\Booking\BookingController;
use App\Http\Web\Controllers\Business\BusinessController;
use App\Http\Web\Controllers\LandingPageController;
use App\Http\Web\Controllers\Listing\ListingController;
use App\Http\Web\Resources\Listing\ListingCollection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [LandingPageController::class,'index'])->name('landing-page');

//Route::prefix('partner')->name('partner.')->group(function (){
//    Route::get('/register',[\App\TravelBuddy\Api\Partner\Controllers\RegisterController::class,'register'])->name('register');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::prefix('accommodations')->name('accommodations.')->group(function () {
        Route::get('/', function () {

            $accommodations = Listing::query()
                ->where('category_id', 1)
                ->limit(4)
                ->get();

            return Inertia::render('Accommodations/Index',[
                'accommodations' => new ListingCollection($accommodations)
            ]);
        })->name('index');

        Route::get('/list', function () {
            return Inertia::render('Accommodations/List');
        })->name('list');
    });

    Route::prefix('car-rentals')->name('car-rentals.')->group(function () {
        Route::get('/', function () {
            $cars = Listing::query()
                ->where('category_id', 2)
                ->limit(4)
                ->get();

            return Inertia::render('CarRentals/Index',[
                'cars' => new ListingCollection($cars)
            ]);
        })->name('index');


        Route::get('/list', function () {
            $cars = Listing::query()
                ->where('category_id', 2)
                ->get();

            return Inertia::render('CarRentals/List',[
                'cars' => new ListingCollection($cars)
            ]);
        })->name('list');

    });

    Route::prefix('motorbikes')->name('motorbikes.')->group(function () {
        Route::get('/', function () {
            $scooters = Listing::query()
                ->where('category_id', 3)
                ->limit(4)
                ->get();

            return Inertia::render('Motorbikes/Index',[
                'scooters' => new ListingCollection($scooters)
            ]);
        })->name('index');

        Route::get('/list', function () {
            $scooters = Listing::query()
                ->where('category_id', 3)
                ->get();

            return Inertia::render('Motorbikes/List',[
                'scooters' => new ListingCollection($scooters)
            ]);
        })->name('list');
    });

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::resource('/businesses', BusinessController::class);
    Route::resource('/listings', ListingController::class);
    Route::resource('/bookings', BookingController::class);
});
