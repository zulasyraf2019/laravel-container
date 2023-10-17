<?php

use Mbsp\Sisken\Controllers\SiskenController;

Route::get('sisken/lorirosak', [SiskenController::class, 'GetLoriRosakList']);
Route::get('sisken/loriservis', [SiskenController::class, 'GetLoriServisList']);
Route::get('sisken/kenderaanrosak', [SiskenController::class, 'SenaraiKenderaanRosak']);
Route::get('sisken/kenderaanservis', [SiskenController::class, 'SenaraiKenderaanServis']);