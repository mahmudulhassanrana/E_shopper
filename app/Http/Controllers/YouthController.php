<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;

class YouthController extends Controller
{

   public function index(){
		return view('chome');
   }
   public function shop1(){
		return view('shop.cart');
   }
   public function shop2(){
		return view('shop.products');
   }
   public function shop3(){
		return view('shop.products-details');
   }
   public function blog1(){
		return view('blog.blog');
   }
   public function blog2(){
		return view('blog.single-blog');
   }
   public function contactus(){
		return view('contact-us');
   }
   public function chome(){
      return view('frontEnd.home.home');
   }
public function error(){
      return view('404');
   }
   public function userinfo(){
      $pass = DB::table('users')->select('users.*')->where('users.id','=',Auth::user()->id)->first();
      $N=$pass->name;
      $E=$pass->email;
      $encrypt = $pass->Encryptpassword; 
      $message = Crypt::decrypt($pass->Encryptpassword);
//Encrypt Password is:  {{ $encrypt }}

        return view('userinfo',compact('N','E','message','encrypt'));
   }
}
