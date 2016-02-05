<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('allusers',  'UserController@all');

Route::get('user_service',  'UserController@user_service'); 
Route::get('user_service2',  'UserController@user_service2'); 

Route::get('services',  'ServiceController@all');

/*
Из-за того, что мы ранее привязали параметр {user} к модели App\User, то её экземпляр будет внедрён в маршрут. Таким образом, к примеру, запрос profile/1 внедрит объект User, который соответствует ID 1 (полученному из БД — прим. пер.).
*/ 
// single user profile
Route::get('profile/{user}', function(App\User $user)
{
   return view('user.profile', ['user' => $user ]);
});

// single service profile
Route::get('service/{service}', function(App\Service $service)
{
   return view('service.single', ['service' => $service ]);
}); 