<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {

        $services = [
        ];

        $services = Service::all();

        // dd($services);

        return view('about', compact('services'));
    }

    public function about() {

        $services = [
            'Service 1',
            'Service 2',
            'Service 3',
            'Service 4'
        ];

        return view('about', compact('services'));
    }
}
