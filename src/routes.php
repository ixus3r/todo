<?php
    Route::get('/todo', 'Yuliyandoev\\Todo\\Controllers\\MainController@index');
    Route::post('/yuliyandoev-save-todo', 'Yuliyandoev\\Todo\\Controllers\\MainController@saveTask')->name('savetodo');
    Route::delete('/yuliyandoev-delete-task/{id}', 'Yuliyandoev\\Todo\\Controllers\\MainController@deleteTask')->name('deletetask');
    Route::put('/yuliyandoev-edit-task', 'Yuliyandoev\\Todo\\Controllers\\MainController@editTask')->name('edittask');
    Route::post('/yuliyandoev-add-category', 'Yuliyandoev\\Todo\\Controllers\\MainController@addCategory')->name('addcategory');
    Route::post('/yuliyandoev-edit-category', 'Yuliyandoev\\Todo\\Controllers\\MainController@editCategory')->name('editcategory');
