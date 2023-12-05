<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">

  @include('admin.css')

  <style type="text/css">

    .div_center{
        text-align: center;
        padding-top: 40px;
    }

    .font_size{
      font-size: 40px;
      padding-bottom: 40px;
    }

    .text_color{
      color:black;
      padding-bottom: 20px;
    }

    label{
      display: inline-block;
      width: 200px;
    }

    .div_design{
      padding-bottom: 15px;
    }

  </style>
  
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))

          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
          </div>

          @endif

          <div class="div_center">
                <h1 class="font_size">- Add Product -</h1>


                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                
                @csrf

              <div class="div_design">
                <label>Product Title :</label>
                <input class="text_color" type="text" name="title" required="" value="{{$product->title}}" placeholder="Write a title">

              </div>

              <div  class="div_design">
                <label>Product Description :</label>
                <input class="text_color" type="text" value="{{$product->description}}" required="" name="description" placeholder="Write a description">
                
              </div>

              <div  class="div_design">
                <label>Product Price :</label>
                <input class="text_color" type="number" value="{{$product->price}}" required="" name="price" placeholder="Write a price">
                
              </div class="div_design">
              <div  class="div_design">
                <label>Discount Price :</label>
                <input class="text_color" type="number" value="{{$product->discount_price}}" required="" name="dis_price" placeholder="Write a discount price">
                
              </div>
              <div class="div_design">
                <label>Product Quantity :</label>
                <input class="text_color" type="number" value="{{$product->quantity}}" required="" name="quantity" min="0" placeholder="Write a quantity">
                
              </div>

             

              <div class="div_design">
                <label>Product Catagory:</label>
                <select class="text_color" name="catagory" required="">
                  <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>

                  @foreach($catagory as $catagory)

<option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

@endforeach
                  

                </select>
                
              </div>


              <div class="div_design">
                <label>Current Product Here :</label>
                <img style="margin:auto;" height="200" width="200" src="/product/{{$product->image}}">
                
              </div>


              <div class="div_design">
                <label>Change Product Here :</label>
                <input type="file" name="image"/>
                
              </div>

              <div class="div_design">
               
                <input type="submit" name="image" required="" value="Update Product" class="btn btn-primary">
                
              </div>

  </form>

          </div>

          </div>
        </div>

        @include('admin.script')
    
  </body>
</html>