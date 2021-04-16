<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showList()
    {
        return view('brand.list');
    }
    public function showForm()
    {
        return view('brand.form');
    }
}
