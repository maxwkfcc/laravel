<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel 8 course';
        $products = [
            'product1' => 'iPhone',
            'product2' => 'Samsung',
        ];

        $drinks = [
            'drink1' => 'Coke',
            'drink2' => 'Beer',
        ];

        $route = route('nameofproductpage');

        return view('products.index',['title' => $title, 'products' => $products, 'drinks' => $drinks, 'route' => $route]);
    }
    
    public function about() {
        return 'This is the about page';
    }

    public function show($id) {
        return $id;
    }
    
    public function showByName($name) {
        return view('products.showbyname', ['product' => [
            'product1' => 'iPhone',
            'product2' => 'Samsung',][$name] ?? "Product $name not exists"]);
    }
}
