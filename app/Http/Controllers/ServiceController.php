<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function index() {

        $services = Service::all();

        return view('service.index', compact('services'));
    }

    public function store() {

        // Method 1: One data passing
        $service = new Service();
        $service->name = request('name');
        $service->save();

        // Method 2: More than one. Through model
        $data = request()->validate([
            'name' => 'required|min:5|max:10'
        ]);

        Service::create($data);

        // dd(request('name'));

        return redirect()->back();
    }
}
