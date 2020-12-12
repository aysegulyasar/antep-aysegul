<?php


namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function showUsers() {
        $users=User::all();
        return view('hakkimda', compact('users'));


    }

    function showProducts() {
        $products= Product::all();
        return view('urunler', compact('products'));


    }
}
