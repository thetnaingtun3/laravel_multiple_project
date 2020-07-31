<?php


use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('task');
Route::get('chart', 'ChartController@index');
Route::get('/sing','SignatureController@index');
Route::post('/sing','SignatureController@upload')->name('signature');
Route::post('/',function(Request $request) {

    $request->validate([
       'task_name' => 'required',
       'cost' => 'required'
    ]);

    $count = count($request->task_name);

    for ($i=0; $i < $count; $i++) {
	  $task = new Task();
	  $task->task_name = $request->task_name[$i];
	  $task->cost = $request->cost[$i];
	  $task->save();
    }

    return redirect()->back();
});

