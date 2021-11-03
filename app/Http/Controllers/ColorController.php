<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ColorController extends Controller
{
   //dashboard ar jonno Setting module ar manage color page ar jonno function call
public function manage_color(){
	return view('admin.setting-module.manage-color');
}

}
