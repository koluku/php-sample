<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>text.php</title>
  </head>
  <body>
    <header>
      <h1>text.php</h1>
    </header>
    <main>
      <section>
        <h2>print</h2>
        <p><?php print "Hello, World!"; ?></p>
      </section>
      <section>
        <h2>echo</h2>
        <p><?php echo "Write Your Code"; ?></p>
      </section>
      <section>
        <h2>HTML</h2>
        <?php print "<p>Run on Web</p>\n"; ?>
      </section>
      <section>
        <h2>here document</h2>
        <p>
<?php
print <<<EOD
  If you do anything for your girlfriend, you will happy.<br>\n
  But, can you do?
EOD
 ?>
        </p>
      </section>
    </main>
  </body>
</html>
