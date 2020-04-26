<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends CommonController
{
    public function product()
    {
        return view('product');
    }

    public function single()
    {
        return view('single');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
