<?php
  //この行はコメントアウトです
  echo 'こんにちは';
  echo 'PHPを学ぼう！';
?>
<!--末尾に；（セミコロン）をつける-->

<!--文字列を出力しよう 【「echo」は文字列などを出力するための命令です】-->
<?php echo 'Hello,World!';?>
<!--echoは出力せよという命令-->

<!--計算してみよう【計算記号はJavaと一緒】-->

echo 7 + 3;  <!--結果 10-->
echo 10 - 4; <!--結果 6-->
echo 3 * 6;  <!--結果 18-->
echo 9 / 3;  <!--結果 3-->
echo 5 % 2;  <!--結果 1-->

<!--データの種類【「文字列」や「数値」などのデータの種類がある】-->
<?php
 echo 5 + 2;    //結果　7（数値の計算）

 echo '5 + 2';  //結果　5 + 2（’’は文字列なので）
 ?>

 <!--変数とは【頭に「$」記号をつける・「$変数名 = 値;」とする】-->
 <?php
  $name = 'Bob'; //右辺’Bob’の変数＄nameに代入するとう意味
 echo $name; //結果：Bob
 ?>

<!--正方形の面積を計算【変数を使用する場合】-->
<?php
$length = 7;
$area = $length * $length;
//length　複数回使いまわせる
echo $area; 
//　結果　49
?>

<!--変数名の付け方【読みやすい名前にし・見易いコードにする】-->
<!--良い例-->
$date  <!--◎英単語を用いる-->
$userName<!--◎２語以上の場合は大文字で区切る-->

<!--悪い例　✖️ エラー・ △ 望ましく-->
$1name  <!-- ✖️ 数字開始 -->
$namae  <!-- △ ローマ字開始 -->
$名前    <!-- △ 日本語 -->

<!--変数の更新-->
$num = 3
echo $num; <!--結果　３　-->
$num = 5;　<!--変数$numの値を上書き-->
echo $num;  <!--結果　５-->

<!--変数に数字を足す（１）「変数の値に10を足したい」という時はどのようにすればよいのか-->
$x = 1;
$x = $x + 10;<!--変数$xに10を足し、$xに代入し直す-->
echo $x;  <!-- 結果：11-->

<!--変数に数字を足す（2）-->
<!--基本形-->      <!--省略形-->
$x = $x + 10;     $x += 10;
$x = $x - 10;     $x -= 10;
$x = $x * 10;     $x *= 10;
$x = $x / 10;     $x /= 10;
$x = $x % 10;     $x %= 10;

<!--変数に数字を足す（3）足す数字が１の時だけ・引く数字が１の時だけ-->
$x += 1;   →   $x++;
$x -= 1;   →   $x--;

$x = 3;
$y = 3;
echo ++$x; <!--echoの前に＋１される、結果4 -->
echo $y++; <!--echoの後に＋１される、結果３ -->

<!--文字列を連結しよう【ドット「.」記号を用いると文字列を連結することが出来る】-->
$lesson ='PHP';
echo $lesson.'入門' <!--ドット（.）で連結  結果：PHP入門-->
$level ='入門';
echo $lesson.$level;  <!--結果：PHP入門 -->

<!--「.=」を用いると変数と文字列の連結を省略して書くことが出来ます。 -->
$name ='にんじゃ'；
$name .='わんこ';  <!--$name=$name."わんこ";と同じ意味 -->
 echo $name;  <!--結果：にんじゃわんこ -->

 <!--変数展開 -->
 <!--ダブルクォーテーションで文字列を囲んだ場合、中の変数を{}で囲むとその部分が変数に入っている値で置き換えられます(変数展開)-->
 $name ='にんじゃわんこ'
 echo "こんにちは、{$name}さん"; <!--結果：こんにちは、にんじゃわんこさん（にんじゃわんこさん　$nameが展開される） -->

 <!--シングルクォーテーションで文字列を囲んだ場合は変数展開されず、変数が{}で囲まれていてもそのまま文字列としてみなされます。-->
 echo 'こんにちは、{$name}さん’；<!--結果：こんにちは、{$name}さん（{$name}がそのまま表示される）-->

 <!-- if文 、｛｝の中の処理が実行されます -->
 $x = 20;
 if($x > 10){   <!--($x > 10)条件式（成り立つ） -->
   echo '$xは10より大きい';  <!--処理が実行される -->
 }

 $x = 20;
 if($x > 30){  <!-- 条件式（成り立たない）-->
 echo '$xは30より大きい';   <!--処理が実行されない -->
 }

 <!-- 数値を比較しよう 真「true」か偽「false -->

 <!--大小を比べる-->
  <  <!-- 右辺の方が大きい時true -->
  <= <!-- 右辺の方が大きい又は等しい時true -->
  >  <!-- 右辺の方が小さい時true -->
  >= <!-- 右辺の方が小さい又は等しい時true -->
  == <!-- 右辺と左辺が等しい時true -->
  != <!-- 等しくない時true -->

  <!--if文と真偽値 真偽値は文字列や数値といったデータの種類の１つです -->
  if(true){  <!--（true）必ずif分の中が実行される -->
    echo '条件はtrueです';
  }  <!-- 結果：条件はtrueです -->
 $x = 20;
 if($x > 30<!--false-->){
   echo '$xは30より大きい';  <!--処理は実行されない -->
 }
 if($x > 10<!--true-->){
   echo '$xは10より大きい';  <!--処理が実行される -->
 }
 
 <!--else「もしも〜だったら・・・、そうでなければ・・・」といった条件分岐が可能 -->
 $x = 20;
 if($x == 30){<!--($x == 30)条件式(false) -->
   echo '$xは30です';<!--処理が実行されない -->
 } else {
   each '$xは30ではありません';<!--処理が実行される-->
   <!-- 結果：＄xは３０ではありません -->
 }