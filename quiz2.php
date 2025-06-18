<?php
session_start();
$animal_escolhido = $_SESSION["animal"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Quiz</title>
</head>
<body>

  <h1><?php echo $animal_escolhido; ?> is Countable, Uncountable or Both?</h1>

  <form action="" method="POST">
    <div class="options">
      <input type="radio" name="resposta" id="contavel" value="Countable" />
      <label for="contavel">Countable</label>

      <input type="radio" name="resposta" id="incontavel" value="Uncountable" />
      <label for="incontavel">Uncountable</label>

      <input type="radio" name="resposta" id="ambos" value="Both" />
      <label for="ambos">Both</label>
    </div>

    <br />
    <button type="submit">Submit Answer</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $tipo_palavra = $_SESSION["tipo"];
      $tipo_escolhido = $_POST["resposta"];

      echo "<div class='result'>";
      if ($tipo_palavra === $tipo_escolhido) {
          echo "<p>✅ Correct answer, congratulations!</p>";
      } else {
          echo "<p>❌ Wrong answer, better luck next time :(</p>";
          echo "<p>The correct answer is: <strong>$tipo_palavra</strong></p>";
      }
      echo "</div>";
  }
  ?>

</body>
</html>
