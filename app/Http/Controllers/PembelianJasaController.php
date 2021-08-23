<?php

namespace App\Http\Controllers;

use App\Order;
use App\Perbaikan;
use Illuminate\Http\Request;

class PembelianJasaController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(5);
        $repairs = Perbaikan::paginate(5);
        return view('admin.pembelian.index', compact('orders', 'repairs'));
    }
}
