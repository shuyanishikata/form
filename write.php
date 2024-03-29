<?php
$name = $_POST['name'];
// $age = $_POST['age'];
$email = $_POST['email'];
// $comment = $_POST['comment'];
$message = $_POST['message'];


// 変数を用意
$time = date("Y-m-d H:i:s");

// $timeや$nameをファイルに書き込む際、区切り文字として、 /(スラッシュ)を結合しています。
// $str = $time . ' / ' . $name . ' /' .  $age . ' /' . $comment;
$str = $name . ' /' .  $email . ' /' . $message;

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
</head>

<style>
.send {
  position: relative;
  color: #158b2b;
  font-size: 20px;
  padding: 10px 0;
  text-align: center;
  margin: 1.5em 0;


}
.send:before {
  content: "";
  position: absolute;
  top: -8px;
  left: 50%;
  width: 150px;
  height: 58px;
  border-radius: 50%;
  border: 5px solid #a6ddb0;
  border-left-color: transparent;
  border-right-color: transparent;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
}

.button08 a {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  padding: 1em 2em;
  width: 300px;
  color: #333;
  font-size: 18px;
  font-weight: 700;
  background-color: #cccccc;
  border-image-source: repeating-linear-gradient(45deg, #3d9ec8 0, #3d9ec8 8px, rgba(0, 0, 0, 0) 8px, rgba(0, 0, 0, 0) 11px);
  border-image-slice: 3;
  border-width: 3px;
  border-image-repeat: round;
  border-style: solid;
  transition: 0.3s;
}

.button08 a::after {
  content: '';
  width: 5px;
  height: 5px;
  border-top: 3px solid #333333;
  border-right: 3px solid #333333;
  transform: rotate(45deg);
}

.button08 a:hover {
  text-decoration: none;
  background-color: #bbbbbb;
}

body {
  padding-top:25px;
  background-color:#454545;
  margin-left:10px;
  margin-right:10px;
}
.container {
  max-width:600px;
  margin:0 auto;
  text-align:center;
  -webkit-border-radius:6px;
  -moz-border-radius:6px;
  border-radius:6px;
  background-color:#FAFAFA;
}
.head {
  -webkit-border-radius:6px 6px 0px 0px;
  -moz-border-radius:6px 6px 0px 0px;
  border-radius:6px 6px 0px 0px;
  background-color:#2ABCA7;
  color:#FAFAFA;
}
h2 {
  text-align:center;
  padding:18px 0 18px 0;
  font-size: 1.4em;
}
input {
  margin-bottom:10px;
}
textarea {
  height:100px;
  margin-bottom:10px;
  resize: none;
}
input:first-of-type
{
  margin-top:35px;
}
input, textarea {
  font-size: 1em;
  padding: 15px 10px 10px;
  font-family: 'Source Sans Pro',arial,sans-serif;
  border: 1px solid #cecece;
  background: #d7d7d7;
  color:#FAFAFA;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 80%;
  max-width: 600px;
}
::-webkit-input-placeholder {
   color: #FAFAFA;
}
:-moz-placeholder {
   color: #FAFAFA;  
}
::-moz-placeholder {
   color: #FAFAFA; 
}
:-ms-input-placeholder {  
   color: #FAFAFA;  
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
label.error {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1em;
    display:block;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#d89c9c;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}
/* media queries */
@media (max-width: 700px) {
  label.error {
    width: 90%;
  }
  input, textarea {
    width: 90%;
  }
  a {
    width:90%;
  }
  body {
  padding-top:10px;
  }  
}
.message {
    font-family:'Source Sans Pro',arial,sans-serif;
    font-size:1.1em;
    display:none;
    padding-top:10px;
    padding-bottom:10px;
    background-color:#2ABCA7;
    width: 80%;
    margin:auto;
    color: #FAFAFA;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border-radius:6px;
}


.next{
    text-decoration:none;
    color:white;
}

</style>

<body>




<div id="contact" method="post" action="write.php">
    <div class="container">
    <div class="head">
    <h2>Register</h2>
    </div>
    <!-- <input type="text" name="name" placeholder="Name" /><br />
    <input  type="email" name="email" placeholder="Email" /><br />
    <textarea type="text" name="message" placeholder="Message"></textarea><br /> -->
    <div class="message">送信しました</div>
    <p class="send">送信しました</p>
    <!-- <div class="button08">
    <a href="read.php">データ一覧はこちら</a>
    </div> -->
    <label>
    <a id="submit" href="read.php">データ一覧はこちら</a>
    </a>
    </label>
    </div>
    </div>

</body>


</html>