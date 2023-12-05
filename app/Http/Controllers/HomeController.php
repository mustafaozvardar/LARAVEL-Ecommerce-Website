<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        $product=Product::all();
        return view('home.userpage',compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $product=Product::all();
            return view('home.userpage',compact('product'));
        }


    }
    
    public function product_details($id)
    {
        if(Auth::id())
        { 
            $product=Product::find($id);
            return view('home.product_details',compact('product'));
        }
        else
        {
            return redirect('login');
        }
       
    }

    public function add_cart(Request $request,$id)
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $product=Product::find($id);

            $cart=new cart();

            $cart->name=$user->name;
            $cart->email=$user->email;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->user_id=$user->id;
            $cart->product_title=$product->title;

            if($product->discount_price!=null)
            {
                $cart->price=$product->discount_price * $request->quantity;
            }
            else
            {
                $cart->price=$product->price * $request->quantity;
            }
          
            $cart->image=$product->image;
            $cart->Product_id=$product->id;
            $cart->quantity=$request->quantity;

            $cart->save();

            return redirect()->back()->with('message','Product Added to Successfully');

       
        }

        else
        {
            return redirect('/login');
        }
    }

    public function show_cart()
    {
        if (Auth::check()) {
            // Kullanıcı oturum açmışsa
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.showcart', compact('cart'));
        } else {
            // Kullanıcı oturum açmamışsa, bir hata mesajı göster
            return redirect()->route('login')->with('error', 'Oturum açmış bir kullanıcı bulunamadı.');
        }
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }

    public function shop()
    {
        $product=Product::all();
        return view('home.shop',compact('product'));
        
    }

    public function remove_cart($id)
    {
        $cart=cart::find($id);
        $cart->delete();

        return redirect()->back();
    }


    public function cash_order()
    {
        $user=Auth::user();
        $userid=$user->id;
        $data=cart::where('user_id','=',$userid)->get();
        
        foreach($data as $data)
        {
            $order=new order();

            $order->name=$data->name;
            $order->email=$data->email;
            $order->phone=$data->phone;
            $order->address=$data->address;
            $order->user_id=$data->user_id;
            $order->product_title=$data->product_title;
            $order->price=$data->price;
            $order->quantity=$data->quantity;
            $order->image=$data->image;
            $order->product_id=$data->Product_id;
            

            $order->payment_status='cash on delivery';
            $order->delivery_status='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);

        }

        return redirect()->back()->with('message','Order Placed Successfully..');
    }


    public function product_search(Request $request)
    {
        $search_text=$request->search;
        $product=product::where('title','LIKE','%'.$search_text.'%')->paginate(1);
        return view('home.shop',compact('product'));
    }

    

}
