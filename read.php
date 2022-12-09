<?php
// ファイルを開く。モードは'r' = 読み込みのみでオープン。
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
// while ($str = explode("/",fgets($openFile))) {
//     echo ("<table><tr><td>$str[0]</td><td>$str[1]</td><td>$str[2]</td><td>$str[3]</td></tr></table>");
// };
// while ($str = fgets($openFile)) {
//     $array = explode("/",$str);
//     echo "<table><tr><td class='time'>$array[0]</td><td class='name'>$array[1]</td><td class='age'>$array[2]</td><td class='comment'>$array[3]</td></tr></table>";
// };
echo "<table style='color:blue; background-color:#2ABCA7'><tr><td class='name'>名前</td><td class='email'>メール</td><td class='message'>メッセージ</td></tr></table>";
while ($str = fgets($openFile)) {
    $array = explode("/",$str);
    echo "<table><tr><td class='name'>$array[0]</td><td class='email'>$array[1]</td><td class='message'>$array[2]</td></tr></table>";
};
// while ($str = fgets($openFile)) {
//     echo nl2br($str);
// };

// while ($str = fgets($openFile)) {
//     $array = explode("/",$str);
//     echo "<table><tr><td>$array[0]</td><td>$array[1]</td><td>$array[2]</td><td>$array[3]</td></tr></table>";
// };

fclose($openFile);

?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
table{
    font-weight: bold;
    /* overflow-wrap:break-word; */
    /* border:1px solid blue; */

}

/* .time{
    width: 300px;
    border:1px solid blue;
} */

.name{
    width: 300px;
    border:1px solid blue;
    
}
.email{
    width: 300px;
    border:1px solid blue;
}
.message{
    width: 400px;
    border:1px solid blue;
}

a {
  margin-top:15px;
  margin-bottom:25px;
  background-color:#2ABCA7;
  padding: 12px 45px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border-radius: 5px;
  border: 1px solid #2ABCA7;
  -webkit-transition: .5s;
  transition: .5s;
  display: inline-block;
  cursor: pointer;
  width:30%;
  color:#fff;
  text-decoration:none;
}
a:hover, .a:hover {
  background:#19a08c;
}
</style>
<body>
<a href="post.php">入力フォームはこちら</a>
</body>
</html>



