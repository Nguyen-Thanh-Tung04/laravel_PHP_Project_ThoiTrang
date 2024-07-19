<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $Category = Category::query()->get();
        return view('client.cart.cart', compact('Category', 'cart'));
    }

    public function addToCart(Request $request)
    {
        $quantity = 0;

        // Thực hiện logic thêm vào giỏ hàng

        // Ví dụ: Trả về số lượng sản phẩm trong giỏ hàng
        $cartItemCount = 10;

        $cart = session()->get('cart', []);

        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $img = $request->input('img');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
            $cart[$id]['img'] = $img; // Thêm trường 'img' vào mảng $cart[$id]
        } else {
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'img' => $img
            ];
        }

        session()->put('cart', $cart);
        // Tính lại số lượng sản phẩm trong giỏ hàng
        $cartItemCount = count($cart);
        // Trả về kết quả dưới dạng JSON
        return response()->json([
            'cartItemCount' => $cartItemCount,
            'message' => 'Bạn đã thêm sản phẩm vào giỏ hàng thành công!'
        ]);
    }
}