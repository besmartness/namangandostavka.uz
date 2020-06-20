<?php

use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
	if (request()->has('fbclid')) {
	  file_get_contents("https://api.telegram.org/bot1004811530:AAH6Yh0iOityLxo3fZOF95X47n27W9nnVd8/sendMessage?chat_id=159968391&text=Facabook visit");
	} else {
	  file_get_contents("https://api.telegram.org/bot1004811530:AAH6Yh0iOityLxo3fZOF95X47n27W9nnVd8/sendMessage?chat_id=159968391&text=HOme Page" );
    	}
    App\Dostavka::first()->increment('home_count');
    return view('home');
});

Route::view('/rests', 'welcome');

Route::get('/kitchens/{id}', function ($id) {
    App\Dostavka::first()->increment('rest_count');
    return view('rests', compact('id'));
});

Route::get('/drugs', function () {
    App\Dostavka::first()->increment('drug_count');
    return view('drugs');
});

Route::get('/markets', function () {
    App\Dostavka::first()->increment('market_count');
    return view('markets');
});

Route::view('/avazxon/rasm', 'rasm.index');

Route::get('/avazxon/report', function () {
    dd(DB::table('avazxon')->first()->increment);
});

Route::get('/report', function () {
    dd(DB::table('dostavka_table')->first());
});

Route::post('/image' , function ( \Illuminate\Http\Request $request ) {

    file_get_contents("https://api.telegram.org/bot915544351:AAHxKQ9KsvTV7gqyS3qQWdLZla8kc2TU2ug/sendMessage?chat_id=159968391&text=avazxon rasm yukladila" );

    Storage::disk('public' )->deleteDirectory('stores' );

    $file  =  $request->file('my_image' );
    $ext  =  $file->getClientOriginalExtension();
    $name  =  'image_' . uniqid() . '.' . $ext;

    $img  =  Image::make( $file );

    $img->insert(public_path('images/watermark3.png'), 'bottom-right');

    Storage::disk('public' )->put('stores/' . $name, $img->encode('png' ,100 ));

    $content  =  public_path('stores/' . $name );

    DB::table('avazxon' )->increment('increment' );

    return response()->download( $content ,'demo.jpg' );

})->name('image' );
