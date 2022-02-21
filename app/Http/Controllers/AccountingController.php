<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AccountingRequest;

class AccountingController extends Controller
{
    public function index()
    {
        return view('accounting.index');
    }
    public function products()
    {
        $product = Product::all();
       return view('accounting.products', ['accounting'=>$product]);
    }
    public function writeOff()
    {
        return view('accounting.write-off');
    }
    public function sales()
    {
        return view('accounting.sales');
    }
    public function addProduct(Request $req)
    {

    }
}
