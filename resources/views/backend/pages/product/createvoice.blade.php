@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          Add Product
        </div>
        <div class="card-body">
          <form id="myform" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @include('backend.partials.messages')

            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="vtitle" aria-describedby="emailHelp" placeholder="Enter title">
            </div> 


           




            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea id="descrip"   name="description" rows="8" cols="80" class="form-control"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Price</label>
              <input type="number" class="form-control" name="price" id="vprice">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Quantity</label>
              <input type="number" class="form-control" name="quantity" id="vquantity">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Select Category</label>
              <select id="sid"  class="form-control" name="category_id">
                <option  id="sid" value="">Please select a category for the product</option>
                @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                  <option id="sid"   value="{{ $parent->id }}">{{ $parent->name }}</option>

                  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                    <option id="sid"    value="{{ $child->id }}"> ------> {{ $child->name }}</option>

                  @endforeach

                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Select Brand</label>
              <select class="form-control" name="brand_id">
                <option value="">Please select a brand for the product</option>
                @foreach (App\Models\Brand::orderBy('name', 'asc')->get() as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="product_image">Product Image</label>

              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
              </div>
            </div>

            <button  id="vproduct" type="submit" class="btn btn-primary">Add Product</button>
          </form>
        </div>
      </div>

    </div>
  </div>





  <div>

      <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
      <script>
      if (annyang) {
        // Let's define our first command. First the text we expect, and then the function it should call
        var commands = {
        
          'write title *tag': function(variable){

               let vtitle = document.getElementById("vtitle");
               vtitle.value = variable;

          },

          'write Description *tag': function(variable){

               let descrip = document.getElementById("descrip");
               descrip.value =variable;

          },
            
          'write price *tag': function(variable){

               let vprice = document.getElementById("vprice");
               vprice.value =variable;

          },

             'write quantity *tag': function(variable){

               let vquantity = document.getElementById("vquantity");
               vquantity.value =variable;

          },
         
          'Select Category': function(){

               let sid = document.getElementById("sid");
              

          },

          'Add Product   ': function(){

            let myform = document.getElementById("myform");

                 let card = document.queryselector(".card");
                 let heading = document.queryselector(".card-header");
                 myform.remove();


                 let vproduct = document.getElementById("vproduct");
              

          }


        };

        // Add our commands to annyang
        annyang.addCommands(commands);

        // Start listening. You can call this here, or attach this call to an event, button, etc.
        annyang.start();
      }
      </script>



  </div>
  <!-- main-panel ends -->
@endsection
