<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <main>
    <section>
      <h1>Text</h1>
      <p>
        PHPは基本的にHTML上に記述してブラウザ上で実行する。
      </p>
      <section>
        <h2><?php print "Hello, World!"; ?></h2>
        <p>
          文字の出力はprintで行うことができる。<br>
          記法は文字列、数字によって異なる。
        </p>
      </section>
      <section>
        <h2><?php echo "Write Your Code"; ?></h2>
        <p>
          printの代わりにechoで出力することができる。<br>
          記法はprintと同様。
        </p>
      </section>
      <section>
        <?php
          print "<h2>Run on Web</h2>\n";
          echo "<p>print,echoでHTMLを出力することができる。<br>\n";
         ?>
      </section>
    </section>
  </main>
</body>
</html>
