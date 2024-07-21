<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductVariant;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category = Category::query()->get();
        $Product = Product::query()->get();
        return view('welcome', compact('Category', 'Product'));
    }
    public function detail(string $id)
    {
        $Category = Product::query()->get();
        $Product = Product::query()->where('slug', $id)->first();

        $variants = ProductVariant::query()
            ->where('product_id', $Product->id)
            ->join('product_colors', 'product_variants.product_color_id', '=', 'product_colors.id')
            ->join('product_sizes', 'product_variants.product_size_id', '=', 'product_sizes.id')
            ->select('product_variants.*', 'product_colors.name as color', 'product_sizes.name as size')
            ->get();
        return view('product_detail', compact('Category','Product','variants'));
    }
    public function shop()
    {
        $Category = Category::query()->get();
        $Product = Product::query()->get();
        return view('shop', compact('Category', 'Product'));
    }
    public function shopByCategory($iddm)
    {
        $Category = Category::query()->get();

        $selectedCategory = Category::findOrFail($iddm); // Tìm danh mục theo ID

        $Product = Product::where('category_id', $selectedCategory->id)->get();

        return view('shop', compact('Category', 'Product', 'selectedCategory'));
    }
}