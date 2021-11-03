

@extends('admin.master')

@section('title')

Manage Sub Category Page

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
                <form class="form-horizontal" action="{{route('new-sub-category')}}" method="POST" enctype="multipart/form-data">

                 <!-- ai route ta call korta hoba form k dynamic korar jonoo -->

                 @csrf

           

                                                                  
                    
                      <!-- add category form -->

                    <h2 class="text-center card-title">

                        Add Sub Category Form

                </h2>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name:</label>
                        <div class="col-sm-9">



     
      <select class="form-control" name="category_id">

        <option> -- Select Category Name -- </option>

      @foreach($categories as $category)

<option value="{{$category->id}}">{{$category->name}}</option>

      @endforeach

      </select>







  <!--  <input type="text" class="form-control" name="name" > -->

                            <span class="text-danger"></span>
                        </div>
                    </div>





                     <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Sub Category Name:

                    </label>
                        <div class="col-sm-9">

    <input type="text" class="form-control" name="name">

                            <span class="text-danger"></span>
                        </div>
                    </div>






                  <!-- category descripton option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                       Sub Category Description:

                    </label>
                        <div class="col-sm-9">

      <textarea class="form-control" name="description"></textarea>

                            <span class="text-danger"></span>
                        </div>
                    </div>



                       <!-- images option -->

                     <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                       Sub Category Image:</label>

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
                            <input type="submit" name="btn" value="Create Sub Category" class=" form-control btn btn-info" >
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



                  <h2> All Sub Category Info Goes Hare</h2>



               <table class="table table-bordered">
                   <tr class="bg-success">
                       <th>SI NO</th>
                       <th>Category Name</th>
                       <th>Sub Category Name</th>
                       <th>Sub Category Description</th>
                       <th>Sub Category Image</th>
                       <th>Publication Status</th>
                       <th width="20%">Action</th>
                   </tr>



  @foreach($sub_categories as $sub_category)
                   


               <tr>
                       <td>{{$loop->iteration}}</td>
                       <td>{{$sub_category->category_id}}</td>
                       <td>{{$sub_category->name}}</td>
                       <td>{{$sub_category->description}}</td>
                       <td><img src="{{asset($sub_category->image)}}" height="60" width="80"/></td>
                       <td>{{$sub_category->status == 1 ? 'published' : 'unpublished'}}</td>

                <td>


         


                                              
   <a href=
   "{{route('updatee-sub-category-status',['id'=>$sub_category->id])}}"class="btn btn-info">  

  <span class="fa fa-arrow-up"></span>

    </a>

       

       <!-- data gulo k  public & unpublic korar jonn -->                   
   <a href=
   "{{route('updatee-sub-category-status',['id'=>$sub_category->id])}}" class="btn btn-warning"> 

  <span class="fa fa-arrow-down"></span>

     </a>

                         

            <!--  endif porjonto -->



              
                           
                              
                        
<!--  data gulo  k edit korar jonno -->
 <a href="{{route('edit-sub-category',['id'=>$sub_category->id])}}" class="btn btn-success">
     <span class="fa fa-edit"></span>
                           </a>




            <!--  data gulo  k delete korar jonno -->
                    <a href="{{route('delete-sub-category',['id'=>$sub_category->id])}}" 

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




