# Text

PHPは基本的にHTML上に記述してブラウザ上で実行する。例外はある。

## print

文字の出力はprintで行うことができる。記法は文字列リテラル、数値リテラルによって異なる。

`print "Hello, World!";`

## echo

printの代わりにechoで出力することができる。記法はprintと同様だが、仕様上で細かい差異があることに留意。

`echo "Write Your Code";`

## print,echoでHTMLを出力

print,echoでHTMLを出力することができる。この場合は文字列リテラルとして扱う。

`print "<p>Run on Web</p>\n";`

## ヒアドキュメント

複数行にわたって文章を記述する場合はヒアドキュメントで記述することができる。  
コードの構造が崩れてしまうため仕様は控えた方が好ましい。

書き方には気をつけなければいけない点があるため、[ドキュメント](http://php.net/manual/ja/language.types.string.php)を参照してください。

```
print <<<EOD
  If you do anything for your girlfriend, you will happy.<br>\n
  But, can you do?
EOD;
```
