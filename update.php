<?php

session_start();

//1. POSTデータ取得
$name               = $_POST["name"];
$age                = $_POST["age"];
$prefectures        = $_POST["prefectures"];
$months             = $_POST["months"]; 
$day                = $_POST["day"];
$room               = $_POST["room"];
$facility           = $_POST["facility"];
$childcare          = $_POST["childcare"];
$customerservice    = $_POST["customerservice"]; 
$food               = $_POST["food"];
$satisfaction       = $_POST["satisfaction"];
$comment            = $_POST["comment"];



//ファイルが送信されていない場合はエラー処理
if(!isset($_FILES['image'])){
  echo 'ファイルが送信されていません。';
  exit;
}
// var_dump($image);


//ファイル名を使用して保存先ディレクトリを指定 basename()でファイルシステムトラバーサル攻撃を防ぐ
$image = basename($_FILES['image']['name']);
$save = 'img/' . basename($_FILES['image']['name']);
// var_dump($save);

//move_uploaded_fileで、一時ファイルを保存先ディレクトリに移動させる
if(move_uploaded_file($_FILES['image']['tmp_name'], $save)){
  echo 'アップロード成功！';
}else{
  echo 'アップロード失敗！';
}


//2. DB接続します
// include("funcs.php");
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();

$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_kadai0427_table(name,age,prefectures,months,day,room,facility,childcare,customerservice,food,satisfaction,comment,image,indate)VALUES(:name,:age,:prefectures,:months,:day,:room,:facility,:childcare,:customerservice,:food,:satisfaction,:comment,:image,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':prefectures', $prefectures, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':months', $months, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':day', $day, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':room', $room, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':facility', $facility, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':childcare', $childcare, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':customerservice', $customerservice, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':food', $food, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':satisfaction', $satisfaction, PDO::PARAM_STR);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':image', $image, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("select.php");
}
?>
