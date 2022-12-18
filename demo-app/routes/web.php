<?php

use App\Models\Listing;
use App\Models\Student;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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

// Common Resource Routes:
// index - show all listings
// show - show single listing
// create - show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update Listing
// destroy - Delete listing

// All Listing
Route::get('/', [ListingController::class,'index']);

//show create form
Route::get('/listings/create',[ListingController ::class,'create']);

//store listing data
Route::post('/listings',[ListingController :: class,'store']   
);


// Single Listing
Route::get('/listings/{listing}', [ListingController::class,'show']);



// Route::get('/listings', function () {

//     return view('listings',[
        
//         'listings'=> Listing::all()
//     ]);

// });



// Route::get('listings/{id}', function ($id) {

//     return view('listing',[
//         'heading'=>' Listing',
//         'listing'=> Listing::find($id)
//     ]);

// });



// Route :: get('listings/{listing}',function(Listing $listing){

   
//     return view('listing',[
//         'listing' => $listing
//      ]);
   

// });


Route :: get ('/hello/{id}',function($id){

    return response('<h1> Hello Word laravel id</h1>' , 200)
              ->header('Content-Type','text/plain')
              ->header('name','chandimal');
})->where('id','[0-9]+');


Route::get('/students',function(){

    return view('students',[
         'heading'=>'Students management',
          'students'=> Student::all()  ]);

});


Route::get('/student/{id}',function($id){
    ddd($id);
    return view('student',[
         'heading'=>'Students management',
          'student'=> Student::find($id)  ]);

})->where('id','[0-3]');


Route :: get('/search',function(Request $request){

    dd($request);

});