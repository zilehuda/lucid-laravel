<?php

Route::group(['module' => 'AdminPanel', 'middleware' => ['api'], 'namespace' => 'Framework\Modules\AdminPanel\Controllers'], function() {

    Route::resource('AdminPanel', 'AdminPanelController');

});
