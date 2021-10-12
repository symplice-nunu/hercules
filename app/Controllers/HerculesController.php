<?php
namespace App\Controllers;
use App\Models\Product;
use CodeIgniter\Controller;

class HerculesController extends Controller
{
    // show products list
    public function index() {
        
        return view('hercules/index');
    }

     public function lading() {
        
        return view('hercules/lading');
    }
    public function ratequote() {
        
        return view('hercules/ratequote');
    }
    public function test() {
        
        return view('hercules/test');
    }


   

}