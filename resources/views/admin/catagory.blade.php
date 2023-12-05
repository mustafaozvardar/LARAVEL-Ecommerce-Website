<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')

  <style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .h2_font{
        font-size: 40px;
        padding-top: 40px;
    }

    .input_color{
        color:black;
    }

    .center{
      margin:auto;
      width:50%;
      text-align: center;
      margin-top: 30px;
      border:3px solid green;
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
                <h2  class="h2_font">- Add Catagory -</h2>
                <br>

                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
            <input class="input_color" style="border-radius:20px" type="text" name="catagory" placeholder="Write catagory name">
                    <input type="submit" style="border-radius:20px" class="btn btn-primary" name="submit" value="Add Catagory">

                </form>

                <table class="center">

                  <tr>
                    <td>Catagory Name</td>
                    <td>Action</td>
                  </tr>

                  @foreach($data as $data)

                  <tr>
                    <td>{{$data->catagory_name}}</td>
                    <td>
                      
                      <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" style="border-radius:20px" href="{{url('delete_catagory',$data->id)}}">Delete</a>
                  
                    </td>
                  </tr>
                  @endforeach
                </table>



            </div>
          </div>
        </div>
        @include('admin.script')
    
  </body>
</html>