<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ManageUnit extends Controller
{
//dashboard ar jonno Setting module ar manage unit page ar jonno function call
public function manage_unit(){
	return view('admin.setting-module.manage-unit');
}

}
