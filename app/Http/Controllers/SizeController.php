<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class SizeController extends Controller
{
    //dashboard ar jonno Setting module ar manage size page ar jonno function call
public function manage_size(){
	return view('admin.setting-module.manage-size');
}

}
