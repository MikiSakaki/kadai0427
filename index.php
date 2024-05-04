<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>産後ケア施設クチコミ登録</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><a class="navbar-brand" href="select.php">口コミ一覧</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php" enctype="multipart/form-data">
            <div class="jumbotron">
                <fieldset>
                    <legend>クチコミを投稿する</legend>
                    <label>ニックネーム：<input type="text" name="name"></label><br>
                    <label>年代：
                        <select name="age">
                        　　<option value="" selected>年代を選択</option>
                            <option value="25">〜25歳</option>
                            <option value="30">〜30歳</option>
                            <option value="35">〜35歳</option>
                            <option value="40">〜40歳</option>
                            <option value="45">〜45歳</option>
                            <option value="46">46歳以降</option>
                        </select></label><br>

                    <label>居住都道府県：
                        <select name="prefectures">
                            <option value="" selected>都道府県を選択</option>
                            <option value="1">北海道</option>
                            <option value="2">青森県</option>
                            <option value="3">岩手県</option>
                            <option value="4">宮城県</option>
                            <option value="5">秋田県</option>
                            <option value="6">山形県</option>
                            <option value="7">福島県</option>
                            <option value="8">茨城県</option>
                            <option value="9">栃木県</option>
                            <option value="10">群馬県</option>
                            <option value="11">埼玉県</option>
                            <option value="12">千葉県</option>
                            <option value="13">東京都</option>
                            <option value="14">神奈川県</option>
                            <option value="15">新潟県</option>
                            <option value="16">富山県</option>
                            <option value="17">石川県</option>
                            <option value="18">福井県</option>
                            <option value="19">山梨県</option>
                            <option value="20">長野県</option>
                            <option value="21">岐阜県</option>
                            <option value="22">静岡県</option>
                            <option value="23">愛知県</option>
                            <option value="24">三重県</option>
                            <option value="25">滋賀県</option>
                            <option value="26">京都府</option>
                            <option value="27">大阪府</option>
                            <option value="28">兵庫県</option>
                            <option value="29">奈良県</option>
                            <option value="30">和歌山県</option>
                            <option value="31">鳥取県</option>
                            <option value="32">島根県</option>
                            <option value="33">岡山県</option>
                            <option value="34">広島県</option>
                            <option value="35">山口県</option>
                            <option value="36">徳島県</option>
                            <option value="37">香川県</option>
                            <option value="38">愛媛県</option>
                            <option value="39">高知県</option>
                            <option value="40">福岡県</option>
                            <option value="41">佐賀県</option>
                            <option value="42">長崎県</option>
                            <option value="43">熊本県</option>
                            <option value="44">大分県</option>
                            <option value="45">宮崎県</option>
                            <option value="46">鹿児島県</option>
                            <option value="47">沖縄県</option>
                        </select></label><br>

                    <label>利用した子供の月齢：
                        <select name="months">
                        　　<option value="" selected>月齢を選択</option>
                            <option value="mon0">0ヶ月</option>
                            <option value="mon1">1ヶ月</option>
                            <option value="mon2">2ヶ月</option>
                            <option value="mon3">3ヶ月</option>
                            <option value="mon4">4ヶ月</option>
                            <option value="mon5">5ヶ月</option>
                            <option value="mon6">6ヶ月</option>
                            <option value="mon7">7ヶ月以降</option>
                        </select></label><br>

                    <label>利用日数：
                        <select name="day">
                        　　<option value="" selected>日数を選択</option>
                            <option value="day0">日帰り</option>
                            <option value="day1">1泊</option>
                            <option value="day2">2泊</option>
                            <option value="day3">3泊</option>
                            <option value="day4">4泊</option>
                            <option value="day5">5泊</option>
                            <option value="day6">6泊</option>
                            <option value="day7">7泊</option>
                            <option value="day14">8泊〜14泊</option>
                            <option value="day15">15泊以上</option>
                        </select></label><br>

                    <label>客室・アメニティ評価：
                            <input type="radio" name="room" value="room１">1
                            <input type="radio" name="room" value="room2">2
                            <input type="radio" name="room" value="room3">3
                            <input type="radio" name="room" value="room4">4
                            <input type="radio" name="room" value="room5">5
                        </label><br>

                    <label>施設・設備評価：
                            <input type="radio" name="facility" value="fa１">1
                            <input type="radio" name="facility" value="fa2">2
                            <input type="radio" name="facility" value="fa3">3
                            <input type="radio" name="facility" value="fa4">4
                            <input type="radio" name="facility" value="fa5">5
                        </label><br>


                    <label>託児サービス評価：
                            <input type="radio" name="childcare" value="chi１">1
                            <input type="radio" name="childcare" value="chi2">2
                            <input type="radio" name="childcare" value="chi3">3
                            <input type="radio" name="childcare" value="chi4">4
                            <input type="radio" name="childcare" value="chi5">5
                        </label><br>

                    <label>接客評価：
                            <input type="radio" name="customerservice" value="cs１">1
                            <input type="radio" name="customerservice" value="cs2">2
                            <input type="radio" name="customerservice" value="cs3">3
                            <input type="radio" name="customerservice" value="cs4">4
                            <input type="radio" name="customerservice" value="cs5">5
                        </label><br>

                        <label>食事評価：
                            <input type="radio" name="food" value="fo１">1
                            <input type="radio" name="food" value="fo2">2
                            <input type="radio" name="food" value="fo3">3
                            <input type="radio" name="food" value="fo4">4
                            <input type="radio" name="food" value="fo5">5
                        </label><br>

                        <label>満足度評価：
                            <input type="radio" name="satisfaction" value="sa１">1
                            <input type="radio" name="satisfaction" value="sa2">2
                            <input type="radio" name="satisfaction" value="sa3">3
                            <input type="radio" name="satisfaction" value="sa4">4
                            <input type="radio" name="satisfaction" value="sa5">5
                        </label><br>

                    <label>コメント：<textArea name="comment" rows="6" cols="50"></textArea></label><br>

                    <label>関連画像を投稿する：

                    <!-- <form action="image_post.php" method="POST" enctype="multipart/form-data"> -->
                    <p><input type="file" name="image"></p>

            


                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
        <!-- Main[End] -->



    </body>
</html>
