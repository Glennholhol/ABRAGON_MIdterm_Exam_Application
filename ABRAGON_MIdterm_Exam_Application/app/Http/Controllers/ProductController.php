<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Define product list
        $products = [
            ["name" => "iPhone 15", "price" => 999, "description" => "Latest Apple iPhone"],
            ["name" => "Samsung Galaxy S23", "price" => 899, "description" => "Flagship Samsung phone"],
            ["name" => "MacBook Air M2", "price" => 1199, "description" => "Apple's latest MacBook Air"],
            ["name" => "Sony WH-1000XM5", "price" => 349, "description" => "Noise-canceling headphones"],
            ["name" => "PlayStation 5", "price" => 499, "description" => "Next-gen gaming console"]
        ];  // <-- LINE 20 (CHECK FOR SYNTAX ERROR)

        return view('products.index', compact('products'));
    }
}
