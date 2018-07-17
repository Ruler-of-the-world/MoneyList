<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\DB;

class ListLoadController extends Controller
{
  public function index()
  {
    $request = Request::all();
    $timeStamp = $request['time'];
    return $this->load($timeStamp);
  }

  public function load($timeStamp)
  {
    $selectYear = date('Y', $timeStamp);
    $selectMonth = date('n', $timeStamp);
    $data = array();
    $data['selectData'] = DB::select('select * from datas where year = ? and month = ?', [$selectYear, $selectMonth]);
    $data['selectYear'] = $selectYear;
    $data['selectMonth'] = $selectMonth;
    $data['previousTimeStamp'] = strtotime('-1 month', $timeStamp);
    $data['nextTimeStamp'] = strtotime('+1 month', $timeStamp);
    return view('list', ['data' => $data]);
  }
}
