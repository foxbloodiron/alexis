<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function diskonpenjualan()
    {
    	return view('penjualan/diskonpenjualan/diskonpenjualan');
    }
    public function penjualanorder()
    {
    	return view('penjualan/penjualanorder/penjualanorder');
    }
    public function penjualanproject()
    {
    	return view('penjualan/penjualanproject/penjualanproject');
    }
    public function penjualantanpaorder()
    {
    	return view('penjualan/penjualantanpaorder/penjualantanpaorder');
    }
    public function returnpenjualan()
    {
    	return view('penjualan/returnpenjualan/returnpenjualan');
    }
}