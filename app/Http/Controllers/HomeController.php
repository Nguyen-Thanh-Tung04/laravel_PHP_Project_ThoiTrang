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
}