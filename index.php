<?php

  $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id veritatis, placeat, autem cumque culpa quibusdam quas voluptatem voluptatibus laborum!";

  $length = strlen($text);

  $badWord = $_GET["badword"];

  $newText = str_replace($badWord, "***", $text);

  $newLength = strlen($newText);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badwords</title>
  </head>
  <body>

    <h2>
      <?php echo $text; ?>
    </h2>

    <p>Lunghezza del testo:
      <?php echo $length; ?>
    </p>

    <h2>
      <?php echo $newText; ?>
    </h2>

    <p>Lunghezza del testo censurato:
      <?php echo $newLength; ?>
    </p>

  </body>
</html>
