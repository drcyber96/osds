<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomSearchController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_platform))
      {
       $data = DB::table('scammers')
         ->select('name', 'phone', 'email', 'bank_name', 'bank_account', 'platform', 'product','link')
         ->where('platform', $request->filter_platform)
         ->where('product', $request->filter_product)
         ->get();
      }
      else
      {
       $data = DB::table('scammers')
         ->select('name', 'phone', 'email', 'bank_name', 'bank_account', 'platform', 'product','link')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $product_name = DB::table('scammers')
          ->select('product')
          ->groupBy('product')
          ->orderBy('product', 'ASC')
          ->get();
     return view('custom_search', compact('product_name'));
    }
}

?>
