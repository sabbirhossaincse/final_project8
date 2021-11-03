@extends('admin.master')

@section('title')

Edit Category Page

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
                <form class="form-horizontal" action="{{route('edit-update-category')}}" method="POST" enctype="multipart/form-data">

                 <!-- ai route ta call korta hoba form k dynamic korar jonoo -->

                 @csrf



           

                                                                  
                    
                      <!-- add category form -->

                    <h2 class="text-center card-title" >Edit Category Form</h2>
                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name:</label>
                        <div class="col-sm-9">


<!-- edit form a name  shoho asba -->
    <input type="text" value="{{$category->name}}" class="form-control" name="name" >

    <input type="hidden" value="{{$category->id}}" class="form-control" name="id" >

                            <span class="text-danger"></span>
                        </div>
                    </div>






                  <!-- category descripton option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Description:</label>
                        <div class="col-sm-9">

      <textarea class="form-control" name="description">{{$category->description}}  </textarea>

                            <span class="text-danger"></span>
                        </div>
                    </div>



                       <!-- images option -->

                     <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Category Image:</label>

                        <div class="col-sm-9">


                     <input type="file" name="image" class="form-control">

    <!-- edit form a image shoho asba -->
                     <img src="{{asset($category->image)}}" alt="" height="60" width="80"/>


                            <span class="text-danger"></span>
                        </div>
                    </div>


 
                    <!-- publication option -->

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">

                        Publication Status:</label>

 <div class="col-sm-9">
    <input type="radio" {{$category->status == 1 ? 'checked' : ''}} name="status" value="1" >


                          Published

     <input type="radio" {{$category->status == 0 ? 'checked' : ''}} name="status" value="0" >

                            Unpublished <br>

                            
                            
                        </div>

                    </div>
                         


                         <!-- buttoun option -->
                    <div class="form-group row">

                        <label for="fname" class="col-sm-3 text-right control-label 
                        col-form-label"></label>

                        <div class="col-sm-9">

                            <input type="submit" name="btn" value="Data Update" class=" form-control btn btn-info" >
                            
                        </div>
                    </div>




                </form>


            </div>

        </div>
    </div>
@endsection