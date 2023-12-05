<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Catagory;

use App\Models\Product;

use App\Models\Order;

class AdminController extends Controller
{
    //Kategori sayfasını gösterme işlemi
    public function view_catagory()
    {
        if(Auth::id())
        {
            $data=catagory::all();

            return view('admin.catagory', compact('data'));
        }
        else
        {
            return redirect('login');
        }
    }

    //Kategori ekleme işlemi
    public function add_catagory(Request $request)
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;
        $data->save();

        return redirect()->back()->with('message','Catagory Added Successfully');
    }


    //Kategori silme işlemi
    public function delete_catagory($id)
    {
        $data=catagory::find($id);

        $data->delete();

        return redirect()->back()->with('message','Catagory Deleted Successfully');
    }

    //Ürün ekleme sayfasını gösterme işlemi
    public function view_product()
    {
        $catagory=catagory::all();
        return view('admin.product', compact('catagory'));
    }

    //Ürün ekleme işlemi
    public function add_product(Request $request)
    {
        $product=new product;

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->catagory=$request->catagory;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }


    //Ürünleri gösterme işlemi
    public function show_product()
    {
        
        if(Auth::id())
        {
            $product=product::all();
            return view('admin.show_product',compact('product'));
        }
        else
        {
            return redirect('login');
        }
        
    }

    //Ürün silme işlemi
    public function delete_product($id)
    {
        $product=product::find($id);
        $product->delete();

        return redirect()->back()->with('message','Prosduct deleted successfully');
    }

    //Ürün güncelleme sayfasını gösterme işlemi
    public function update_product($id)
    {
        $product=product::find($id);
        $catagory=catagory::all();
        return view('admin.update_product',compact('product','catagory'));
    }

    //Ürün güncelleme işlemi
    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->catagory=$request->catagory;

        $image=$request->image;

        if($request->hasFile('image'))
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$imagename);
            $product->image=$imagename;
        }

       

        $product->save();


        return redirect()->back()->with('message','Product Added Successfully');
     
    }

    //Ürünün adına göre arama yapıyor
    public function searchdata(Request $request)
    {
        $searchText=$request->search;

        $product=product::where('title','like','%'.$searchText.'%')->get();

        return view('admin.show_product',compact('product'));
    }

    //Siparişleri gösterme işlemi
    public function order()
    {
        
        if(Auth::id())
        {
            $order=order::all();
            return view('admin.order',compact('order'));
        }
        else
        {
            return redirect('login');
        }
        
       
    }

    public function orderdata(Request $request)
    {
       
        $searchText=$request->search;

        $order=order::where('name','like','%'.$searchText.'%')->get();

        return view('admin.order',compact('order'));
    }
    

};
