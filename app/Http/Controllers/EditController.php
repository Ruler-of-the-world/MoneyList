<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
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
        DB::update('update datas set year = ?, month = ?, name = ?, main_category = ?, sub_category = ?, price = ? where id = ?',
          [$data["year"], $data["month"], $data["name"], $data["mainCategory"], $data["subCategory"], $data["price"], $data["id"]]);
    }
    $selectData = DB::select('select * from datas');
    return view('list', ['selectData' => $selectData]);

  }
}
