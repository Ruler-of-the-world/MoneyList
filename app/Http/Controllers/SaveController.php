<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class SaveController extends Controller
{
  public function index()
  {
    $htmlDatas = Request::all();
    //配列構造の変換
    foreach($htmlDatas as $columnName => $columns){
      if($columnName == "_token"){
        continue;
      }
      foreach($columns as $key => $data){
        $Dates[$key][$columnName] = $data;
      }
    }
    foreach($Dates as $data){
      if($data["volume"] != 0){
        DB::insert('insert into datas (year, month, name, main_category, sub_category, price) values (?, ?, ?, ?, ?, ?)',
          [$data["year"], $data["month"], $data["name"], $data["mainCategory"], $data["subCategory"], $data["price"]]);
      }
    }

    return app('App\Http\Controllers\ListLoadController')->load(time());
  }
}
