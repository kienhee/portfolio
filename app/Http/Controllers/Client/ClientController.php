<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        return view('client.index');
    }
    public function about()
    {
        return view('client.about');
    }
    public function service()
    {
        return view('client.service');
    }
    public function work()
    {
        return view('client.work');
    }
    public function workSingle($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('client.work-single', compact('product'));
    }
    public function contact()
    {
        return view('client.contact');
    }
}
