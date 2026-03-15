<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Demo</title>
  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <?php
  $name = "Dark Matter";
  $read = 0;


  if ($read) {
    $message = "You have read \"{$name}\" by Blake Crouch";
  } else {
    $message = "You have NOT read \"{$name}\" by Blake Crouch";
  }
  ?>

  <h1>
    <?= $message; ?>
  </h1>
</body>

</html>