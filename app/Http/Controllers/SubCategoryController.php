<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    //dashboard ar jonno Setting module ar manage sub category ar jonno function call

    //ai kaj tuku korla form ar data gulo dropdown akara asba
public function sub_manage()
   
    {
    
         $categories = Category::get(['id','name']);
             return view('admin.setting-module.manage-sub', [
               	'categories' => $categories,
               	'sub_categories' => Subcategory::all()
                   
           ]);

} 



//sub catadory form ar data gulo php myadmin a pathanor jonno
public function subcreate(Request $request)
{
	//return $request->all();

   
	 $imageUrl = '';

	if($image = $request->file('image'))

	{
         $type = $image->getClientOriginalExtension();
          $name = time().'.'.$type;
          $directory = 'sub-category-image/';
          $image->move($directory,$name);
          $imageUrl = $directory.$name;
}


   $subcategory = new Subcategory();

   $subcategory->category_id = $request->category_id;

   $subcategory->name = $request->name;
   
   $subcategory->description = $request->description;

   $subcategory->image = $imageUrl;

   $subcategory->status = $request->status;

   $subcategory->save();

   return redirect()->back()->with('messages','Sub Category Data Save Successafully');


}


//sub category page ar data gulo e published unpublished korar jonno function
public function updatestatus($id)
{
	   $subcategory = Subcategory::find($id);
    if($subcategory->status == 1)


   {
    $subcategory->status = 0;
    $message = 'Category Status Successafully unpublishes';
  }



  else
  {
   $subcategory->status = 1;
    $message = 'Sub-Category Status Successafully publishes'; 
  }


 $subcategory->save();
 return redirect()->back()->with('message',$message);
}



//edit form ta anar jonno
public function subeditdata($id)
{
	   $categories = Category::get(['id','name']);
             return view('admin.setting-module.sub-edit', [
               	'categories' => $categories,
               	'sub_categories' => Subcategory::all(),
               	'sub_category' => Subcategory::find($id)
                   
           ]);

}


//sub catadory form ar data gulo php myadmin a pathanor jonno

public function subupdatedata(Request $request)
{
	//return $request->all();

   
   

	 $imageUrl = '';


	  $subcategory = Subcategory::find($request->id);

	if($image = $request->file('image'))

	{
          $type = $image->getClientOriginalExtension();
          $name = time().'.'.$type;
          $directory = 'sub-category-image/';
          $image->move($directory,$name);
          $imageUrl = $directory.$name;
}

else{
	$imageUrl = $subcategory->image;
}

   $subcategory->category_id = $request->category_id;

   $subcategory->name = $request->name;
   
   $subcategory->description = $request->description;

   $subcategory->image = $imageUrl;

   $subcategory->status = $request->status;

   $subcategory->save();

   return redirect('/sub-manage')->with('messages','Pudate Sub Category Data Save Successafully');
}






 //sub manage ar data gulo k delete korar jonno
 public function deletedata($id)
 {
   
   $subcategory = Subcategory::find($id);

   if(file_exists($subcategory->image))
   {
    unlink($subcategory->image);
   }


   $subcategory->delete();
   return redirect('/sub-manage')->with('message','Data Delete Successfully');


 }

}
