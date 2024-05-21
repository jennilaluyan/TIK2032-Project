<?php
  // Database connection details
  $host = "localhost";
  $username = "root";
  $password = "";
  $db = "portfolio_blog";

  $conn = new mysqli($host, $username, $password, $db);

  if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
  }

  $article_id = (isset($_GET["id"])) ? ($_GET["id"]) : 1;

  $sql = "SELECT id, judul, konten1, konten2, konten3, konten4, konten5 FROM article WHERE id = " . $article_id . " LIMIT 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synopsis of Samo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<section>";
      echo "<br>";
      echo "<br>";
      echo "<h1 class='title'>".$row['judul']."</h1>";
      echo "<br>";
      echo "<br>";
      echo "<p?>".$row['konten1']."</p>";
      echo "<br>";
      echo "<br>";
      echo "<p?>".$row['konten2']."</p>";
      echo "<br>";
      echo "<br>";
      echo "<p?>".$row['konten3']."</p>";
      echo "<br>";
      echo "<br>";
      echo "<p>".$row['konten4']."</p>";
      echo "<br>";
      echo "<br>";
      echo "<p>".$row['konten5']."</p>";
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "</section>";
    }
  }
  $conn->close()
  ?>
</body>
</html>