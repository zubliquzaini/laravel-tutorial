<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {

        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create() {

        return view('customer.create');
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Customer::create($data);

        return redirect('/customer');
    }
}
