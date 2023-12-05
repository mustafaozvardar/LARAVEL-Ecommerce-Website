<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">

    .title_deg{
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .table_deg{
        width: 100%;
        border-collapse: collapse;
     
        border: 2px solid white;
        margin:auto;
        text-align: center;
        margin-top: 50px;
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
                <h1 class="title_deg">All Orders</h1>

                  
          <div style="padding-left:850px; padding-top:10px">

<form action="{{url('order_search')}}" method="get">
  @csrf
  <input style="border-radius:20px; color:black" type="text" name="search" placeholder="Search by product">
  <input style="border-radius:10px" type="submit" value="Search" class="btn btn-outline-primary">

</form>
</div>

                <table class="table_deg">
                    <tr style="background-color: gray;">
                        
                        <th>Customer Name</th>  
                        <th>Customer Email</th>
                        <th>Customer Address</th>
                        <th>Customer Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                    </tr>

                    @foreach($order as $order)
                    
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img style="width: 100px; height:100px;" src="/product/{{$order->image}}">
                        </td>
                        
                    </tr>

                    @endforeach
                    
                </table>

            </div>
        </div>

        @include('admin.script')
    
  </body>
</html>