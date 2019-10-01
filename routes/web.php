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
    return view('welcome');
});
Route::get('showname/{name}','Hellocontroller@showHello');
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HelloController extends Controller
{
function showHello(){
  return '<h1>Hello Contreller : Monnaphon</h1';
  }
}
