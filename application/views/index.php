<!DOCTYPE html>
<html>
  <head>
    <title>Cloud Demo</title>
  </head>
  <body>
    <h1>Quotes</h1>
    <div id="quotes">
<?php
    foreach($quotes as $quote)
    { ?>
      <div class="quote">
        <h2><?= $quote['author'] ?></h2>
        <p><?= $quote['quote'] ?></p>
      </div>
<?php
    } ?>
  </body>
</html>
