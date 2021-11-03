@extends('admin.master')

@section('title')

Manage Category Page

@endsection






@section('body')

      


    <!-- Category page a category add korar jpnnp akta login form   -->

  <div class="container">
        <div class="row">
            <div class="col-md-10">
             <h3 class="text-center text-success"></h3>

                   <!-- messages optiopn -->
               <h2 class="text-center text-success">   {{ Session::get('messages') }}  </h2>


                <!--  form option-->
                <form class="form-horizontal" action="{{route('new-category')}}" method="POST" enctype="multipart/form-data">

                 <!-- ai route ta call korta hoba form k dynamic korar jonoo -->

                 @csrf

           

                                                                  
                    
                      <!-- add category form -->

                    <h2 class="text-center card-title" >Add Category Form</h2>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name:</label>
                        <div class="col-sm-9">




    <input type="text" class="form-control" name="name">

                            <span class="text-danger"></span>
                        </div>
                    </div>






                  <!-- category descripton option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Description:</label>
                        <div class="col-sm-9">

      <textarea class="form-control" name="description"></textarea>

                            <span class="text-danger"></span>
                        </div>
                    </div>



                       <!-- images option -->

                     <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Category Image:</label>

                        <div class="col-sm-9">


                     <input type="file" name="image" class="form-control">

                            <span class="text-danger"></span>
                        </div>
                    </div>


 
                    <!-- publication option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Publication Status:</label>

                        <div class="col-sm-9">
                            <input type="radio"  name="status" value="1" >


                          Published

                            <input type="radio"  name="status" value="0" >

                            Unpublished <br>

                            
                            
                        </div>

                    </div>
                         


                         <!-- buttoun option -->
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                        <div class="col-sm-9">
                            <input type="submit" name="btn" value="Save" class=" form-control btn btn-info" >
                        </div>
                    </div>




                </form>


            </div>

        </div>
    </div>



<br/>

<hr>

<!-- uporar form ar data gulo nivchar table a show korar jonno table -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center text-success"></h3>

              <h3 class="text-center text-success"> {{ Session::get('message') }} </h3>



                  <h2> All Category Info Goes Hare</h2>



               <table class="table table-bordered">
                   <tr class="bg-success">
                       <th>SI NO</th>
                       <th>Category Name</th>
                       <th>Category Description</th>
                       <th>Category Images</th>
                       <th>Publication Status</th>
                       <th width="20%">Action</th>
                   </tr>


                   <!-- data manage page a show koranor jonno -->
                        
                    @foreach($categories as $category)
                   
                   <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$category->name}}</td>
                       <td>{{$category->description}}</td>
                       <td><img src="{{asset($category->image)}}" height="60" width="80"/></td>
                       <td>{{$category->status == 1 ? 'published' : 'unpublished'}}</td>
                       <td>
                   

                         

                     <!-- data manage a show koranor jonoo uporar kaj tuku korta hoba -->

                        
                         

  <!-- nicher if else ar kaj tuku korla icon color change hoba published & unpublished ar -->                 
                          
   <a href=
   "{{route('updatee-category-status',['id'=>$category->id])}}"class="btn btn-info">  

  <span class="fa fa-arrow-up"></span>

    </a>

       

       <!-- data gulo k  public & unpublic korar jonn -->                   
   <a href=
   "{{route('updatee-category-status',['id'=>$category->id])}}" class="btn btn-warning"> 

  <span class="fa fa-arrow-down"></span>

     </a>

                         

            <!--  endif porjonto -->



              
                           
                              
                        
<!--  data gulo  k edit korar jonno -->
 <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-success">
     <span class="fa fa-edit"></span>
                           </a>




            <!--  data gulo  k delete korar jonno -->
                    <a href="{{route('delete-category',['id'=>$category->id])}}" 

                      class="btn btn-danger" onclick="return confirm('Are You Sure To Delete')">

             <span class="fa fa-trash"></span>
                           </a>
                       </td>
                   </tr>
                   
                  @endforeach

               </table>



            </div>

        </div>
    </div>










@endsection