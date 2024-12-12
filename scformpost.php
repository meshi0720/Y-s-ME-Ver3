<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スクールチョイスアンケート</title>
</head>
<body>
    <h1>スクールチョイスアンケート</h1>
    <form action="scformresult.php" method="post">
        <p>1. 共学と男子校／女子校、どちらが良いですか？</p>
        <label><input type="radio" name="q1" value="共学"> 共学</label>
        <label><input type="radio" name="q1" value="男子校"> 男子校</label>
        <label><input type="radio" name="q1" value="女子校"> 女子校</label>
        <label><input type="radio" name="q1" value="こだわらない"> こだわらない</label><br>

        <p>2. 制服はある方が良いですか？</p>
        <label><input type="radio" name="q2" value="ある"> ある</label>
        <label><input type="radio" name="q2" value="ない"> ない</label>
        <label><input type="radio" name="q2" value="こだわらない"> こだわらない</label><br>

        <p>3. 通学時間はどこまで耐えられますか？</p>
        <label><input type="radio" name="q3" value="1時間以内"> 1時間以内</label>
        <label><input type="radio" name="q3" value="1時間半以内"> 1時間半以内</label>
        <label><input type="radio" name="q3" value="2時間以内"> 2時間以内</label><br>

        <input type="submit" value="送信">
    </form>
</body>
</html>
