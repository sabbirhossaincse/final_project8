<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
 

 public $categories;
 

/*  Setting Module Ar Sobgulo Function Start  
CategoryController Ar moddai kora acai sob gulo kaj
 */



   //dashboard ar jonno Setting module ar manage Company ar jonno function call
public function manage_company(){
	return view('admin.setting-module.manage-company');
}



  //dashboard ar jonno Setting module ar manage category ar jonno function call
public function manage(){

//ai code tuku kora hoyasa data gulo k manage page a tula anar jonno



//ai line korla essa moto data tula ana jaba manage category page a tobe Category::all(); ai line command korta hoba


   //$categories = Category::orderBy('id','asc')->skip(2)->take(1)->get();


  $categories = Category::all();


  //return $this->categories;

	return view('admin.setting-module.manage-category',['categories'=>$categories]);
}





/* Setting Modulers Ar sob gulo Function Ses   */


//manage category form ar data gulo k php myadmin a pathanor jonno function

public function create(Request $request){

	  $imageUrl = '';

	if($image = $request->file('image'))

	{

    

         $type = $image->getClientOriginalExtension();
          $name = time().'.'.$type;
          $directory = 'category-image/';
          $image->move($directory,$name);
          $imageUrl = $directory.$name;
          
            
     /*
       $productImage=$request->file('image');
        $imageName=$productImage->getClientOriginalName();
        //return $imageName;
        $directory='category-image/';
        $imageUrl=$directory.$imageName;
        $productImage->move($directory,$imageName);
        */
	}


   $category = new Category();

   $category->name = $request->name;
   
   $category->description = $request->description;

   $category->image = $imageUrl;

   $category->status = $request->status;

   //$category->image = $imageUrl;

   $category->save();

   return redirect()->back()->with('messages','Successfully Save Data');

}


   //manage page ar data gulo k published & unpublishes korar jonno function

  public function updatestatus($id)
  {
    $category = Category::find($id);
    if($category->status == 1)


   {
    $category->status = 0;
    $message = 'Category Status Successafully unpublishes';
  }



  else
  {
   $category->status = 1;
    $message = 'Category Status Successafully publishes'; 
  }


 $category->save();
 return redirect()->back()->with('message',$message);

}

//manage ar data gulo k edit korar jonno
public function editdata($id)
  {

//dela o hoba na dela o hoba
   //$this->categories = Category::all();

   return view('admin.setting-module.edit',[
    'categories' => $this->categories,
    'category' => Category::find($id)
   ]);
 
  }


  //manage ar data gulo k delete korar jonno
 public function deletedata($id)
 {
   
   $category = Category::find($id);

   if(file_exists($category->image))
   {
    unlink($category->image);
   }


   $category->delete();
   return redirect('/manage-category')->with('message','Data Delete Successfully');


 }


 



 public function editupdate(Request $request)
 {


//return $request->all();

$category  = Category::find($request->id);
//return $category;
//exit();


if($image = $request->file('image'))
{

 

$imagetype = $image->getClientOriginalExtension();
$imageName = time(). '.' .$imagetype;
$directory = 'category-image/';
$image->move($directory, $imageName);
$imageUrl = $directory.$imageName;

}

else
{
  $imageUrl = $category->image;
}


$category->name = $request->name;
$category->description  = $request->description;
$category->image = $imageUrl;
$category->status = $request->status;


//$category->image = $imageUrl;

$category->save();

return redirect('/manage-category')->with('message','successfully Save Update Data');
}
}