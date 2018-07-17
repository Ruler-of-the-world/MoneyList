<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>家計簿</title>
<link href="css/list.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/list.js"></script>
</head>
<body>

<div>
<form action="list" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="time" value={{ $data['previousTimeStamp'] }}>
<input type="submit" value="前の月">
</form>

<form action="list" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="time" value={{ $data['nextTimeStamp'] }}>
<input type="submit" value="次の月">
</form>
</div>

<form action="edit" method="post" accept-charset="utf-8">
{{ csrf_field() }}

<div>
  <div class="line">
    <span class="readOnly year">年</span>
    <span class="readOnly month">月</span>
    <span class="readOnly name">名称</span>
    <span class="readOnly mainCategory">メインカテゴリー</span>
    <span class="readOnly subCategory">サブカテゴリ－</span>
    <span class="readOnly price">値段</span>
    <span class="readOnly button" id="button">ボタン</span>
  </div>
  @foreach ($data['selectData'] as $onlyData)
  <div class="line" id={{ $onlyData->id }}>
    <span class="readOnly year">{{ $onlyData->year }}</span>
    <span class="readOnly month">{{ $onlyData->month }}</span>
    <span class="readOnly name">{{ $onlyData->name }}</span>
    <span class="readOnly mainCategory">{{ $onlyData->main_category }}</span>
    <span class="readOnly subCategory">{{ $onlyData->sub_category }}</span>
    <span class="readOnly price">{{ $onlyData->price }}</span>
    <button type="button" name="editButton" value={{ $onlyData->id }}>編集</button>
  </div>
  @endforeach
</div>

<input type="submit" value="保存">
</form>

<div><a href="{{ action('LoadController@index') }}">入力画面へ</a></div>
</body>
</html>
