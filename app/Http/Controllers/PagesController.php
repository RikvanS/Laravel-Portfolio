<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home() {
       
    return view('welcome');
   }

   public function bio() {

    return view('bio');
   }

   public function test() {
    return view('test');

   }
}
