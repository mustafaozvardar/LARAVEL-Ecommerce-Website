<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

    .center{
        margin: auto;
        width: 50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
    }

    .font_size{
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size{
        width: 150px;
        height: 150px;
    }

    .th_color{
        background:skyblue;
    }

    .th_deg{
        padding: 30px;
        color: black;
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
          <div class="content-wrapper" >

          @if(session()->has('message'))

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {{session()->get('message')}}
</div>

@endif

          <h2 class="font_size">All Products</h2>

          
          <div style="padding-left:850px; padding-bottom:20px; padding-top:10px">

            <form action="{{url('search')}}" method="get">
              @csrf
              <input style="border-radius:20px; color:black" type="text" name="search" placeholder="Search by product">
              <input style="border-radius:10px" type="submit" value="Search" class="btn btn-outline-primary">
            
            </form>
          </div>

          <table class="center">
          
          <tr class="th_color">
            <th class="th_deg">Product title</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">Quantity</th>
            <th class="th_deg">Catagory</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Discount Price</th>
            <th class="th_deg">Product Image</th>
            <th class="th_deg">Delete</th>
            <th class="th_deg">Edit</th>
          </tr>

          @foreach($product as $product)

          <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->catagory}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->discount_price}}</td>
            <td>

                <img class="img_size" src="/product/{{$product->image}}">

            </td>

            <td>
              <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')" style="border-radius:20px" href="{{url('delete_product',$product->id)}}">Delete</a>
            </td>
            <td>
              <a class="btn btn-success" style="border-radius:20px" href="{{url('update_product',$product->id)}}">Edit</a>
            </td>
          </tr>

        @endforeach
          </table>

          </div>
        </div>

        @include('admin.script')
    
  </body>
</html>