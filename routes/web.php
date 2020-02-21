<?php


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

Route::get('/', function () {
    $links = \App\Link::all();
    return view('welcome')->withLinks($links);
});

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});

Route::get('/mac', function (){
    return view('mails'); 
});
Route::post('/addemail', 'EmailAccountController@addEmail');
Route::get('/listemail', function(){
    $Emails= \App\EmailAccount::all();
    return view('listemail',['emails'=>$Emails]);
});


