<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Metodos de vistas
    public function index(){
        $customers = $this->read();
        return view('customer.index', compact('customers'));
    }

    //Metodos de crud http
    public function read(){
        return Customer::all();
    }
}
