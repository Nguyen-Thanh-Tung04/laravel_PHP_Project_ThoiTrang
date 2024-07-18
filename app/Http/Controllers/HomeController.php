<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category = Category::query()->get();
        $Product = Product::query()->get();
        return view('welcome', compact('Category','Product'));
    }
    public function detail(string $id)
    {
        $Category = Product::query()->get();
        $Product = Product::query()->where('slug',$id)->first();
        return view('product_detail', compact('Category','Product'));
    }
}