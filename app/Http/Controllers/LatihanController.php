<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;

class LatihanController extends Controller
{
    public function rumah()
    {
        return view('rumah');
    }
    public function paragraph()
    {
    	return view('paragraph');
    }

    public function table()
    {
        $barang = data::all();
    	return view('table', compact('barang'));
    }

    public function foto()
    {
        return view('foto');
    }

    public function costum1()
    {
        return view('costum1');
    }
}
