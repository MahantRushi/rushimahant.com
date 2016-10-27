<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@index');

Route::get('/index.html', function (){
    return redirect('/');
});


Route::get('/about.html', 'PagesController@about');

Route::get('/portfolio.html', function () {
    return view('portfolio');
});

Route::get('/resume.html', 'PagesController@resume');


Route::get('/blog-latest.html', 'PagesController@blogLatest');

Route::get('/blog.html', function () {
    return redirect('/blog-latest.html');
});

//Route::get('/blog-single.html', function () {
//    return view('blog-single');
//});

Route::get('/blog-single/{id}.html', 'PagesController@blogSingle');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('socials', 'socialsController');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::resource('homepages', 'homepagesController');

Route::resource('services', 'servicesController');

Route::resource('clients', 'clientsController');

Route::resource('facts', 'factsController');

Route::resource('works', 'worksController');

Route::resource('education', 'educationController');

Route::resource('skills', 'skillsController');

Route::resource('testimonials', 'testimonialsController');

Route::resource('profiles', 'profileController');

Route::resource('blogs', 'blogController');