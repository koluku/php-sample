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
          記法は文字列リテラル、数値リテラルによって異なる。
        </p>
      </section>
      <section>
        <h2><?php echo "Write Your Code"; ?></h2>
        <p>
          printの代わりにechoで出力することができる。<br>
          記法はprintと同様だが、仕様上で細かい差異があることに留意。
        </p>
      </section>
      <section>
        <?php print "<h2>Run on Web</h2>\n"; ?>
        <p>
          print,echoでHTMLを出力することができる。<br>
          この場合は文字列リテラルとして扱う。
        </p>
      </section>
      <section>
        <h2>You know something to write PHP</h2>
        <p>
          <?php
            print <<<EOD
              複数行にわたって文章を記述する場合はヒアドキュメントで記述することができる。<br>\n
              コードの構造が崩れてしまうため仕様は控えた方が好ましい。
EOD;
           ?>
        </p>
      </section>
    </section>
  </main>
</body>
</html>
