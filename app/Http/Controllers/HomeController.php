<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;
@session_start();
class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view('auth.login');
    }

   public function create()
    {
      
      session_destroy();          
      return view('auth.login'); 
    }

   public function ingresar(Request $request){
   	  $login = $request["email"];
      $usuario = User::where('email','=',$login)->first();
      $usua = $usuario->email;
      if(isset($usuario->email)){

          return view('layout', compact('usua'));  
      }
   }
}
