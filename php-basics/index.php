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
      /* height: 100vh; */
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>Recommended Books</h1>

  <?php
  $books = [
    [
      "name" => "The Great Gatsby",
      "author" => "F. Scott Fitzgerald",
    ],
    [
      "name" => "1984",
      "author" => "George Orwell",
    ],
    [
      "name" => "To Kill a Mockingbird",
      "author" => "Harper Lee",
    ],
  ];
  ?>


  <ul>
    <?php foreach ($books as $book) : ?>
      <?= $book["name"]; ?><br><?= $book["author"]; ?><br></li><br>
    <?php endforeach; ?>
  </ul>

</body>

</html>