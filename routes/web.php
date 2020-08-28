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


//Route::get('/', function () {
//    return 'Hola desde la pagina de inicio';
//});

// definimos una URL y retornamos una funcion de momento 


Route::get('contactos', function () {
    return 'Hala desde la pagina Contacto';
});

// cuando deseamos enviar algun parametro atraves de la URL, ponemos el llaves el parametro y desde la funcion lo recibimos 
// en el casos de que el parametro venga vacio, se pone un signo de interoogacion , indicando si viene vacío , retorma el valor definido en la funcion 
Route::get('saludo/{nombre?}', function ($nombre = 'Jean Pier R ') {
    return 'Saludos '.$nombre;
});




// RUTAS CON NOMBRE 

// es buena practica darle un nombre a la ruta para que no sea complicado cambiar multiples referencias 
Route::get('contacto', function () {
    return 'Pagina de Contactos';
})->name('contacto');


/* Route::get('/', function () {
    echo "<a href='".route('contacto')."'> Contacto 1</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 2</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 3</a><br>";
    echo "<a href='".route('contacto')."'> Contacto 4</a><br>";
}); */


// PASAR VARIABLES A VISTAS 

/* Route::get('/', function () {

    $minombre = "Juan Pedro";

     //return view('home')-> with('minombre',$minombre);
    return view('home')-> with(['minombre'=>$minombre]);
})->name('home'); */

// recomendado para mostar poca informacion 
//Route::view('/', 'home',['minombre'=>"Jena Pier "]);

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('portafolio','ProjectController')->names('projects')->parameters(['portafolio'=>'project']);
//la linea de arriba reemplaza a todo las rutas que tenga en comun el prefijo el contralador y el prefijo de ruta
/* Route::get('/portafolio', 'ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portafolio', 'ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
 */


Route::view('/contacto', 'contact')->name('contact');
Route::post('/contact','MessageController@store')->name('messages.store');

