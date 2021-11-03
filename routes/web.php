<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [
     'uses' => 'App\Http\Controllers\StudentController@student',
     'as' => 'Student'
 ]); 












//dashboard a click korla dashboard a ai thakba tar jonno
Route::get('/dash', [
     'uses' => 'App\Http\Controllers\StudentController@dash',
     'as' => 'dash'
 ]); 




/*  Setting Moduler Ar sobgulo routing Start ai khan thaka */






//Start Dashboard ar setting module ar manage company ar routing
Route::get('/manage-company', [
     'uses' => 'App\Http\Controllers\CategoryController@manage_company',
     'as' => 'manage-company'
 ]);







//Start Dashboard ar setting module ar manage category ar routing
Route::get('/manage-category', [
     'uses' => 'App\Http\Controllers\CategoryController@manage',
     'as' => 'manage'
 ]);



//setting module ar manage category ar data gulo k php myadmin a pathanor jonno routing
Route::POST('/new-create', [
     'uses' => 'App\Http\Controllers\CategoryController@create',
     'as' => 'new-category'
 ]); 



//manage category page ar data gulo k published & unpublished korar jonno routing
Route::get('/updatee-category-status/{id}',[
'uses' => 'App\Http\Controllers\CategoryController@updatestatus',
'as' => 'updatee-category-status'
 ]);


//manage category page ar data gulo k Edit  korar jonno routing
Route::get('/edit-category/{id}',[
'uses' => 'App\Http\Controllers\CategoryController@editdata',
'as' => 'edit-category'
 ]);


//manage category page ar data gulo k delete  korar jonno routing
Route::get('/delete-category/{id}',[
'uses' => 'App\Http\Controllers\CategoryController@deletedata',
'as' => 'delete-category'
 ]);



//setting module ar manage category ar data gulo k edit kore update kora5r jonno  jonno routing
Route::post('/edit-update-category', [
     'uses' => 'App\Http\Controllers\CategoryController@editupdate',
     'as' => 'edit-update-category'
 ]);

//manage-category ar edit delete update ar sob kaj ses







//setting module ar manage sub category routing
Route::get('/sub-manage', [
     'uses' => 'App\Http\Controllers\SubCategoryController@sub_manage',
     'as' => 'sub-manage'
 ]); 




//manage sub category page ar data gulo k published & unpublished korar jonno routing
Route::get('/updatee-sub-category-status/{id}',[
'uses' => 'App\Http\Controllers\SubCategoryController@updatestatus',
'as' => 'updatee-sub-category-status'
 ]);


//manage sub category page ar data gulo k Edit  korar jonno routing
Route::get('/edit-sub-category/{id}',[
'uses' => 'App\Http\Controllers\SubCategoryController@subeditdata',
'as' => 'edit-sub-category'
 ]);





//manage sub category page ar data gulo k Edit korar pore update korar jonno  korar jonno routing
Route::post('/update-sub-category',[
'uses' => 'App\Http\Controllers\SubCategoryController@subupdatedata',
'as' => 'update-sub-category'
 ]);






//manage sub category page ar data gulo k delete  korar jonno routing
Route::get('/delete-sub-category/{id}',[
'uses' => 'App\Http\Controllers\SubCategoryController@deletedata',
'as' => 'delete-sub-category'
 ]);





//setting module ar manage sub category ar data gulo k php myadmin a pathanor jonno routing
Route::POST('/new-sub-category', [
     'uses' => 'App\Http\Controllers\SubCategoryController@subcreate',
     'as' => 'new-sub-category'
 ]);

//manage-sub-category ar edit delete update ar sob kaj ses










//setting module ar manage sub category routing
Route::get('/manage-brand', [
     'uses' => 'App\Http\Controllers\BrandController@manage_brand',
     'as' => 'manage-brand'
 ]); 



//manage category page ar data gulo k published & unpublished korar jonno routing
Route::get('/updatee-manage-brand-status/{id}',[
'uses' => 'App\Http\Controllers\BrandController@updatestatus',
'as' => 'updatee-manage-brand-status'
 ]);


//manage category page ar data gulo k Edit  korar jonno routing
Route::get('/edit-manage-brand/{id}',[
'uses' => 'App\Http\Controllers\BrandController@editdata',
'as' => 'edit-manage-brand'
 ]);


//manage category page ar data gulo k delete  korar jonno routing
Route::get('/delete-manage-brand/{id}',[
'uses' => 'App\Http\Controllers\BrandController@deletedata',
'as' => 'delete-manage-brand'
 ]);

//manage-brand-category ar edit delete update ar sob kaj ses


















//setting module ar manage unit category routing
Route::get('/manage-unit', [
     'uses' => 'App\Http\Controllers\ManageUnit@manage_unit',
     'as' => 'manage-unit'
 ]); 


//manage unit category page ar data gulo k published & unpublished korar jonno routing
Route::get('/manage-unit-status/{id}',[
'uses' => 'App\Http\Controllers\ManageUnit@updatestatus',
'as' => 'manage-unit-status'
 ]);


//manage unit category page ar data gulo k Edit  korar jonno routing
Route::get('/edit-manage-unit/{id}',[
'uses' => 'App\Http\Controllers\ManageUnit@editdata',
'as' => 'edit-manage-unit'
 ]);


//manage unit category page ar data gulo k delete  korar jonno routing
Route::get('/delete-manage-unit/{id}',[
'uses' => 'App\Http\Controllers\ManageUnit@deletedata',
'as' => 'delete-manage-unit'
 ]);

//manage-unit-category ar edit delete update ar sob kaj ses





//setting module ar manage color routing
Route::get('/manage-color', [
     'uses' => 'App\Http\Controllers\ColorController@manage_color',
     'as' => 'manage-color'
 ]); 



//manage color page ar data gulo k published & unpublished korar jonno routing
Route::get('/manage-color-status/{id}',[
'uses' => 'App\Http\Controllers\ColorController@updatestatus',
'as' => 'manage-color-status'
 ]);


//manage colorry page ar data gulo k Edit  korar jonno routing
Route::get('/edit-manage-color/{id}',[
'uses' => 'App\Http\Controllers\ColorController@editdata',
'as' => 'edit-manage-color'
 ]);


//manage color page ar data gulo k delete  korar jonno routing
Route::get('/delete-manage-color/{id}',[
'uses' => 'App\Http\Controllers\ColorController@deletedata',
'as' => 'delete-manage-color'
 ]);

//manage-unit-category ar edit delete update ar sob kaj ses









//setting module ar manage size routing
Route::get('/manage-size', [
     'uses' => 'App\Http\Controllers\SizeController@manage_size',
     'as' => 'manage-size'
 ]); 
/*  Setting Moduler Ar sobgulo routing Ses ai khan thaka */



//manage color page ar data gulo k published & unpublished korar jonno routing
Route::get('/manage-size-status/{id}',[
'uses' => 'App\Http\Controllers\SizeController@updatestatus',
'as' => 'manage-size-status'
 ]);


//manage colorry page ar data gulo k Edit  korar jonno routing
Route::get('/edit-manage-size/{id}',[
'uses' => 'App\Http\Controllers\SizeController@editdata',
'as' => 'edit-manage-size'
 ]);


//manage color page ar data gulo k delete  korar jonno routing
Route::get('/delete-manage-size/{id}',[
'uses' => 'App\Http\Controllers\SizeController@deletedata',
'as' => 'delete-manage-size'
 ]);

//manage-unit-category ar edit delete update ar sob kaj ses

























//dashboard ar jonno default routing
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
