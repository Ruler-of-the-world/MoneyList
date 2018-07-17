<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadController extends Controller
{
  public function index()
  {
    $tmpList = array(array('name' => 'バナナ', 'mainCategory' => '食費', 'subCategory' => '生命維持', 'price' => 100));
    return view('home', compact('tmpList'));
  }
}
