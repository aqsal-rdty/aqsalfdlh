<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;

route::get('/', [PortoController::class, 'home']);
route::get('/about', [PortoController::class, 'about']);
route::get('/skill', [PortoController::class, 'skill']);
route::get('/services', [PortoController::class, 'services']);
route::get('/contact', [PortoController::class, 'contact']);