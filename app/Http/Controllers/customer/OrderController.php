<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('customer.order-history');
    }

    public function show()
    {
        return view('customer.order-details');
    }
}