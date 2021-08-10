<?php

namespace App\Http\Controllers;

use App\Perbaikan;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerbaikanController extends Controller
{
    public function store(Request $request)
    {
        $attr = $this->validate(request(), [
            'jenis' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
        ]);
        auth()->user()->repairs()->create($attr);
        return back()->with('success', '(Pesanan berhasil Di Buat) Dalam 1x24 jam Customer Service akan segera mengkonsultasikan pesanan dan dilanjutkan survey!');
    }
}
