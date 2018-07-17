<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>家計簿</title>
<link href="css/home.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/home.js"></script>
</head>
<body>

<form action="save" method="post" accept-charset="utf-8">
{{ csrf_field() }}
<div class="tables">
  <span class="template">
    <span>テンプレート</span>
      <span id="templateTable">
        <div class="line">
          <span class="tableTitle year">年</span>
          <span class="tableTitle month">月</span>
          <span class="tableTitle name">名称</span>
          <span class="tableTitle mainCategory">メインカテゴリー</span>
          <span class="tableTitle subCategory">サブカテゴリ－</span>
          <span class="tableTitle price">値段</span>
          <span class="tableTitle volume">個数</span>
        </div>
        @foreach ($tmpList as $tmp)
        <div class="line">
          <input type="number" name="year[]" class="edit year" value="1" min="1" max="3000" step="1">
          <input type="number" name="month[]" class="edit month" value="1" min="1" max="12" step="1">
          <input type="text" name="name[]" class="edit name" value={{ $tmp['name'] }}>
          <input type="text" name="mainCategory[]" class="edit mainCategory" value={{ $tmp['mainCategory'] }}>
          <input type="text" name="subCategory[]" class="edit subCategory" value={{ $tmp['subCategory'] }}>
          <input type="number" name="price[]" class="edit price" value={{ $tmp['price'] }} min="0" max="1000000" step="1">
          <input type="number" name="volume[]" class="edit volume" value="0" min="0" max="100" step="1">
        </div>
        @endforeach
      </span>
      <a href="{{ action('SaveController@index') }}">テンプレート編集画面へ</a>
  </span>

  <span class="manual">
    <span>手動入力</span>
      <span id="manualTable">
        <div class="line">
          <span class="tableTitle year">年</span>
          <span class="tableTitle month">月</span>
          <span class="tableTitle name">名称</span>
          <span class="tableTitle mainCategory">メインカテゴリー</span>
          <span class="tableTitle subCategory">サブカテゴリ－</span>
          <span class="tableTitle price">値段</span>
          <span class="tableTitle volume">個数</span>
        </div>
      </span>
    <button type="button" id="addManual">追加</button>
  </span>
</div>
<input type="submit" value="保存">
</form>
<div class="buttons">
<a href="{{ action('SaveController@index') }}">一覧画面へ</a>
</div>

</body>
</html>
