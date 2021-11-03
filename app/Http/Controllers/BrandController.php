<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class BrandController extends Controller
{

	//dashboard ar jonno Setting module ar manage brand page ar jonno function call
public function manage_brand(){
	return view('admin.setting-module.manage-brand');
}


}
