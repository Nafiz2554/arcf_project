<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Post;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        $cart= Cart::all();
        $categories= Category::all(); 
        $posts= Post::all();
        $banners= Banner::all();
        return view('frontend.index',compact('categories','cart','posts','banners'));
    }
    public function addToCart(Request $req){
         $cart=new Cart;
         $cart->user_id=Session()->getId();
         $cart->product_id=$req->product_id;
         $cart->save();
         return redirect('/');
    }

}
