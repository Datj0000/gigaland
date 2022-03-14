<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $meta = Setting::find(1);
        $meta_title = $meta->meta_title;
        $meta_desc = $meta->meta_desc;
        $meta_keywords = $meta->meta_keywords;
        $url_canonical = $request->url();
        $introduce = Introduce::all();
        $gallery = Gallery::orderby('gallery_location', 'asc')->get();
        $product = Product::orderby('product_location', 'asc')->get();
        $customer = Customer::orderby('customer_location', 'asc')->limit(12)->get();
        $comment = Comment::orderby('comment_location', 'asc')->get();
        $infomation = Infomation::all();
        return view('userlayout');
    }
}
