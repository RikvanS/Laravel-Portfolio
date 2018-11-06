<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projectscontroller extends Controller
{
    public function tempconverter() {

        return view('projects/tempconverter');
       }
    
       public function clock() {
    
        return view('projects/clock');
       }
    
       public function calculator() {
    
        return view('projects/calculator');
       }
    
       public function unitconverter() {
    
        return view('projects/unitconverter');
       }
    
       public function rockpaperscissors() {
    
        return view('projects/rockpaperscissors');
       }
}
