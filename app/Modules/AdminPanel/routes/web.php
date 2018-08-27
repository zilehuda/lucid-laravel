<?php

Route::group(['module' => 'AdminPanel', 'middleware' => ['web'], 'namespace' => 'Framework\Modules\AdminPanel\Controllers'], function() {

    Route::resource('AdminPanel', 'AdminPanelController');

});
