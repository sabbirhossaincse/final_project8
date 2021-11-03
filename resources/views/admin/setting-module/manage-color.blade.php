










@extends('admin.master')

@section('title')

Manage Unit

@endsection






@section('body')

      


    <!-- Category page a category add korar jpnnp akta login form   -->

  <div class="container">
        <div class="row">
            <div class="col-md-10">
             <h3 class="text-center text-success"></h3>

                   <!-- messages optiopn -->
               <h2 class="text-center text-success">   {{ Session::get('message') }}  </h2>


                <!--  form option-->
                <form class="form-horizontal" action="" method="POST"> <!-- ai route ta call korta hoba form k dynamic korar jonoo -->

           

                                                                  
                    
                      <!-- add category form -->

                    <h2 class="text-center card-title" >Add Manage Color Form</h2>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"> Manage Color Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" >
                            <span class="text-danger"></span>
                        </div>
                    </div>






                  <!-- category descripton option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label"> Manage Color Description:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="category_description"></textarea>
                            <span class="text-danger"></span>
                        </div>
                    </div>



                       <!-- images option -->

                     <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Manage Color Image:</label>

                        <div class="col-sm-9">
                            <input type="file" name="product_image" class="form-control">
                            <span class="text-danger"></span>
                        </div>
                    </div>


 
                    <!-- publication option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Publication Status:</label>

                        <div class="col-sm-9">
                            <input type="radio"  name="publication_status" value="1" >


                          Published

                            <input type="radio"  name="publication_status" value="0" >

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



                  <h2> All Manage Color Info Goes Hare</h2>



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
                        
                    
                   
                   <tr>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td></td>
                       <td>
                   

                         

                     <!-- data manage a show koranor jonoo uporar kaj tuku korta hoba -->

                        
                         

                         <!-- nicher if else ar kaj tuku korla icon color change hoba published & unpublished ar -->
                        
                          
               <a href=""class="btn btn-info ">      
                               <span class="fa fa-arrow-up"></span>
                           </a>



                           
                    <a href="" class="btn btn-warning "> <!-- data gulo k public & unpublic korar jonn -->
                               <span class="fa fa-arrow-down"></span>
                           </a>

                         

            <!--  endif porjonto -->



              
                           
                              
                        

                     <a href="" class="">
                               <span class="fa fa-edit"></span>
                           </a>

                           <a href="" class="btn btn-danger">
                               <span class="fa fa-trash"></span>
                           </a>
                       </td>
                   </tr>
                   
              

               </table>



            </div>

        </div>
    </div>










@endsection

