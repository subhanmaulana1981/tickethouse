<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\TicketController;

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

// The root page | base url
Route::get('/', function () {
    return view('welcome');
});

// Ticket List page
// Route::get('/tickets', function() { 
    
//     // return view only
//     // return view('ticket.index');

//     // return json
//     // return $tickets;

//     // return view with json
//     /* return view('ticket.index', [
//         'bidang' => 'sekretariat', 
//         'subbidang' => 'sekretariat umum', 
//         'pelapor' => 'burhanudin'
//     ]); */

//     // return view with variable
//     /* $ticket = [
//         'bidang' => 'sekretariat',
//         'subbidang' => 'sekretariat umum',
//         'pelapor' => 'burhanudin'
//     ];
//     return view('ticket.index', $ticket); */
    
//     // return view and multi json data with variable
//     $tickets = [
//         ['bidang' => 'sekretariat', 'subbidang' => 'sekretariat umum', 'pelapor' => 'burhanudin'],
//         ['bidang' => 'sekretariat', 'subbidang' => 'sekretariat khusus', 'pelapor' => 'ahmad'],
//         ['bidang' => 'pengendalian', 'subbidang' => 'pengendalian disiplin', 'pelapor' => 'budi']
//     ];    
    
//     // Multi dimensional json
//     // return view('ticket.index', ['tickets' => $tickets]);

//     // Query Parameter
//     $pelapor = request('pelapor');
//     $usia = request('usia');

//     return view('ticket.index', [
//         'tickets' => $tickets,
//         'pelapor' => $pelapor,
//         'usia' => $usia
//     ]);
// });

// Ticket by id
// Route::get('tickets/{id}', function($id){
//     // use the $id variable to query the db for a record
//     return view('ticket.show', ['id' => $id]); 
// });

// Ticket List page 
Route::resource('/tickets', TicketController::class);

// Ticket by id
// Route::resource('/tickets/{id}', TicketController::class);
// Route::get('tickets/{id}', 'TicketController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
