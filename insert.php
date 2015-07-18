<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>News登録</title>
</head>
<body>
<p><input type="button" value="一覧画面" onClick="location.href='./list.php'"></p>
<h1>News登録</h1>
<form method="post" action="dbinsert.php">
<p>タイトル：<input type="text" name="news_title" size="42" required ></p>
<p>　　本文：<textarea name="news_detail" rows="4" cols="40" required></textarea></p>
<p>表示フラグ（0 非表示 / 1 表示）：<input type="number" name="view_flg" size="20" min="0" max="1" required></p>
<p><input type="submit" value="送信"></p>
</form>

</body>
</html>
