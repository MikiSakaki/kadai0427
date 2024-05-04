<?php
session_start();

$id = $_GET["id"]; //?id~**を受け取る
// include("funcs.php");
include("funcs.php");


//LOGINチェック → funcs.phpへ関数化しましょう！
sschk();

$pdo = db_conn();

//２．データ登録SQL作成
// $stmt = $pdo->prepare("SELECT * FROM gs_kadai0413_table WHERE id=:id");
// $stmt->bindValue(":id", $id, PDO::PARAM_INT);
// $status = $stmt->execute();

$sql = "SELECT * FROM gs_kadai0427_table WHERE id=:id";
$stmt= $pdo->prepare($sql);
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();


//３．データ表示
$values = "";
if($status==false) {
    sql_error($stmt);
}else{
    $v = $stmt->fetch();
    // var_dump($v);
}

// if($status==false) {
//     sql_error($stmt);
// }else{
//     $row = $stmt->fetch();
// }
// ?>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クチコミ内容の編集</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">産後ケア施設クチコミ一覧へ戻る</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->


<!-- Main[Start] -->
<form method="POST" action="update.php" enctype="multipart/form-data">
            <div class="jumbotron">
                <fieldset>
                    <legend>クチコミを編集する</legend>
                    <label>ニックネーム：<input type="text" name="name" value="<?=$v["name"]?>"></label><br>
                   
                    <!-- <label>ニックネーム：<input type="text" name="name" value="<?=$v["name"]?>"></label><br>
                    <?php var_dump($v["name"]); ?> -->
                   

                    <label>年代：</label>
                        <select name="age" value="<?=$v["age"]?>">
                            <option value="" <?php if ($v["age"] == "") echo "selected"; ?>>年代を選択</option>
                            <option value="25" <?php if ($v["age"] == "25") echo "selected"; ?>>〜25歳</option>
                            <option value="30" <?php if ($v["age"] == "30") echo "selected"; ?>>〜30歳</option>
                            <option value="35" <?php if ($v["age"] == "35") echo "selected"; ?>>〜35歳</option>
                            <option value="40" <?php if ($v["age"] == "40") echo "selected"; ?>>〜40歳</option>
                            <option value="45" <?php if ($v["age"] == "45") echo "selected"; ?>>〜45歳</option>
                            <option value="46" <?php if ($v["age"] == "46") echo "selected"; ?>>46歳以降</option>
                        </select></label><br>


                    <label>居住都道府県：
                        <select name="prefectures" value="<?=$v["prefectures"]?>">
                        　　 <option value=""  <?php if ($v["prefectures"] == "") echo "selected"; ?>>都道府県を選択</option> 
                            <option value="1" <?php if ($v["prefectures"] == "1") echo "selected"; ?>>北海道</option>
                            <option value="2" <?php if ($v["prefectures"] == "2") echo "selected"; ?>>青森県</option>
                            <option value="3" <?php if ($v["prefectures"] == "3") echo "selected"; ?>>岩手県</option>
                            <option value="4" <?php if ($v["prefectures"] == "4") echo "selected"; ?>>宮城県</option>
                            <option value="5" <?php if ($v["prefectures"] == "5") echo "selected"; ?>>秋田県</option>
                            <option value="6" <?php if ($v["prefectures"] == "6") echo "selected"; ?>>山形県</option>
                            <option value="7" <?php if ($v["prefectures"] == "7") echo "selected"; ?>>福島県</option>
                            <option value="8" <?php if ($v["prefectures"] == "8") echo "selected"; ?>>茨城県</option>
                            <option value="9" <?php if ($v["prefectures"] == "9") echo "selected"; ?>>栃木県</option>
                            <option value="10" <?php if ($v["prefectures"] == "10") echo "selected"; ?>>群馬県</option>
                            <option value="11" <?php if ($v["prefectures"] == "11") echo "selected"; ?>>埼玉県</option>
                            <option value="12" <?php if ($v["prefectures"] == "12") echo "selected"; ?>>千葉県</option>
                            <option value="13" <?php if ($v["prefectures"] == "13") echo "selected"; ?>>東京都</option>
                            <option value="14" <?php if ($v["prefectures"] == "14") echo "selected"; ?>>神奈川県</option>
                            <option value="15" <?php if ($v["prefectures"] == "15") echo "selected"; ?>>新潟県</option>
                            <option value="16" <?php if ($v["prefectures"] == "16") echo "selected"; ?>>富山県</option>
                            <option value="17" <?php if ($v["prefectures"] == "17") echo "selected"; ?>>石川県</option>
                            <option value="18" <?php if ($v["prefectures"] == "18") echo "selected"; ?>>福井県</option>
                            <option value="19" <?php if ($v["prefectures"] == "19") echo "selected"; ?>>山梨県</option>
                            <option value="20" <?php if ($v["prefectures"] == "20") echo "selected"; ?>>長野県</option>
                            <option value="21" <?php if ($v["prefectures"] == "21") echo "selected"; ?>>岐阜県</option>
                            <option value="22" <?php if ($v["prefectures"] == "22") echo "selected"; ?>>静岡県</option>
                            <option value="23" <?php if ($v["prefectures"] == "23") echo "selected"; ?>>愛知県</option>
                            <option value="24" <?php if ($v["prefectures"] == "24") echo "selected"; ?>>三重県</option>
                            <option value="25" <?php if ($v["prefectures"] == "25") echo "selected"; ?>>滋賀県</option>
                            <option value="26" <?php if ($v["prefectures"] == "26") echo "selected"; ?>>京都府</option>
                            <option value="27" <?php if ($v["prefectures"] == "27") echo "selected"; ?>>大阪府</option>
                            <option value="28" <?php if ($v["prefectures"] == "28") echo "selected"; ?>>兵庫県</option>
                            <option value="29" <?php if ($v["prefectures"] == "29") echo "selected"; ?>>奈良県</option>
                            <option value="30" <?php if ($v["prefectures"] == "30") echo "selected"; ?>>和歌山県</option>
                            <option value="31" <?php if ($v["prefectures"] == "31") echo "selected"; ?>>鳥取県</option>
                            <option value="32" <?php if ($v["prefectures"] == "32") echo "selected"; ?>>島根県</option>
                            <option value="33" <?php if ($v["prefectures"] == "33") echo "selected"; ?>>岡山県</option>
                            <option value="34"  <?php if ($v["prefectures"] == "34") echo "selected"; ?>>広島県</option>
                            <option value="35" <?php if ($v["prefectures"] == "35") echo "selected"; ?>>山口県</option>
                            <option value="36" <?php if ($v["prefectures"] == "36") echo "selected"; ?>>徳島県</option>
                            <option value="37" <?php if ($v["prefectures"] == "37") echo "selected"; ?>>香川県</option>
                            <option value="38" <?php if ($v["prefectures"] == "38") echo "selected"; ?>>愛媛県</option>
                            <option value="39"> <?php if ($v["prefectures"] == "39") echo "selected"; ?>高知県</option>
                            <option value="40" <?php if ($v["prefectures"] == "40") echo "selected"; ?>>福岡県</option>
                            <option value="41" <?php if ($v["prefectures"] == "41") echo "selected"; ?>>佐賀県</option>
                            <option value="42" <?php if ($v["prefectures"] == "42") echo "selected"; ?>>長崎県</option>
                            <option value="43" <?php if ($v["prefectures"] == "43") echo "selected"; ?>>熊本県</option>
                            <option value="44" <?php if ($v["prefectures"] == "44") echo "selected"; ?>>大分県</option>
                            <option value="45" <?php if ($v["prefectures"] == "45") echo "selected"; ?>>宮崎県</option>
                            <option value="46" <?php if ($v["prefectures"] == "46") echo "selected"; ?>>鹿児島県</option>
                            <option value="47" <?php if ($v["prefectures"] == "47") echo "selected"; ?>>沖縄県</option>
                        </select></label><br>

                    <label>利用した子供の月齢：
                        <select name="months" value="<?=$v["months"]?>"> 
                        　　 <option value=""  <?php if ($v["months"] == "") echo "selected"; ?>>月齢を選択</option>                             <option value="mon0" <?php if ($v["months"] == "") echo "selected"; ?>>0ヶ月</option>
                            <option value="mon1" <?php if ($v["months"] == "mon1") echo "selected"; ?>>1ヶ月</option>
                            <option value="mon2" <?php if ($v["months"] == "mon2") echo "selected"; ?>>2ヶ月</option>
                            <option value="mon3" <?php if ($v["months"] == "mon3") echo "selected"; ?>>3ヶ月</option>
                            <option value="mon4" <?php if ($v["months"] == "mon4") echo "selected"; ?>>4ヶ月</option>
                            <option value="mon5" <?php if ($v["months"] == "mon5") echo "selected"; ?>>5ヶ月</option>
                            <option value="mon6" <?php if ($v["months"] == "mon6") echo "selected"; ?>>6ヶ月</option>
                            <option value="mon7" <?php if ($v["months"] == "mon7") echo "selected"; ?>>7ヶ月以降</option>
                        </select></label><br>

                    <label>利用日数：
                        <select name="day" value="<?=$v["day"]?>">
                            <option value=""  <?php if ($v["day"] == "") echo "selected"; ?>>日数を選択</option>  
                            <option value="day0" <?php if ($v["day"] == "day0") echo "selected"; ?>>日帰り</option>
                            <option value="day1" <?php if ($v["day"] == "day1") echo "selected"; ?>>1泊</option>
                            <option value="day2" <?php if ($v["day"] == "day2") echo "selected"; ?>>2泊</option>
                            <option value="day3" <?php if ($v["day"] == "day3") echo "selected"; ?>>3泊</option>
                            <option value="day4" <?php if ($v["day"] == "day4") echo "selected"; ?>>4泊</option>
                            <option value="day5" <?php if ($v["day"] == "day5") echo "selected"; ?>>5泊</option>
                            <option value="day6" <?php if ($v["day"] == "day6") echo "selected"; ?>>6泊</option>
                            <option value="day7" <?php if ($v["day"] == "day7") echo "selected"; ?>>7泊</option>
                            <option value="day14" <?php if ($v["day"] == "day14") echo "selected"; ?>>8泊〜14泊</option>
                            <option value="day15" <?php if ($v["day"] == "day15") echo "selected"; ?>>15泊以上</option>
                        </select></label><br>

                    <label>客室・アメニティ評価：
                            <input type="radio" name="room" value="room１" <?php if ($v["room"] == "room１") echo "checked"; ?>>1
                            <input type="radio" name="room" value="room2"  <?php if ($v["room"] == "room2") echo "checked"; ?>>2
                            <input type="radio" name="room" value="room3"  <?php if ($v["room"] == "room3") echo "checked"; ?>>3
                            <input type="radio" name="room" value="room4"  <?php if ($v["room"] == "room4") echo "checked"; ?>>4
                            <input type="radio" name="room" value="room5"  <?php if ($v["room"] == "room5") echo "checked"; ?>>5
                        </label><br>

                    <label>施設・設備評価：
                            <input type="radio" name="facility" value="fa１" <?php if ($v["facility"] == "fa１") echo "checked"; ?>>1
                            <input type="radio" name="facility" value="fa2" <?php if ($v["facility"] == "fa2") echo "checked"; ?>>2
                            <input type="radio" name="facility" value="fa3" <?php if ($v["facility"] == "fa3") echo "checked"; ?>>3
                            <input type="radio" name="facility" value="fa4" <?php if ($v["facility"] == "fa4") echo "checked"; ?>>4
                            <input type="radio" name="facility" value="fa5" <?php if ($v["facility"] == "fa5") echo "checked"; ?>>5
                        </label><br>


                    <label>託児サービス評価：
                            <input type="radio" name="childcare" value="chi１" <?php if ($v["childcare"] == "chi１") echo "checked"; ?>>1
                            <input type="radio" name="childcare" value="chi2" <?php if ($v["childcare"] == "chi2") echo "checked"; ?>>2
                            <input type="radio" name="childcare" value="chi3" <?php if ($v["childcare"] == "chi3") echo "checked"; ?>>3
                            <input type="radio" name="childcare" value="chi4" <?php if ($v["childcare"] == "chi4") echo "checked"; ?>>4
                            <input type="radio" name="childcare" value="chi5"  <?php if ($v["childcare"] == "chi5") echo "checked"; ?>>5
                        </label><br>

                    <label>接客評価：
                            <input type="radio" name="customerservice" value="cs１" <?php if ($v["customerservice"] == "cs１") echo "checked"; ?>>1
                            <input type="radio" name="customerservice" value="cs2" <?php if ($v["customerservice"] == "cs2") echo "checked"; ?>>2
                            <input type="radio" name="customerservice" value="cs3" <?php if ($v["customerservice"] == "cs3") echo "checked"; ?>>3
                            <input type="radio" name="customerservice" value="cs4" <?php if ($v["customerservice"] == "cs4") echo "checked"; ?>>4
                            <input type="radio" name="customerservice" value="cs5" <?php if ($v["customerservice"] == "cs5") echo "checked"; ?>>5
                        </label><br>

                        <label>食事評価：
                            <input type="radio" name="food" value="fo１" <?php if ($v["food"] == "fo１") echo "checked"; ?>>1
                            <input type="radio" name="food" value="fo2" <?php if ($v["food"] == "fo2") echo "checked"; ?>>2
                            <input type="radio" name="food" value="fo3" <?php if ($v["food"] == "fo3") echo "checked"; ?>>3
                            <input type="radio" name="food" value="fo4" <?php if ($v["food"] == "fo4") echo "checked"; ?>>4
                            <input type="radio" name="food" value="fo5" <?php if ($v["food"] == "fo5") echo "checked"; ?>>5
                        </label><br>

                        <label>満足度評価：
                            <input type="radio" name="satisfaction" value="sa１" <?php if ($v["satisfaction"] == "sa１") echo "checked"; ?>>1
                            <input type="radio" name="satisfaction" value="sa2" <?php if ($v["satisfaction"] == "sa2") echo "checked"; ?>>2
                            <input type="radio" name="satisfaction" value="sa3" <?php if ($v["satisfaction"] == "sa3") echo "checked"; ?>>3
                            <input type="radio" name="satisfaction" value="sa4" <?php if ($v["satisfaction"] == "sa4") echo "checked"; ?>>4
                            <input type="radio" name="satisfaction" value="sa5" <?php if ($v["satisfaction"] == "sa5") echo "checked"; ?>>5
                        </label><br>

                    <label>コメント：<textArea name="comment" rows="6" cols="50"><?=$v["comment"]?></textArea></label><br>

                    <label>関連画像を投稿する：
                    <p><input type="file" name="image" value="<?=$v["image"]?>"></p>

                    <img src="img/<?=$v["image"]?>" alt="">



                    <!-- <img src="" alt="">


                    <label>ニックネーム：<input type="text" name="name" value="<?=$v["name"]?>"></label><br>
                    -->


                    <input type="hidden" name="id" value="<?=$v["id"]?>">
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
<!-- Main[End] -->


</body>
</html>
